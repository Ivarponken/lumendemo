<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    function show(Request $request)
    {
        $background = $request->get('back');
        $text = $request->get('front');
        return View::make('farger', ['backColor' => $background, 'textColor' => $text]);
    }

    function post(Request $request)
    {
        $background = $request->request->get('backColor');
        $text = $request->request->get('textColor');
        return View::make('farger', ['backColor' => $background, 'textColor' => $text]);
    }
    function withParams(Request $request)
    {
        // ta in rutt parametrar
        $background = $request->route('back');
        $text = $request->route('front');

        //om det finns gäller query parametern istället 
        $background = $request->get('back', $background);
        $text = $request->get('front', $text);
        return View::make('farger', ['backColor' => $background, 'textColor' => $text]);
    }
}

