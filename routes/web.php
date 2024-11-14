<?php

use App\Http\Controllers\TodoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');
// Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');
// Route::patch('/todos/{id}/toggle', [TodoController::class, 'toggleComplete'])->name('todos.toggle');
// Route::delete('/todos/{id}', [TodoController::class, 'destroy'])->name('todos.destroy');


Route::get('/', [TodoController::class, 'index'])->name('todos.index');
Route::post('/', [TodoController::class, 'store'])->name('todos.store');
Route::patch('/{id}/toggle', [TodoController::class, 'toggleComplete'])->name('todos.toggle');
Route::delete('/{id}', [TodoController::class, 'destroy'])->name('todos.destroy');