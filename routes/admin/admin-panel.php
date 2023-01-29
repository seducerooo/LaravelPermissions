<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard',[AuthenticationController::class ,'index'])->name('admin.dashboard');
