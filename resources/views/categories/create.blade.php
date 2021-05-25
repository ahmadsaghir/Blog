@extends('layout')

@section('content')
        <div class="slider-area2">
            <div class="slider-height2 hero-overly2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Create Categories</h2>
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
                        <h2 class="contact-title">Create New Category</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" method="POST" action="{{route('categories.index')}}" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control @error('name') danger @enderror"
                                               name="name"
                                               id="name"
                                               type="text"
                                               value="{{old('name')}}"
                                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Category'" placeholder="Enter Category">
                                        @error('name')
                                        <p class="help">{{$errors->first('name')}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Create Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection
