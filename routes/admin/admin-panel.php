<?php


use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard',[AdminPanelController::class ,'index'])->name('admin.dashboard');

                                                 /*      */
                                              /* create role */
                                                 /*      */

Route::get('/role',[RoleController::class ,'create'])->name('admin.role.create');
Route::post('/role',[RoleController::class ,'store'])->name('admin.role.store');

                                              /*             */
                                           /* create permission */
                                              /*             */

Route::get('/permission',[PermissionController::class ,'create'])->name('admin.permission.create');
Route::post('/permission',[PermissionController::class ,'store'])->name('admin.permission.store');
