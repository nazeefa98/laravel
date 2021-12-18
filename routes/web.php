<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('students','App\Http\Controllers\StudentController');

Route::get('/import-form',[\App\Http\Controllers\EmployeeController::class,'importForm']);
Route::post('/import',[\App\Http\Controllers\EmployeeController::class,'import'])->name('employee.import');
Route::get('/import-form',[\App\Http\Controllers\EmployeeController::class,'index']);

Route::get('/import-form-dartx',[\App\Http\Controllers\DartxController::class,'importFormDartx']);
Route::post('/import-dartx',[\App\Http\Controllers\DartxController::class,'importDartx'])->name('dartx.import');
