<?php

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
Route::get('crud',[App\Http\Controllers\crudController::class,'index']);
Route::get('crud/create',[App\Http\Controllers\crudController::class,'create']);
Route::post('crud/create',[App\Http\Controllers\crudController::class,'store']);
Route::get('crud/{id}/edit',[App\Http\Controllers\crudController::class,'edit']);
Route::put('crud/{id}/edit',[App\Http\Controllers\crudController::class,'update']);
Route::get('crud/{id}/delete',[App\Http\Controllers\crudController::class,'destroy']);

//student
Route::get('crudStudent',[App\Http\Controllers\studentController::class,'indexStudent']);
Route::get('crudStudent/createStudent',[App\Http\Controllers\studentController::class,'createStudent']);
Route::post('crudStudent/createStudent',[App\Http\Controllers\studentController::class,'store']);
Route::get('crudStudent/{id}/editStudent',[App\Http\Controllers\studentController::class,'edit']);
Route::put('crudStudent/{id}/editStudent',[App\Http\Controllers\studentController::class,'update']);
Route::get('crudStudent/{id}/delete',[App\Http\Controllers\studentController::class,'destroy']);

Route::get('/', function () {
    return view('frontend.index');
});
