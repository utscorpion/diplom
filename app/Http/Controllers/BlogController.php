<?php

namespace App\Http\Controllers;

//use App\Article;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    public function getTags ()
    {

        $tags = Tag::all();
        return $tags;
    }

    public function getArticles ()
    {
        $articles = DB::table('news')->paginate(2);
        foreach ($articles as $article) {
            $url = $article->picture;
            Image::make($url)->resize(690, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("images/cache/$url");
            $article->img = "images/cache/$url";
            $article->tag = Tag::find($article->tag_id)->getAttributes()['title'];
        }
        return $articles;
    }

    public function getAtrId($id)
    {
        $articles = DB::table('news')->where('tag_id', $id)->paginate(1);
        foreach ($articles as $article) {
            $url = $article->picture;
           // Image::make($url)->resize(300, 200)->save("images/cache/$url");
            $article->img = $url;
            $article->tag = Tag::find($article->tag_id)->getAttributes()['title'];
        }
        return $articles;

    }

    public function show($id)
    {
        return view('app.blog', ['tags' => $this->getTags(), 'articles' => $this->getAtrId($id)]);
    }


    public function execute()
    {
        return view('app.blog', ['tags' => $this->getTags(), 'articles' => $this->getArticles()]);
    }
}
