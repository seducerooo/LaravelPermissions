<?php


use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;



Route::get('/register',[AuthenticationController::class,'index'])->name('auth.register');

