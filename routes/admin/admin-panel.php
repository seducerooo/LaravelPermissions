<?php


use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard',[AdminPanelController::class ,'index'])->name('admin.dashboard');

                                                   /* */
                                                /* roles */
                                                   /* */

Route::get('/role',[RoleController::class ,'create'])->name('admin.role.create');
Route::post('/role',[RoleController::class ,'store'])->name('admin.role.store');
Route::get('/roles',[RoleController::class,'index'])->name('admin.role.list');

                                                 /*       */
                                              /*  permissions */
                                                 /*       */

Route::get('/permission',[PermissionController::class ,'create'])->name('admin.permission.create');
Route::post('/permission',[PermissionController::class ,'store'])->name('admin.permission.store');
Route::get('/permissions',[PermissionController::class,'index'])->name('admin.permission.list');
Route::get('/permissions/{id}/delete',[PermissionController::class,'destroy'])->name('admin.permission.destroy');
Route::get('/permissions/{id}/edit',[PermissionController::class,'edit'])->name('admin.permission.edit');
//Route::patch('/permissions/{id}/update',[PermissionController::class,'update'])->name('admin.permission.update');



                                                     /* */
                                                 /*  posts */
                                                     /* */
Route::get('/post',[PostController::class,'create'])->name('admin.post.create');
Route::post('/post',[PostController::class,'store'])->name('admin.post.store');
Route::get('/debug',[AdminPanelController::class,'RoleCreate']);
