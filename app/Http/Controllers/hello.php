<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hello extends Controller
{
    public function hello()
    {
        return view('hello');
    }
}
