<?php

use App\Http\Controllers\BookController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BookController::class, 'index']);
Route::get('/book/create', [BookController::class, 'create']);
Route::post('/book/create/save', [BookController::class, 'store']);
Route::get('/book/edit/{id}', [BookController::class, 'edit']);
Route::post('/book/update', [BookController::class, 'update']);
Route::get('/book/show/{id}', [BookController::class, 'show']);
Route::delete('/book/delete/{id}', [BookController::class, 'destroy']);


