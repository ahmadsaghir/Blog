<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Posts;
use App\Tag;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags  = Tag::all();
        return view('tags.index',['tags'=>$tags])
            ->with('posts',Posts::all())
            ->with('categories',Category::all());
    }
    public function show($tag)
    {
        //$posts = Tag::where('name',\request('tag'))->firstOrFail()->posts;
        $posts = Tag::find($tag)->posts;
        $tags  = Tag::all();
        return view('tags.show',['tags'=>$tags])
            ->with('categories',Category::all())
            ->with('posts',$posts)
            ->with('comments',Comment::all());
    }
    public function create()
    {
        return view('tags.create');
    }
    public function store()
    {
        Tag::create($this->validateTag());
        return redirect('/tags');
    }
    public function edit(Tag $tag)
    {
        return view('tags.edit',compact('tag'));
    }
    public function update(Tag $tag)
    {
        $tag->update($this->validateTag());
        return redirect($tag->path());
    }
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->back();
    }
    protected function validateTag()
    {
        return request()->validate([
            'name' => 'required'
        ]);
    }
}
