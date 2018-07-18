<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;

class IndexController extends Controller
{
    public function getData ()
    {
        $products = Home::all();
        $arrayProd = [];

        foreach ($products as $product) {
            $arrayProd[] = $product->getAttributes();
        }

        return $arrayProd;
    }



    public function show()
    {
        return view('index', ['data' => $this->getData()]);
    }
}
