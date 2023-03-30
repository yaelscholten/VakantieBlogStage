<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', [PostsController::class, 'index']);

Route::resource('/blog', PostsController::class);

Route::get('/search', [PostsController::class, 'search']);

Route::controller(LoginController::class)->group(function () {

    Route::get('login', 'login')->name('login');
    Route::get('registration', 'registration')->name('registration');
    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');
    Route::post('validate_login', 'validate_login')->name('sample.validate_login');

    Route::get('account', 'account')->name('account');
    Route::put('account', 'update')->name('update-account');
});

Route::controller(CommentController::class)->group(function () {

    Route::post('comments', 'store');
    Route::get('/blog/edit-comment/{id}', 'edit');
    Route::put('comments', 'update')->name('update-test');

});

Route::resource('/blog/delete', CommentController::class);


