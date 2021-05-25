<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Posts;
use App\Tag;

class CategoryController extends Controller
{
    public function index()
    {
        $categories  = Category::all();
        return view('categories.index',['categories'=>$categories])
            ->with('tags',Tag::all())
            ->with('posts',Posts::all());
    }
    public function show(Category $category)
    {
        $posts = Posts::all()->where('category_id', '=', $category->id);

        return view('categories.show', ['category'=>$category])
            ->with('categories',Category::all())
            ->with('posts',$posts)
            ->with('tags',Tag::all())
            ->with('comments',Comment::all());
    }
    public function create()
    {
        return view('categories.create');
    }
    public function store()
    {
        Category::create($this->validateCategory());
        return redirect('/categories');
    }
    public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
    }
    public function update(Category $category)
    {
        $category->update($this->validateCategory());
        return redirect($category->path());
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }
    protected function validateCategory()
    {
        return request()->validate([
            'name' => 'required'
        ]);
    }
}
