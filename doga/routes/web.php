<?php

use App\Http\Controllers\BasketController;
use App\Models\User;
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

Route::get('/api/basket', [BasketController::class,'index']);
Route::get('/api/basket/{id}', [BasketController::class,'show']);
Route::post('/api/basket', [BasketController::class,'store']);
Route::put('/api/basket/{id}', [BasketController::class,'update']);
Route::delete('/api/basket/{id}', [BasketController::class,'index']);


/* View */

Route::get('/baskets/new', [BasketController::class,'newView']);

Route::get('/baskets/edit/{id}', [BasketController::class,'editView']);

Route::get('/baskets/list', [BasketController::class,'listView']);