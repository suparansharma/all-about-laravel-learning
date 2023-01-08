<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Dotenv\Validator;
use Illuminate\Http\Request;

class TodoController extends Controller
{ 
    // protected $make;
    //
    public function index()
    {
        return view("Todos.index");
    }

    public function create()
    {
        return view("Todos.create");
    }

    // $messages=['title.max'=>]
    public function store(TodoRequest $request)
  
    {
    //    dd($request->all());

    // $rules=['title'=>'required | max:255'];
    // $messages=['title.max'=>'Title should not be greater then 255 chars'];

    // $validator = Validator::make($request->all(),$rules,$messages);
    // // $request->validate([
    // //     'title'=>'required',
    // // ]);
    // if ($validator->fails()) {
    //     return redirect()->back()
    //                 ->withErrors($validator)
    //                 ->withInput();
    //             }
                Todo::create($request->all());
                return redirect()->back()->with("message","Todo created successful");
}
}