<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){


// });


Route::get('/choose', [ChooseRoleController::class, 'choose'])->name('choose');

Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
