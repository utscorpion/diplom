@extends('layouts.front')

@section('content')
    <div class="blog">
        <div class="container">
            <div class="col-md-8">
                @foreach($articles as $article)
                <div class="post1">
                        <h3><a href="{{route('single')}}">{{$article->title}}</a></h3>
                        <div class="post1_header">
                                <span class="post1_header_date">
                                    <time datetime="2014-01-01" title="date">{{$article->created_at}}</time>
                                </span>
                        </div>
                        <a href="{{route('single')}}" class="mask"><img src="{{$article->img}}" alt="image" class="img-responsive zoom-img"></a>
                        <p>{{$article->description}}</p>
                        <nav class="cl-effect-7" id="cl-effect-7">
                            <a href="#cl-effect-7">Read More</a>
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
                        <li><a href="#">{{$tag}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection