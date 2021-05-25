@extends('layout')

@section('content')
        <div class="slider-area2">
            <div class="slider-height2 hero-overly2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>create</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Create New Post</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" method="POST" action="{{route('blogs.index')}}" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control @error('title') danger @enderror"
                                               name="title"
                                               id="title"
                                               type="text"
                                               value="{{old('title')}}"
                                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Title'" placeholder="Enter Title">
                                        @error('title')
                                        <p class="help">{{$errors->first('title')}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100 @error('body') danger @enderror"
                                                  name="body"
                                                  id="body"
                                                  cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Body'" placeholder=" Enter Body"></textarea>
                                        @error('body')
                                        <p class="help">{{$errors->first('body')}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group custom-file">
                                        <input type="file" class="custom-file-input" name="image" id="image">
                                        <label class="custom-file-label" for="file">Choose image</label>
                                        @error('image')
                                        <p class="help">{{$errors->first('image')}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Category select</label>
                                        <select class="form-control" name="category_id" id="category">
                                            @foreach($categories ?? '' as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Category select</label>
                                        <select class="form-control" name="category_id" id="category">
                                            @foreach($tags ?? '' as $tag)
                                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Create Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection
