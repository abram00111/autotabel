<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ShtatController;
use App\Http\Controllers\TabelController;
use App\Http\Controllers\TableHistoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',  [TestController::class, 'index']);

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::middleware(['auth'])->group(function () {
    Route::get('/autotabel', function (){
       return view('auth_user.index');
    })->name('autotabel');

    Route::get('/shtat', [ShtatController::class, 'allShtats'])->name('shtat');
    Route::get('/shtat/{id}', [ShtatController::class, 'index']);

    Route::get('/tabel', [TabelController::class, 'allTabel'])->name('tabel');
    Route::get('/tabel/{id}', [TabelController::class, 'index']);

    Route::get('/tabelHistory', [TableHistoryController::class, 'index'])->name('tabelHistory');

    Route::POST('/create_tabel', [TabelController::class, 'create_tabel'])->name('create_tabel');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
