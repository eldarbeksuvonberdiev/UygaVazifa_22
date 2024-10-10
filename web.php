<?php
use App\Controllers\CategoryController;
use App\Controllers\StudentController;
use App\Routes\Route;

#Fanlarga aloqador linklar
Route::get('/',[CategoryController::class,'index']);
Route::get('/notfound404',[CategoryController::class,'notfound']);

Route::post('/create',[CategoryController::class,'create']);
Route::post('/delete',[CategoryController::class,'delete']);
Route::post('/show',[CategoryController::class,'show']);
Route::post('/edit',[CategoryController::class,'edit']);
Route::post('/update',[CategoryController::class,'update']);


#Talabalarga aloqador linklar
Route::get('/student',[StudentController::class,'student']);
Route::get('/tocreate',[StudentController::class,'createStudent']);

Route::post('/tocreate',[StudentController::class,'createStudent']);
Route::post('/screate',[StudentController::class,'create']);
Route::post('/sdelete',[StudentController::class,'delete']);
Route::post('/sshow',[StudentController::class,'show']);
Route::post('/sedit',[StudentController::class,'editStudent']);
Route::post('/supdate',[StudentController::class,'update']);


?>