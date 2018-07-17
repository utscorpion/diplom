<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Intervention\Image\Facades\Image;

class CatalogController extends Controller
{
    public function getProducts ()
    {
        $array = [];

        $products = Product::all();
        foreach ($products as $product) {
            $arrayProduct = [];
            $productAtr = $product->getAttributes();
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
            Image::make($url)->resize(300, 200)->save("images/cache/$url");
            $arrayProduct['picture'] =  "images/cache/$url";
            $arrayProduct['description'] =  $productAtr['description'];
            $array[] = $arrayProduct;
        }
        return $array;
    }


    public function show()
    {
        return view('app.catalog', ['products' => $this->getProducts()]);
    }
}
