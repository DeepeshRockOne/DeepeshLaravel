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

Route::get('/', [StudentController::class, 'index']);
Route::get('/index', [StudentController::class, 'index']);
Route::get('/view_records', [StudentController::class, 'show']);
Route::post('/register_student', [StudentController::class, 'store']);
Route::get('/view_records/{id}', [StudentController::class, 'edit']);
Route::post('/update_record/{id}', [StudentController::class, 'update']);
Route::get('/delete_records/{id}', [StudentController::class, 'destroy']);