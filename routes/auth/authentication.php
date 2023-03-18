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

                                             /**/
                                         /*  user */
                                             /**/


                  /*  create   store     update   destroy   attach form   */

Route::get('/users/create',[UserController::class,'create'])->name('auth.user.create');

Route::post('/users/create',[UserController::class,'store'])->name('auth.user.store');

Route::get('/users/{id}/edit',[UserController::class,'edit'])->name('auth.user.edit');

Route::patch('/users/{id}/update',[UserController::class,'update'])->name('auth.user.update');
Route::put('/users/role/{id}/update',[UserController::class,'uprole'])->name('auth.user.role.update');

Route::get('/users/{id}/delete',[UserController::class,'destroy'])->name('auth.user.destroy');

Route::get('/users/{id}/modify',[UserController::class,'modify'])->name('auth.user.modify');
Route::post('/users/{id}/attach',[UserController::class,'attach'])->name('auth.user.attach');
Route::post('/users/{id}/detach',[UserController::class,'detach'])->name('auth.user.detach');
