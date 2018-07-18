<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Admin\Models\Subcategory;

class SinglePageController extends Controller
{
    public function execute(Request $request)
    {
        /*$arr = explode('/', $request->getUri());
        dd($arr);*/

        $products = Product::all();
        $product = $products->find($request->id)->getAttributes();

        $categoryId = Category::find($product['category_id'])->getAttributes()['title'];
        $subcategoryId = Subcategory::find($product['subcategory_id'])->getAttributes()['title'];

        $product['category'] = $categoryId;
        $product['subcategory'] = $subcategoryId;

        return view('app.single', ['product' => $product]);
    }
}
