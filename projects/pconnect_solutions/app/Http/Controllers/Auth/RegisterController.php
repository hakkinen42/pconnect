<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;;

use App\Notifications\WelcomeMailNotification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function showForm()
    {

        return view("auth.register");
    }

    public function register(RegisterRequest $request)
    {

        $data = $request->only('name', 'email', 'password');

        $user = User::create($data);

        $info = __('messages.register.controller.info');
        $verifyMessage = __('messages.register.controller.verify');

        alert()->info($info, $verifyMessage);

        return redirect()->back();
    }

    public function verify(Request $request)
    {
        $userID = Cache::get('verify_token_' . $request->token);

        if (!$userID) {

            $warningMessage = __('messages.register.controller.warning');
            $expiredToken = __('messages.register.controller.token');
            alert()->warning($warningMessage, $expiredToken);
            return redirect()->route('register');
        }

        $userQuery = User::query()
            ->where('id', $userID);

        $user = $userQuery->firstOrFail();

        $user->email_verified_at = now();
        $user->save();

        Auth::login($user);

        $successMessage = __('messages.register.controller.success');
        $verifiedAccount = __('messages.register.controller.verifiedAccount');

        alert()->success($successMessage, $verifiedAccount);

        return redirect()->route('index');
    }
    public function sendVerifyMailShowForm()
    {
        return view('auth.verify-mail');
    }

    public function sendVerifyMail(Request $request)
    {
        $data = $request->only('email');

        $user = User::query()
            ->where('email', $data['email'])
            ->whereNull('email_verified_at')
            ->first();

        if ($user) {
            $token = Str::random(40);

            Cache::put('verify_token_' . $token, $user->id, 3600);

            $user->notify(new WelcomeMailNotification($token));
        }

        alert()->success('Başarılı', 'Mail adresinize doğrulama maili gönderilmiştir.');
        return redirect()->back();
    }
}
