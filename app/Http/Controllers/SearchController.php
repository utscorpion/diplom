<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {

        $beers = Product::search('Коэнзим')->get();
        dd($beers);

       /*return view('app.search');*/
    }

/*    public function store(Request $request)
    {
        dd($request->isMethod('GET'));
        if($request->isMethod('POST')){

        } else {
            return view('app.search');
        }

    }*/
}
