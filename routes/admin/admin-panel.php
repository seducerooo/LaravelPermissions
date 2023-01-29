<?php


use App\Http\Controllers\AdminPanelController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard',[AdminPanelController::class ,'index'])->name('admin.dashboard');
