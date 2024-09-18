<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\Admin\MainController as AdminMainController;
use App\Http\Controllers\Blog\User\MainController as UserMainController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



/** Admin routes */
Route::group(['middleware' => ['status','auth']],function () {

    Route::group(['prefix' => 'admin'], function() {

        Route::resource('index',AdminMainController::class)->names('blog.admin.index');
   });

});

/* User routes */
Route::group(['middleware' => ['auth']],function () {

    Route::group(['prefix' => 'user'], function() {
        Route::resource('index',UserMainController::class)->names('blog.user.index');
    });
});


//Route::resource('user',UserMainController::class)->names('blog.user');

