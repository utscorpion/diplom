@extends('layouts.front')

@section('content')
    <div class="blog">
        <div class="container">
            <div class="post1_header">
                <span class="post1_header_by" title="admin"><a href="{{route('blog')}}">Блог</a></span>
                <p></p>
            </div>
            <form action="{{'searchpost'}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="text" name="request">
                <input type="submit" name="button" value="ПОИСК">
            </form>
            <div class="col-md-8">

                @foreach($articles as $article)
                <div class="post1">
                        <h3><a href="{{route('singleblog', array('id' => $article->id))}}">{{$article->title}}</a></h3>
                        <div class="post1_header">
                                <span class="post1_header_date">
                                    <time datetime="2014-01-01" title="date">{{$article->created_at}}</time>
                                </span>
                                 <span class="post1_header_date">
                                     <a href="{{route('blogsingle', array('tag' => $article->tag_id))}}">{{$article->tag}}</a>
                                </span>

                        </div>
                        <a href="{{route('singleblog', array('id' => $article->id))}}" class="mask"><img src="{{asset($article->img)}}" alt="image" class="img-responsive zoom-img"></a>
                        <p>{{$article->description}}</p>
                        <nav class="cl-effect-7" id="cl-effect-7">
                            <a href="{{route('singleblog', array('id' => $article->id))}}">Read More</a>
                        </nav>
                </div>
                @endforeach

                <ul class="dc_pagination dc_paginationA dc_paginationA06">
                    {{$articles->links()}}
                </ul>
            </div>
            <div class="col-md-4 blog_right">
                <ul class="blog-list1">
                    <h3>Tags</h3>
                    @foreach($tags as $tag)
                        <li><a href="{{route('blogsingle', array('tag' => $tag->id))}}">{{$tag->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection