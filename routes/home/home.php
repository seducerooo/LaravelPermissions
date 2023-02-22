<?php


use App\Http\Controllers\HomePanelController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomePanelController::class ,'index'])->name('home');
