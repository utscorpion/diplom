<?php

namespace App\Http\Controllers;

use App\Admin\Models\News;
use App\Tag;
use Illuminate\Http\Request;

class SinglePostController extends Controller
{
    public function execute(Request $request)
    {
        /*$arr = explode('/', $request->getUri());
        dd($arr);*/
        $products = News::all();
        $product = $products->find($request->id)->getAttributes();

        $categoryId = Tag::find($product['tag_id'])->getAttributes()['title'];

        $product['tag'] = $categoryId;


        return view('app.singlepost', ['product' => $product]);
    }
}
