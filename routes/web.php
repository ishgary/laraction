<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationController;
use App\Models\Users;

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

Route::get('/register', [registrationController::class, 'registerShow' ]);
Route::post('/register', [registrationController::class,'register' ]);

Route::get('/login', [registrationController::class, 'loginShow']);
Route::get('/welcome', function(){
    return view('welcome');
});

Route::post('/login', [registrationController::class, 'log']);

Route::get('/customer/view',[registrationController::class, 'view']);
Route::group(['middleware'=>['auth.check']],function(){
    Route::get('/', [AuthController::class,'dashboard'])->name('/'); 
    Route::get('users',[AuthController::class, 'show'])->name('users');
});