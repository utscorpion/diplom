<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Tag;
use Intervention\Image\Facades\Image;

class SearchPostController extends Controller
{

    public function getTags ()
    {

        $tags = Tag::all();
        return $tags;
    }

    public function store(Request $request)
    {
        $data = $request->all()['request'];

        $articles = Article::search($data)->paginate(2);

        foreach ($articles as $article) {
            $url = $article->picture;
            Image::make($url)->resize(690, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("images/cache/$url");
            $article->img = "images/cache/$url";
            $article->tag = Tag::find($article->tag_id)->getAttributes()['title'];
        }

        return view('app.blog', ['tags' => $this->getTags(), 'articles' => $articles]);


    }
}
