<?php


use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

                                       /*          */
                                   /*  authentication */
                                       /*          */

Route::controller(AuthenticationController::class)->group(function () {
    Route::get('/register','register')->middleware('AlreadyLoggedIn')->name('auth.register');
    Route::post('/register','store')->name('auth.store');
    Route::get('/login','login')->middleware('AlreadyLoggedIn')->name('auth.login');
    Route::post('/login','logged')->name('auth.logged');
    Route::get('/logout','logout')->name('auth.logout');
});
                                             /**/
                                         /*  user */
                                             /**/

Route::controller(UserController::class)->group(function () {
    Route::get('/users','index')->name('auth.user.list');
    Route::get('/users/create','create')->name('auth.user.create');
    Route::post('/users/create','store')->name('auth.user.store');
    Route::get('/users/{user}/edit','edit')->name('auth.user.edit');
    Route::patch('/users/{user}/update','update')->name('auth.user.update');
    Route::get('/users/{user}/delete','destroy')->name('auth.user.destroy');

});
