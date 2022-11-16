<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
//     return view('master');
// });

Route::resource('/', BookController::class);
Route::get('/{id}', [BookController::class, 'show']);
Route::get('/edit/{id}', [BookController::class, 'edit']);
Route::post('/update/{id}', [BookController::class, 'update']);
Route::delete('/{id}', [BookController::class, 'destroy']);