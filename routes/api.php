<?php

use App\Http\Controllers\InventoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//	return $request->user();

//Item
Route::post('/inventory',[InventoryController::class,'storeItem']);
Route::post('/inventory/{inventory}/update',[InventoryController::class,'updateItem']);
Route::get('/inventory/{id?}',[InventoryController::class,'getItem']);
Route::delete('/inventory/{inventory}/delete',[InventoryController::class,'deleteItem']);


