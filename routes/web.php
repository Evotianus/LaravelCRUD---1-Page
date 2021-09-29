<?php

use App\Http\Controllers\CrudController;
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

Route::get('/', [CrudController::class, 'index']);
Route::get('/create', [CrudController::class, 'create']);
Route::post('/tambah', [CrudController::class, 'store']);
Route::get('/hapus/{id}', [CrudController::class, 'destroy']);
Route::post('/update/{id}', [CrudController::class, 'update']);