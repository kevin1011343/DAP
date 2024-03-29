<?php

use App\Http\Controllers\KaryawanController;
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

// Route::get('/dashboard', function () {
//     if (session('behasil_login')) {
//         return view('index');
//     }else{
//         return redirect('/');
//     }
// });
Route::get('/',[KaryawanController::class, 'index'])->name('index');
Route::get('/karyawan/tambah',[KaryawanController::class, 'tambah'])->name('tambah');
Route::get('/karyawan/edit/{id}',[KaryawanController::class, 'edit'])->name('edit');
Route::post('/karyawan/store',[KaryawanController::class, 'store'])->name('store');
Route::get('/karyawan/hapus/{id}',[KaryawanController::class, 'delete'])->name('delete');













