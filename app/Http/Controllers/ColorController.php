<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    function show()
    {
        return View::make('farger');
    }

    function post(Request $request)
    {
        $background = $request->request->get('backColor');
        $text = $request->request->get('textColor');
        return View::make('farger', ['backColor' => $background, 'textColor' => $text]);
    }
}
