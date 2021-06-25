<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ApiController;


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

Route::get('/',[NewController::class,'mainweb']);
Route::get('/profile', function () {
    return view('main/profile');
});

Route::get('/author', [AuthorController::class,'author']);
Route::put('/author', [AuthorController::class,'update']);
Route::post('/author', [AuthorController::class,'store']);
Route::delete('/author', [AuthorController::class,'destroy']);

    Route::get('/news', [NewController::class,'news']);
Route::post('/news', [NewController::class,'store']);
Route::put('/news', [NewController::class,'update']);
Route::delete('/news', [NewController::class,'destroy']);

Route::get('/api/turnamen', [ApiController::class,'api']);
Route::post('/api/turnamen', [ApiController::class,'store']);
Route::put('/api/turnamen/{id}', [ApiController::class,'update']);
Route::delete('/api/turnamen/{id}', [ApiController::class,'destroy']);