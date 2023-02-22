<?php


use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\UserController;
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

Route::get('/logout',[AuthenticationController::class,'logout'])->name('auth.logout');

                                          /*               */
                                       /* list(display) users */
                                          /*               */
Route::get('/users',[UserController::class,'index'])->name('auth.user.list');

                                            /*      */
                                         /* create user */
                                            /*      */
Route::get('/users/create',[UserController::class,'create'])->name('auth.user.create');
Route::post('/users/create',[UserController::class,'store'])->name('auth.user.store');




