<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontController::class, "index"])->name('index');

Route::get('lang/{lang}', [LanguageController::class, 'changeLanguage'])->name('change.language');


/** Auth */
Route::prefix("register")->middleware('guest')->group(function () {
    Route::get("/", [RegisterController::class, 'showForm'])->name("register");
    Route::post("/", [RegisterController::class, 'register']);
});
// Route::prefix('login')->middleware(['throttle:100,60', 'guest'])->group(function () {
Route::prefix('login')->middleware('guest')->group(function () {
    Route::get("/", [LoginController::class, 'showForm'])->name('login');
    Route::post("/", [LoginController::class, 'login']);
});
Route::post('logout', [LoginController::class, 'logout'])->name("logout");

Route::get('auth/{driver}/callback', [LoginController::class, 'socialiteVerify'])->name('login.socialite-verify');
Route::get('auth/{driver}', [LoginController::class, 'socialite'])->name('login.socialite');

Route::get("confirm/{token}", [RegisterController::class, 'verify'])->name('verify');
Route::get('/confirm-mail', [RegisterController::class, 'sendVerifyMailShowForm'])->name('send-verify-mail');
Route::post('/confirm-mail', [RegisterController::class, 'sendVerifyMail']);

Route::prefix("home")->name('admin.')->middleware("auth")->group(function () {

    Route::get("/", [HomeController::class, 'index'])->name("home");
});
