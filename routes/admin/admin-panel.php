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
Route::get('/roles/{id}/edit',[RoleController::class,'edit'])->name('admin.role.edit');
Route::patch('/roles/{id}/update',[RoleController::class,'update'])->name('admin.role.update');
Route::get('/role/{id}/delete', [RoleController::class,'destroy'])->name('admin.role.destroy');

                                                 /*       */
                                              /*  permissions */
                                                 /*       */

Route::get('/permission',[PermissionController::class ,'create'])->name('admin.permission.create');
Route::post('/permission',[PermissionController::class ,'store'])->name('admin.permission.store');
Route::get('/permissions',[PermissionController::class,'index'])->name('admin.permission.list');
Route::get('/permissions/{id}/delete',[PermissionController::class,'destroy'])->name('admin.permission.destroy');
Route::get('/permissions/{id}/edit',[PermissionController::class,'edit'])->name('admin.permission.edit');
Route::patch('/permissions/{id}/update',[PermissionController::class,'update'])->name('admin.permission.update');



                                                     /* */
                                                 /*  posts */
                                                     /* */
Route::get('/post',[PostController::class,'create'])->name('admin.post.create');
Route::post('/post',[PostController::class,'store'])->name('admin.post.store');
Route::get('/posts',[PostController::class,'index'])->name('admin.post.list');
Route::get('/posts/{id}/edit',[PostController::class,'edit'])->name('admin.post.edit');
Route::get('posts/{id}/delete',[PostController::class,'destroy'])->name('admin.post.destroy');
Route::patch('/posts/{id}/update',[PostController::class,'update'])->name('admin.post.update');
Route::get('/debug',[AdminPanelController::class,'RoleCreate']);
