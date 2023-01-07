<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index()
    {
        return view("Todos.index");
    }

    public function create()
    {
        return view("Todos.create");
    }
    public function store(Request $request)
    {
    //    dd($request->all());
    Todo::create($request->all());
    return redirect()->with("message","Todo created successful");
    }
}
