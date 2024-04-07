<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::view('/','pages.index')->name('welcome');

require __DIR__. "/pages/page.php";
require __DIR__. "/users/user.php";
require __DIR__. "/admins/admin.php";

Auth::routes();
Route::post('registration',[RegisterController::class,'handlerRegistration'])->name('registration');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
