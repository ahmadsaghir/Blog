@extends('layout')

@section('content')
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 hero-overly2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Blog Details</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--================Blog Area =================-->
        <section class="blog_area single-post-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{url('uploads/'.$post->image)}}" alt="{{$post->title}}" width="750">
                            </div>
                            <div class="blog_details">
                                <h2>{{$post -> title}}</h2>
                                <ul class="blog-info-link mt-3 mb-4">
                                    <li>
                                        @foreach($categories ?? '' as $category)
                                            @if($post->category_id==$category->id)
                                                <a href="/categories/{{$category->id}}"><i class="fa fa-user"></i>{{$category-> name}}</a>
                                            @endif
                                        @endforeach</li>
                                    <li>
                                        @foreach($post->tags ?? '' as $tag)
                                            <a href="/tags/{{$tag->id}}"><i class="fa fa-tag" aria-hidden="true"></i>{{$tag-> name}}</a>
                                        @endforeach
                                    </li>
                                    <li><a href="/posts/{{$post->id}}"><i class="fa fa-comments"></i> {{$post->comments->count()}} Comments</a></li>
                                    <li><a href="/posts/{{$post->id}}/edit"><i class="fas fa-edit"></i>Edit</a></li>
                                    <li><a href="/posts"><i class="fa fa-angle-left"></i>Back</a></li>
                                </ul>
                                <p class="excert">{{$post -> body}}</p>
                            </div>
                        </div>
                        <div class="navigation-top">
                            <div class="d-sm-flex justify-content-between text-center">
                                    <form method="POST" action="/posts/{{$post->id}}">
                                        @csrf
                                        <p class="like-info">
                                            <button type="submit" class="likebtn" name="form1">
                                                <a>
                                                    <span type="submit" class="align-middle">
                                                        <i class="fa fa-heart"></i>
                                                    </span>
                                                </a>
                                            </button>{{ $post->likes->count()}} people like this
                                        </p>
                                    </form>
                                <div class="col-sm-4 text-center my-2 my-sm-0">
                                    <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                                </div>
                                <ul class="social-icons">
                                    <li><a href="https://www.facebook.com/optimalconsultanttr/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/optimalconsultanttr/"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://twitter.com/optimaltr99"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://api.whatsapp.com/send?phone=905355789379"><i class="fab fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                            <div class="navigation-area">
                                <div class="row">
                                    <div
                                        class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                        @if($prev)
                                        <div class="thumb">
                                            <a href="/posts/{{$prev->id}}">
                                                <img class="img-fluid" href="/posts/{{$prev->id}}" src="{{url('uploads/'.$prev->image)}}" alt="{{$prev->title}}" width="60px" height="60px">
                                            </a>
                                        </div>
                                        <div class="arrow">
                                            <a href="/posts/{{$prev->id}}">
                                                <span class="lnr text-white ti-arrow-left"></span>
                                            </a>
                                        </div>
                                        <div class="detials">
                                            <p>Prev Post</p>
                                            <a href="/posts/{{$prev->id}}">
                                                <h4>{{$prev->title}}</h4>
                                            </a>
                                        </div>
                                        @else
                                        <div class="thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{asset('assets/img/post/preview.png')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="arrow">
                                            <a href="#">
                                                <span class="lnr text-white ti-arrow-left"></span>
                                            </a>
                                        </div>
                                        <div class="detials">
                                            <p>Prev Post</p>
                                            <a href="#">
                                                <h4>Non</h4>
                                            </a>
                                        </div>
                                        @endif
                                    </div>
                                    <div
                                        class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                        @if($next)
                                        <div class="detials">
                                            <p>Next Post</p>
                                            <a href="/posts/{{$next->id}}">
                                                <h4>{{$next -> title}}</h4>
                                            </a>
                                        </div>
                                        <div class="arrow">
                                            <a href="/posts/{{$next->id}}">
                                                <span class="lnr text-white ti-arrow-right"></span>
                                            </a>
                                        </div>
                                        <div class="thumb">
                                            <a href="/posts/{{$next->id}}">
                                                <img class="img-fluid" href="/posts/{{$next->id}}" src="{{url('uploads/'.$next->image)}}" alt="{{$next->title}}" width="60px" height="60px">
                                            </a>
                                        </div>
                                        @else
                                        <div class="detials">
                                            <p>Next Post</p>
                                            <a href="#">
                                                <h4>Non</h4>
                                            </a>
                                        </div>
                                        <div class="arrow">
                                            <a href="#">
                                                <span class="lnr text-white ti-arrow-right"></span>
                                            </a>
                                        </div>
                                        <div class="thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{asset('assets/img/post/preview.png')}}" alt="" width="60px" height="60px">
                                            </a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="blog-author">--}}
{{--                            <div class="media align-items-center">--}}
{{--                                <img src="{{asset('assets/img/blog/author.png')}}" alt="">--}}
{{--                                <div class="media-body">--}}
{{--                                    <a href="#">--}}
{{--                                        <h4>Harvard milan</h4>--}}
{{--                                    </a>--}}
{{--                                    <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he--}}
{{--                                        our dominion twon Second divided from</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="comments-area">
                            @if($post->comments)
                                <h4>{{$post->comments->count()}} Comments</h4>
                            @endif
                            @foreach($post->comments as $comment)
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="{{asset('assets/img/comment/comment_1.png')}}" alt="">
                                        </div>
                                        <div class="desc">
                                            <p class="comment">{{$comment->body}}</p>

                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <h5>
                                                        <a href="#">Emilly Blunt</a>
                                                    </h5>
                                                    <p class="date">{{$comment->updated_at->format('M d,Y')}} at {{$comment->updated_at->format('H:i a')}}</p>
                                                </div>
{{--                                                <div class="reply-btn">--}}
{{--                                                    <a href="#" class="btn-reply text-uppercase">reply</a>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="comment-form">
                            <h4>Leave a Comment</h4>
                            <form class="form-contact comment_form" method="POST" action="/posts/{{$post->id}}" id="commentForm">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100" name="body" id="comment" cols="30" rows="9"
                                            placeholder="Write Comment"></textarea>
                                            @error('body')
                                            <p class="help">{{$errors->first('body')}}</p>
                                            @enderror
                                        </div>
                                    </div>
{{--                                    <div class="col-sm-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input class="form-control" name="name" id="name" type="text" placeholder="Name">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input class="form-control" name="email" id="email" type="email" placeholder="Email">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input class="form-control" name="website" id="website" type="text" placeholder="Website">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button button-contactForm btn_1 boxed-btn" name="form2">Leave a Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            @include('includes.aside')
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Blog Area end =================-->
@endsection
