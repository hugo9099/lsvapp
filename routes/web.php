<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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

// Home Page
Route::get('/', function () {
    return view('index');
});


// All Projects
Route::get('/projects', [ProjectController::class, 'index']);

// Single Project
Route::get('/project/{project}', [ProjectController::class, 'show']);


// All Tasks
Route::get('/tasks', [TaskController::class, 'index']);

// Single Task
Route::get('/task/{task}', [TaskController::class, 'show']);