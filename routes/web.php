<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeDepartmentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route:: get('dashboard', [AdminController::class,'index'])->name('superdashboard')->middleware('Admin');

Route:: get('HomeDepartment', [HomeDepartmentController::class,'HomeDepartment'])->name('HomeDepartment')->middleware('HomeDepartment');
Route:: get('/', [AdminController::class,'login'])->name('adminlogin');
Route::post('/captcha-validation', [App\Http\Controllers\HomeController::class, 'capthcaFormValidate']);
Route::get('/reload-captcha', [App\Http\Controllers\HomeController::class, 'reloadCaptcha']);
Route::Post('/logine', [App\Http\Controllers\HomeController::class, 'login'])->name('atempuser');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
