<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\transactionController;
use App\Models\Users;
use App\Models\tran;

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
Route::get('/register', [registrationController::class, 'registerShow']);
Route::post('/register', [registrationController::class,'store' ]);

Route::get('/login', [registrationController::class, 'loginShow']);
Route::post('edit/{id}',[transactionController::class, 'update'])->name('update');

Route::post("/createTrans", [transactionController::class, 'store']);

Route::post('/login', [registrationController::class, 'log']);

Route::get('/customer/view',[registrationController::class, 'view']);
Route::group(['middleware'=>['auth.ware']],function(){
    Route::get('welcome', [registrationController::class,'dashboard'])->name('welcome'); 
    Route::get('customer_view',[registrationController::class, 'show'])->name('customer_view');
    Route::view('/createTrans','createTrans')->name('createTrans');
    Route::get('listTrans',[transactionController::class, 'show'])->name('listTrans');
    Route::get('destroy/{id}',[transactionController::class, 'destroy'])->name('destroy');
    Route::get('edit/{id}',[transactionController::class, 'edit'])->name('edit');
});