<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    function show()
    {
        $lista = ['Cykla', 'Sova', 'Andas', 'Äta'];
        return View::make('todo', ['lista' => $lista]);
    }
    function add(Request $request)
    {
        $lista = json_decode($request->request->get('lista'));
        $lista[] = $request->request->get('uppgift');
        return View::make('todo', ['lista' => $lista]);
    }
}