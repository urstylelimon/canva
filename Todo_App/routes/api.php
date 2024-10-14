<?php

use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; 


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/items',[ItemController::class,'index']);
Route::prefix('/item')->group(function(){
Route::post('/store',[ItemController::class,'store']);
Route::put('/{id}',[ItemController::class,'update']);
Route::delete('/{id}',[ItemController::class,'destroy']);
// Route::get('/search', [ItemController::class, 'search']);



});