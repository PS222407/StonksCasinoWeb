<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\card_skinController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::view('/', 'index')->name('index');
Route::view('/download', 'download')->name('download');
Route::view('/Bibliotheek', 'library')->name('library');
Route::view('/AlgemeneVoorwaarden', 'termsandcoditions')->name('termsandcoditions');

Route::get('winkel', [card_skinController::class, 'index'])->name('winkel');
Route::view('/Gebruikesnaam', 'changeUsername')->middleware('auth')->name('ChangeUsername');
Route::view('/Email', 'changeEmail')->middleware('auth')->name('ChangeEmail');
Route::view('/wachtwoord', 'changePassword')->middleware('auth')->name('ChangePassword');

Auth::routes(['verify' => true]);

Route::get('/management', [AccountController::class, 'index'])->middleware('auth')->name('manegement');
Route::get('/management/{id}', [AccountController::class, 'edit'])->middleware('auth');
Route::get('management/ban/{id}', [AccountController::class, 'update'])->name('management.ban');
Route::get('management/remove/{id}', [AccountController::class, 'destroy'])->name('management.remove');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/account-info', [App\Http\Controllers\HomeController::class, 'account'])->middleware('verified')->name('account');
Route::post('update', [App\Http\Controllers\UserController::class, 'update'])->middleware('auth')->name('update');
Route::post('updateusername', [App\Http\Controllers\UserController::class, 'changeusername'])->name('updateusername');
Route::post('updateemail', [App\Http\Controllers\UserController::class, 'changeemail'])->name('updateemail');
Route::post('updatepassword', [App\Http\Controllers\UserController::class, 'changepassword'])->name('updatepassword');

Route::post('selectcard', [App\Http\Controllers\UserController::class, 'selectcard'])->middleware('auth')->name('selectcard');
Route::post('buycard', [App\Http\Controllers\UserController::class, 'buycard'])->middleware('auth')->name('buycard');
