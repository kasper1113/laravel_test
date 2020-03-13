<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello() {
        return view('hello');
    }
    public function hello2($count) {
        return view('hello',['count' => $count]);
    }
}
