<?php

namespace App\Http\Controllers;

use App\Todo;   
use Illuminate\Http\Request;

class TodoController extends Controller
{
    
    public function index()
    {
        $todo = new Todo();
        $todos = $todo->all();
        // $todos = todosテーブルの内容が全て入っている
        
        return view('todo.index', ['todos' => $todos]); 
    }
    

    public function create()
    {
        return view('todo.create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $todo = new Todo();
        $todo->fill($inputs);
        $todo->save();

        return redirect()->route('todo.index');
    }

    public function show($id)
    {
        $model = new Todo();
        $todo = $model->find($id);
        return view('todo.show', ['todo' => $todo]);
    }

}
