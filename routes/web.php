<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerLedgerController;
use App\Http\Controllers\CustomerReceiptController;
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

        //Customer routes
        Route::resource('customer', CustomerController::class);

        //Customer receipt routes
        Route::resource('customer-receipt', CustomerReceiptController::class);
        Route::get('customer-detail-receipt-entry/{id}', [CustomerReceiptController::class,'show_details_for_receipt_entry'])->name('customer-detail-receipt-entry.show_details_for_receipt_entry');


        //customer ledger routes
        Route::get('/customer-ledger',[CustomerLedgerController::class,'index'])->name('customer-ledger.index');
        Route::post('/customer-ledger-show',[CustomerLedgerController::class,'show_customer_ledger_on_name_and_date'])->name('customer-ledger-show.show_customer_ledger_on_name_and_date');


        // route for logout
        Route::get('/logout',[UserController::class,'logout'])->name('logout');
});
