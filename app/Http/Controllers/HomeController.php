<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Travel;

class HomeController extends Controller
{
    function home() {
        return view('home');
    }
}
