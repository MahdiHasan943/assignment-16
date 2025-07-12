<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
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
    return view('home');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/task', [TaskController::class, 'showForm'])->name('task.form');
Route::post('/task', [TaskController::class, 'submitForm'])->name('task.submit');
Route::get('/task/confirmation', [TaskController::class, 'confirmation'])->name('task.confirmation');