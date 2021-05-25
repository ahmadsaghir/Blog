<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Like;
use App\Posts;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PostsController extends Controller
{
    public function index()
    {
        $posts  = Posts::orderBy('updated_at','desc')->paginate(3);
        $categories  = Category::all();
        return view('blogs.index',['posts'=>$posts],['categories'=>$categories])
            ->with('tags',Tag::all())
            ->with('comments',Comment::all());
    }

    public function show(Posts $post)
    {
        $next = Posts::where('id', '>',$post->id)->min('id');
        $prev = Posts::where('id', '<',$post->id)->max('id');
        return view('blogs.show', ['post'=>$post])
            ->with('likes',Like::all())
            ->with('posts',Posts::all())
            ->with('comments',Comment::all())
            ->with('next',Posts::find($next))
            ->with('prev',Posts::find($prev))
            ->with('categories',Category::all())
            ->with('tags',Tag::all());
    }

    public function create()
    {
        return view('blogs.create')->with('categories',Category::all())
            ->with('tags',Tag::all());
    }
    public function store(Request $request)
    {
        $this->validatePosts();
        $file = $request->file('image');
        $time = Carbon::now();
        $derectory = date_format($time,'Y').'/'.date_format($time,'M');
        $fileName = date_format($time,'h').rand(1,9).'.'.$file->extension();
        Storage::disk('public')->putFileAs($derectory,$file,$fileName);
        $image = $derectory.'/'.$fileName;
        Posts::create([
            'title' => request('title'),
            'body' => request('body'),
            'image' => $image,
            'category_id' => request('category_id'),
        ]);
        return redirect('/posts')
            ->with('categories',Category::all())
            ->with('tags',Tag::all());
    }

    public function edit(Posts $post)
    {
        return view('blogs.edit',compact('post'))
            ->with('categories',Category::all())
            ->with('tags',Tag::all());
    }

    public function update(Posts $post,Request $request)
    {
        $this->validatePosts();
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $time = Carbon::now();
            $derectory = date_format($time,'Y').'/'.date_format($time,'M');
            $fileName = date_format($time,'h').rand(1,9).'.'.$file->extension();
            Storage::disk('public')->putFileAs($derectory,$file,$fileName);
            $image = $derectory.'/'.$fileName;
        }
        $post->title = request('title');
        $post->body = request('body');
        $post->image =   $image;
        $post->category_id = request('category_id');
        $post->save();
        return redirect($post->path())->with('categories',Category::all());
    }
    public function destroy(Posts $post)
    {
        $post->delete();
        return redirect()->back();
    }
    protected function validatePosts()
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
            'category_id' => 'required'
        ]);
    }
}
