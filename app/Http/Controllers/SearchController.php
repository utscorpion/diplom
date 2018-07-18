<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        dd('!!!');

        /*$beers = Product::search('БАД')->get();
        dd($beers);*/
    }
}
