<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);
Route::get('/todos', [TodoController::class, 'index']);


Route::get('/edit', [TodoController::class, 'editTodo']);
Route::post('/edit/{id}', [TodoController::class, 'updateTodo']);


Route::post('/todos', [TodoController::class, 'addTodo']);
Route::delete('/todos/{id}', [TodoController::class, 'deleteTodo']);