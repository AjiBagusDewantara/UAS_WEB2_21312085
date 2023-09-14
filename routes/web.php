<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UasController;

// Tampil data
Route::get('/npm', [UasController::class, 'index']);

// Form tambah data
Route::get('/npm/create', [UasController::class, 'create']);
Route::post('/npm', [UasController::class, 'store']);

// Form edit data
Route::get('/npm/{id}/edit', [UasController::class, 'edit']);
Route::put('/npm/{id}', [UasController::class, 'update']);

// Proses hapus data
Route::delete('/npm/{id}', [UasController::class, 'destroy']);


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

Route::get('/', function () {
    return view('welcome');
});
