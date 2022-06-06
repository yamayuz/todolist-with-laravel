<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('todolist');
// });

Route::get('/', 'DisplayTodolistController@index');
