<aside class="single_sidebar_widget search_widget">
    <form method="GET" action="{{url('/result')}}">
        @csrf
        <div class="form-group">
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder='Search Keyword'
                       onfocus="this.placeholder = ''"
                       onblur="this.placeholder = 'Search Keyword'">
                <div class="input-group-append">
                    <button class="btns" type="button"><i class="ti-search"></i></button>
                </div>
            </div>
        </div>
        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                type="submit">Search</button>
    </form>
</aside>
<aside class="single_sidebar_widget post_category_widget">
    <h4 class="widget_title">Category</h4>
    <ul class="list cat-list">
        @foreach($categories ?? '' as $category)
            <li>
                <a href="/categories/{{$category->id}}" class="d-flex">
                    <p>{{$category->name}}</p>
                </a>
            </li>
        @endforeach
    </ul>
</aside>
<aside class="single_sidebar_widget popular_post_widget">
    <h3 class="widget_title">Recent Post</h3>
    @foreach( $posts ?? '' as $post )
        <div class="media post_item">
            <a href="/posts/{{$post->id}}">
            <img  src="{{url('uploads/'.$post->image)}}" alt="{{$post->title}}" width="80px" height="80px">
            </a>
                <div class="media-body">
                <a href="/posts/{{$post->id}}">
                    <h3>{{$post->title}}</h3>
                </a>
                <p>{{$post->updated_at->format('M')}}&nbsp;{{$post->updated_at->format('d')}}, {{$post->updated_at->format('Y')}}</p>
            </div>
        </div>
    @endforeach
</aside>
<aside class="single_sidebar_widget tag_cloud_widget">
    <h4 class="widget_title">Tag Clouds</h4>
    <ul class="list">
        @foreach( $tags ?? '' as $tag )
        <li>
            <a href="/tags/{{$tag->id}}">{{$tag->name}}</a>
        </li>
        @endforeach
    </ul>
</aside>
<!-- Hero-btn -->
<aside class="single_sidebar_widget newsletter_widget">
    <h4 class="widget_title">Newsletter</h4>
    <form action="#">
        <div class="form-group">
            <input type="email" class="form-control" onfocus="this.placeholder = ''"
                   onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
        </div>
        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                type="submit">Subscribe</button>
    </form>
</aside>
