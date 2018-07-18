@extends('layouts.front')

@section('content')
    <div class="blog">
        <div class="container">
            <div class="col-md-8">
                <div class="post1">
                    <div class="post1_header">
                        <span class="post1_header_by" title="admin"><a href="{{route('blog')}}">Блог</a></span>
                        <span class="post1_header_by" title="admin"><a href="#">|{!! $product['tag'] !!}</a></span>
                    </div>
                    <h3>{!! $product['title'] !!}</h3>
                    <img src="{{asset($product['picture'])}}" class="img-responsive" alt="">
                    <h4>{!! $product['body'] !!}</h4>
                </div>
                <ul class="comment-list">
                    <h5 class="post-author_head">Written by <a href="#" title="Posts by admin" rel="author">admin</a></h5>
                    <li><img src="" class="img-responsive" alt="">
                        <div class="desc">
                            <p>View all posts by: <a href="#" title="Posts by admin" rel="author">admin</a></p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                </ul>
                <div class="comments-area">
                    <h3>Add New Comment</h3>
                    <form>
                        <p>
                            <label>Name</label>
                            <span>*</span>
                            <input type="text" value="">
                        </p>
                        <p>
                            <label>Email</label>
                            <span>*</span>
                            <input type="text" value="">
                        </p>
                        <p>
                            <label>Website</label>
                            <input type="text" value="">
                        </p>
                        <p>
                            <label>Subject</label>
                            <span>*</span>
                            <textarea></textarea>
                        </p>
                        <p>
                            <input type="submit" value="Submit Comment">
                        </p>
                    </form>
                </div>
            </div>
            <div class="col-md-4 blog_right">
                {{--<div class="category_widget">
                    <h3>Category</h3>
                    <ul class="list-unstyled arrow">
                        <li><a href="#">Rooms <span class="badge pull-right">21</span></a></li>
                        <li><a href="#">Media <span class="badge pull-right">11</span></a></li>
                        <li><a href="#">Marketing <span class="badge pull-right">31</span></a></li>
                    </ul>
                </div>
                <div class="category_widget">
                    <h3>Archive</h3>
                    <ul class="list-unstyled arrow">
                        <li><a href="#">August 2014 <span class="badge pull-right">16</span></a></li>
                        <li><a href="#">September 2014 <span class="badge pull-right">9</span></a></li>
                        <li><a href="#">July 2014 <span class="badge pull-right">22</span></a></li>
                    </ul>
                </div>
                <ul class="recent-list">
                    <h3>Recent Posts</h3>
                    <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
                    <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
                    <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
                    <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
                </ul>--}}
            </div>
        </div>
    </div>
@endsection