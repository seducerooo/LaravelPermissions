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
Route::controller(RoleController::class)->group(function () {
    Route::get('/role','create')->name('admin.role.create');
    Route::post('/role','store')->name('admin.role.store');
    Route::get('/roles','index')->name('admin.role.list');
    Route::get('/roles/{role}/edit','edit')->name('admin.role.edit');
    Route::patch('/roles/{role}/update','update')->name('admin.role.update');
    Route::get('/role/{role}/delete', 'destroy')->name('admin.role.destroy');



    Route::get('role/{id}/modify','modify')->name('admin.role.modify');
    Route::get('role/{id}/dmodify','dmodify')->name('admin.role.dmodify');
    Route::post('role/{id}/attach','attach')->name('admin.role.attach');
    Route::post('role/{id}/detach','detach')->name('admin.role.attach');
});





                                                 /*       */
                                              /*  permissions */
                                                 /*       */
Route::controller(PermissionController::class)->group(function () {
Route::get('/permission','create')->name('admin.permission.create');
Route::post('/permission','store')->name('admin.permission.store');
Route::get('/permissions','index')->name('admin.permission.list');
Route::get('/permissions/{permission}/delete','destroy')->name('admin.permission.destroy');
Route::get('/permissions/{permission}/edit','edit')->name('admin.permission.edit');
Route::patch('/permissions/{permission}/update','update')->name('admin.permission.update');
});


                                                     /* */
                                                 /*  posts */
                                                     /* */
Route::controller(PostController::class)->group(function () {
    Route::post('/post','create')->name('admin.post.create');
    Route::post('/post','store')->name('admin.post.store');
    Route::get('/posts','index')->name('admin.post.list');
    Route::get('/posts/{post}/edit','edit')->name('admin.post.edit');
    Route::get('posts/{post}/delete','destroy')->name('admin.post.destroy');
    Route::patch('/posts/{post}/update','update')->name('admin.post.update');
});



Route::get('/debug',[AdminPanelController::class,'RoleCreate']);
