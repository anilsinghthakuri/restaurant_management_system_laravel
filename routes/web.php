<?php

use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[UserController::class,'index'])->name('login');
Route::post('/login',[UserController::class,'authenticate'])->name('login.authenticate');

Route::middleware(['auth'])->group(function () {
        Route::view('/dashboard', 'dashboard.index')->name('dashboard');

        //product category routes
        Route::resource('product-category', ProductCategoryController::class);

        //product routes
        Route::resource('product', ProductController::class);




        // route for logout
        Route::get('/logout',[UserController::class,'logout'])->name('logout');
});
