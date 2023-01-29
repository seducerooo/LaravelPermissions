<?php

use App\Models\Authentication;
use Illuminate\Support\Facades\Route;



Route::get('/register',[Authentication::class ,'index'])->name('auth.register');

