<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinglePageController extends Controller
{





    public function show()
    {
        dd($data);
        return view('app.single');
    }
}
