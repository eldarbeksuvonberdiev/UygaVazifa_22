<?php
use App\Controllers\CategoryController;
use App\Routes\Route;

Route::get('/',[CategoryController::class,'index']);
Route::get('/about',[CategoryController::class,'about']);
Route::get('/contact',[CategoryController::class,'contact']);
Route::post('/create',[CategoryController::class,'create']);
Route::post('/delete',[CategoryController::class,'delete']);
Route::post('/show',[CategoryController::class,'show']);
Route::post('/edit',[CategoryController::class,'edit']);
Route::post('/update',[CategoryController::class,'update']);

?>