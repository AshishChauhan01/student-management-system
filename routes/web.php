<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', [StudentController::class, 'show'])->name('home');

Route::get('view/{id}', [StudentController::class, 'view']);

Route::get('add-student', [StudentController::class, 'addForm'])->name('add-student');
Route::post('add', [StudentController::class, 'addStudent'])->name('add');

Route::get('update-student/{id}', [StudentController::class, 'updateForm'])->name('update-form');
Route::post('update/{id}', [StudentController::class, 'updateStudent'])->name('update');

Route::get('delete-student/{id}', [StudentController::class, 'deleteStudent'])->name('student-delete');
