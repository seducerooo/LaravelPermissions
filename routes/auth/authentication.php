<?php


use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;


                                             /*    */
                                          /* Register */
                                             /*    */
Route::get('/register',[AuthenticationController::class,'register'])->middleware('AlreadyLoggedIn')->name('auth.register');
Route::post('/register',[AuthenticationController::class,'store'])->name('auth.store');

                                               /* */
                                            /* login */
                                               /* */
Route::get('/login',[AuthenticationController::class,'login'])->middleware('AlreadyLoggedIn')->name('auth.login');
Route::post('/login',[AuthenticationController::class,'logged'])->name('auth.logged');
