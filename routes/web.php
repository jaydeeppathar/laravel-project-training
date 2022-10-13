<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ContactusController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;

use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\FrontTheme\FrontThemeController;
use App\Http\Controllers\FrontTheme\FrontHomeController;

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

// Route::get('/front', function () {
//     return view('frontTheme.default');
// });

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');       
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


Route::group(['prefix'=>'admin','namespaces'=>'Admin'],function(){   
    Route::get('/index',[AdminHomeController::class,'index'])->name('admin.index');
    Route::resource('/post',PostController::class);
});

Route::get('/home',[FrontHomeController::class,'home'])->name('home');
Route::get('/about',[FrontHomeController::class,'about'])->name('about');
Route::get('/service',[FrontHomeController::class,'service'])->name('service');
Route::get('/shortcodes',[FrontHomeController::class,'shortcodes'])->name('shortcodes');
Route::get('/blogs',[FrontHomeController::class,'blog'])->name('blogs');
Route::get('/contact',[FrontHomeController::class,'contact'])->name('contact');
Route::resource('/contactus',ContactusController::class);
Route::resource('/carousel',CarouselController::class);

Route::resource('/user',UserController::class);

Route::get('send-mail', [MailController::class,'index']);

Route::resource('/category',CategoryController::class);
Route::resource('/blog',BlogController::class);