<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();
Route::group(['middleware' => 'role:admin','prefix' => 'admin','as'=>'admin.'], function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
	Route::get('logout', [App\Http\Controllers\Admin\DashboardController::class, 'logout'])->name('logout');
	Route::group(['prefix'=>'actors','as'=>'actors.'],function(){
		Route::get('add',[App\Http\Controllers\Admin\ActorsController::class,'add'])->name('add');
		Route::post('add', [App\Http\Controllers\Admin\ActorsController::class, 'addPost'])->name('add.post');
		Route::get('{id}/edit', [App\Http\Controllers\Admin\ActorsController::class, 'edit'])->name('edit');
		Route::post('{id}/edit', [App\Http\Controllers\Admin\ActorsController::class, 'editPost'])->name('edit.post');
		Route::post('{id}/delete', [App\Http\Controllers\Admin\ActorsController::class, 'delete'])->name('delete');
		Route::get('list', [App\Http\Controllers\Admin\ActorsController::class, 'list'])->name('list');
	});
	Route::group(['prefix' => 'movies','as'=>'movies.'], function () {
		Route::get('add', [App\Http\Controllers\Admin\MovieController::class, 'add'])->name('add');
		Route::post('add', [App\Http\Controllers\Admin\MovieController::class, 'addPost'])->name('add.post');
		Route::get('{id}/edit', [App\Http\Controllers\Admin\MovieController::class, 'edit'])->name('edit');
		Route::post('{id}/edit', [App\Http\Controllers\Admin\MovieController::class, 'editPost'])->name('edit.post');
		Route::post('{id}/delete', [App\Http\Controllers\Admin\MovieController::class, 'delete'])->name('delete');
		Route::get('list', [App\Http\Controllers\Admin\MovieController::class, 'list'])->name('list');
		Route::get('import', [App\Http\Controllers\Admin\MovieController::class, 'import'])->name('import');
		Route::post('import', [App\Http\Controllers\Admin\MovieController::class, 'importPost'])->name('import.post');
		Route::post('search', [App\Http\Controllers\Admin\MovieController::class, 'searchPost'])->name('search');
	});
});
Route::group(['middleware' => 'role:basicplan|role:premiumplan','prefix' => 'movie','as'=>'movie.'], function () {
    Route::get('dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('dashboard');
	Route::get('view', [App\Http\Controllers\User\DashboardController::class, 'view'])->name('view');
	Route::get('logout', [App\Http\Controllers\User\DashboardController::class, 'logout'])->name('logout');
});
