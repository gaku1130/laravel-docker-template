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
        dd($todos);
        
        return view('todo.index', ['todos' => $todos]); 
    }
    
}
