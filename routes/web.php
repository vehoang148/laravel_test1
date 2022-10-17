<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('student_manage',[StudentController::class, 'get_all_student']);
Route::get('student_create',[StudentController::class, 'create']);
Route::post('student_save',[StudentController::class, 'save']);
Route::get('student_view/{id}',[StudentController::class, 'get_student_by_id']);
Route::get('student_edit/{id}',[StudentController::class, 'edit']);
Route::post('student_update',[StudentController::class, 'update']);
Route::get('student_delete/{id}',[StudentController::class, 'delete']);


