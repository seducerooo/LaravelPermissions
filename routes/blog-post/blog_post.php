<?php


use App\Http\Controllers\HomePostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/blog-post',[HomePostController::class ,'index'])->name('blog-post');


