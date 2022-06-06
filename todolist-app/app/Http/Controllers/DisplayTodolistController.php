<?php

namespace App\Http\Controllers;

class DisplayTodolistController extends Controller
{
    public function index()
    {
        return view('todolist');
    }
}
