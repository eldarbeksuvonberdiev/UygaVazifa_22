<?php
use App\Controllers\CategoryController;
use App\Routes\Route;

Route::get('/',[CategoryController::class,'index']);
Route::get('/about',[CategoryController::class,'about']);
Route::get('/contact',[CategoryController::class,'contact']);
Route::post('/about',[CategoryController::class,'index']);

?>