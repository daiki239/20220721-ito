<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);
Route::get('/todos', [TodoController::class, 'index']);


Route::get('/edit', [TodoController::class, 'edit']);
Route::post('/edit', [TodoController::class, 'update']);


Route::post('/todos', [TodoController::class, 'addTodo']);
Route::delete('/todos/{id}', [TodoController::class, 'deleteTodo']);