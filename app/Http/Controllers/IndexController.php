<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;

class IndexController extends Controller
{
    public function getData ()
    {
        $products = Home::all();
    }

    public function show()
    {
        return view('index');
    }
}
