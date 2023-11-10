<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MasterController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function (){
	Route::get('register', 'register')->name('register');
	Route::post('register', 'registerSimpan')->name('register.simpan');
});

Route::get('/home', function () {
	return view('main.index');
});

// Route::get('/category', function () {
// 	return view('master.category');
// })->name('category');

// Part Master Category
Route::controller(MasterController::class)->prefix('category')->group(function (){
	Route::get('', 'category')->name('category');
	Route::get('tambah', 'tambah')->name('category.tambah');
	Route::post('tambah', 'simpan')->name('category.tambah.simpan');
	Route::get('edit/{id}', 'edit')->name('category.edit');
	Route::post('edit/{id}', 'update')->name('category.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('category.hapus');
});
// Route::get('/category', [MasterController::class, 'category']);

// Part Master Location
Route::controller(MasterController::class)->prefix('location')->group(function (){
	Route::get('', 'location')->name('location');
	Route::get('tambahL', 'tambahL')->name('location.tambahL');
	Route::post('tambahL', 'simpanL')->name('location.tambahL.simpanL');
	Route::get('editL/{id}', 'editL')->name('location.editL');
	Route::post('editL/{id}', 'updateL')->name('location.tambahL.updateL');
	Route::get('hapusL/{id}', 'hapusL')->name('location.hapusL');
});

// Part Inventory Summary
