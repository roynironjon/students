<?php

use App\Http\Controllers\StudentController;
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
Route::get('/student/list', [StudentController::class, 'list'])->name('student.list');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::get('/student/view/{id}', [StudentController::class, 'view'])->name('student.view');
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');
Route::get('/student/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');
Route::get('/student/status/{id}', [StudentController::class, 'status'])->name('student.status');
