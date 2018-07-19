<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class CatalogController extends Controller
{
    public function getProducts ()
    {
        //$uri = $this->app->make(Request::class);

        $array = [];

        $products = Product::all();
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
            Image::make($url)->resize(300, 200)->save("images/cache/$url");
            $arrayProduct['picture'] =  "images/cache/$url";
            $arrayProduct['description'] =  $productAtr['description'];
            $array[] = $arrayProduct;
        }
       // $array['uri'] = $request->getUri();
       // dd($array);
        return $array;
    }

    public function getProductsUp ()
    {
        //$uri = $this->app->make(Request::class);

        $array = [];

        $products = DB::table('products')->orderBy('title', 'desc')->get();

        foreach ($products as $product) {


            $arrayProduct = [];

            $arrayProduct['id'] =  $product->id;
            $arrayProduct['title'] =  $product->title;
            switch (Category::find($product->category_id)->getAttributes()['title']){
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
            $url = $product->picture;
            Image::make($url)->resize(300, 200)->save("images/cache/$url");
            $arrayProduct['picture'] =  "images/cache/$url";
            $arrayProduct['description'] =  $product->description;
            $array[] = $arrayProduct;
        }
        // $array['uri'] = $request->getUri();
        // dd($array);
        return $array;
    }

    public function getProductsDown ()
    {
        //$uri = $this->app->make(Request::class);

        $array = [];

        $products = DB::table('products')->orderBy('title', 'asc')->get();

        foreach ($products as $product) {


            $arrayProduct = [];

            $arrayProduct['id'] =  $product->id;
            $arrayProduct['title'] =  $product->title;
            switch (Category::find($product->category_id)->getAttributes()['title']){
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
            $url = $product->picture;
            Image::make($url)->resize(300, 200)->save("images/cache/$url");
            $arrayProduct['picture'] =  "images/cache/$url";
            $arrayProduct['description'] =  $product->description;
            $array[] = $arrayProduct;
        }
        // $array['uri'] = $request->getUri();
        // dd($array);
        return $array;
    }

    public function show()
    {
        return view('app.catalog', ['products' => $this->getProducts()]);
    }

    public function up()
    {
        return view('app.catalog', ['products' => $this->getProductsUp()]);
    }

    public function down()
    {
        return view('app.catalog', ['products' => $this->getProductsDown()]);
    }
}
