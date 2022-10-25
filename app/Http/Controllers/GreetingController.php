<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function showMessage($greeting)
    {
        return view('greeting', [
            'greet' => $greeting,
        ]);
    }
}
