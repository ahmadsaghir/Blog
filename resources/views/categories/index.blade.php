@extends('layout')

@section('content')
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 hero-overly2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Categories</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--================Blog Area =================-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            @foreach( $categories ?? '' as $category )
                            <article class="blog_item">
                                <div class="blog_details">
                                    <a class="d-inline-block" href="categories/{{$category->id}}">
                                        <h2>{{$category -> name}}</h2>
                                    </a>
                                    <p></p>
                                    <ul class="blog-info-link">
                                        <li><a href="/categories/{{$category ->id}}/edit"><i class="fas fa-edit"></i>Edit</a></li>
                                        <li><a href="{{route('categories.delete',$category->id)}}"><i class="fas fa-trash-alt"></i>Delete</a></li>
                                    </ul>
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <form action="{{url('/categories/create')}}">
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                            type="submit">Create New Category</button>
                                </form>
                            </aside>
                            @include('includes.aside')
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
