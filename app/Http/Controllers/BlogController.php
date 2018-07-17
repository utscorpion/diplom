<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    public function getTags ()
    {
        $arrayTags = [];

        $tags = Tag::all();
        foreach ($tags as $tag) {
            $tagAtr = $tag->getAttributes();

            $arrayTags[] = $tagAtr['title'];
        }
        return $arrayTags;
    }

    public function getArticles ()
    {
        $articles = DB::table('news')->paginate(1);
        foreach ($articles as $article) {
            $url = $article->picture;
            Image::make($url)->resize(300, 200)->save("images/cache/$url");
            $article->img = "images/cache/$url";
        }

        return $articles;
    }


    public function show()
    {
        return view('app.blog', ['tags' => $this->getTags(), 'articles' => $this->getArticles()]);
    }
}
