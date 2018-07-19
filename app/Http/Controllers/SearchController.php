<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {

       if($request->isMethod('post')){

       } else {
           return view('app.search');
       }

    }
}
