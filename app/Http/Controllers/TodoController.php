<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
 function index()
 {
   $todos = Todo::all();
   return view('index', ['todos' => $todos]);
 }

 function addTodo(Request $request) 
 {
   $todo = new Todo();
   $todo->text = $request->text;
   $todo->save();
   return redirect('/todos');
 }


public function edit(Request $request)
    {
        $todo = todo::find($request->id);
        return view('edit', ['form' => $todo]);
    }
    public function update(todoRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Author::where('id', $request->id)->update($form);
        return redirect('/');
    }










 function deleteTodo($id) 
 {
   $todo = Todo::find($id);
   $todo->delete();
   return redirect('/todos');
 }
}