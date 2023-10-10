<?php

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
Route::get('/about',[homeController::class, 'about'])
->name('app_about');
Route::match(['get', 'post'], '/dashboard', [homeController::class, 'dashboard'])
->name('app_dashboard');
Route::get('/contact',[homeController::class, 'contact'])
->name('app_contact');
Route::get('/coaching',[homeController::class, 'coaching'])
->name('app_coaching');
Route::get('/coaching1',[homeController::class, 'coaching1'])
->name('coaching_orientation');
Route::get('/coaching2',[homeController::class, 'coaching2'])
->name('coaching_professionnel');
