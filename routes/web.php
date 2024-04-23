<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/',[homeController::class, 'home'])
->name('app_home');
Route::get('/blog',[homeController::class, 'blog'])
->name('app_blog');
Route::get('/about',[homeController::class, 'about'])
->name('app_about');
Route::get('/temoignages',[homeController::class, 'temoin'])
->name('app_temoin');
Route::match(['get', 'post'], '/dashboard', [homeController::class, 'dashboard'])
->name('app_dashboard');
Route::get('/contact',[homeController::class, 'contact'])
->name('app_contact');
Route::get('/coaching',[homeController::class, 'coaching'])
->name('app_coaching');
Route::get('/coaching-business',[homeController::class, 'coaching1'])
->name('coaching_business');
Route::get('/coaching-pro',[homeController::class, 'coaching2'])
->name('coaching_professionnel');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin']);
Route::delete('logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){
    Route::resource('article',ArticleController::class)->except(['show']);
});
