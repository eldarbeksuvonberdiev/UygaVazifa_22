<?php
use App\Controllers\CategoryController;
use App\Controllers\StudentController;
use App\Routes\Route;

Route::get('/',[CategoryController::class,'index']);
Route::get('/student',[StudentController::class,'student']);

Route::post('/create',[CategoryController::class,'create']);
Route::post('/delete',[CategoryController::class,'delete']);
Route::post('/show',[CategoryController::class,'show']);
Route::post('/edit',[CategoryController::class,'edit']);
Route::post('/update',[CategoryController::class,'update']);

Route::post('/screate',[StudentController::class,'create']);
Route::post('/sdelete',[StudentController::class,'delete']);
Route::post('/sshow',[StudentController::class,'show']);
Route::post('/sedit',[StudentController::class,'edit']);
Route::post('/supdate',[StudentController::class,'update']);

?>