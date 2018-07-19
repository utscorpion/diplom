<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use Intervention\Image\Facades\Image;

class SearchController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all()['request'];


        $products = Product::search($data)->get();

        foreach ($products as $product) {
            $arrayProduct = [];
            $productAtr = $product->getAttributes();
            $arrayProduct['id'] =  $productAtr['id'];
            $arrayProduct['title'] =  $productAtr['title'];
            switch (Category::find($productAtr['category_id'])->getAttributes()['title']){
                case 'БАД':
                    $arrayProduct['tag'] = 'web';
                    break;
                case 'Косметика':
                    $arrayProduct['tag'] = 'print';
                    break;
                case 'Уход и гигиена':
                    $arrayProduct['tag'] = 'design';
                    break;
            }
            $url = $productAtr['picture'];
            Image::make($url)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("images/cache/$url");
            $arrayProduct['picture'] =  "images/cache/$url";
            $arrayProduct['description'] =  $productAtr['description'];
            $arrayProduct['characteristic'] =  $productAtr['characteristic'];
            $array[] = $arrayProduct;
        }
        return view('app.catalog', ['products' => $array]);


    }
}
