<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function showForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();
            if (!$user->hasVerifiedEmail()) {

                Auth::logout();
                $warningMessage = __('messages.login.controller.warning');
                $verifyMailMessage = __('messages.login.controller.verify_mail');



                alert()->warning($warningMessage, $verifyMailMessage);

                return redirect()->back();
            }
        } else {

            // Fehlermeldung nach erfolgloser Anmeldung
            return redirect()->back()->withErrors([
                'check' =>  __('messages.login.controller.check')


            ]);
        }

        return redirect()->route('admin.home');
    }



    public function logout()
    {
        Auth::logout();

        return redirect()->route('index');
    }

    public function socialite($driver)
    {
        return Socialite::driver($driver)->redirect();
    }

    public function socialiteVerify($driver)
    {
        $user = Socialite::driver($driver)->user();
        $checkUser = User::query()->where('email', $user->getEmail())->first();
        if ($checkUser) {
            Auth::login($checkUser);
            return redirect()->route('index');
        }
        $createUser = User::create([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => bcrypt(123456),
            'email_verified_at' => now()
        ]);

        Auth::login($createUser);
        return redirect()->route('admin.home');
    }
}
