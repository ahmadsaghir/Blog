<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'Controller@home');
Route::get('/about', 'Controller@about');
Route::get('/contact', 'Controller@contact');

Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts', 'PostsController@index')->name('blogs.index');
Route::get('/posts/{post}', 'PostsController@show')->name('blogs.show');
Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::put('/posts/{post}', 'PostsController@update');
Route::get('/posts/{post}/delete', 'PostsController@destroy')->name('blogs.delete');

Route::get('/categories/create', 'CategoryController@create');
Route::post('/categories', 'CategoryController@store');
Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show');
Route::get('/categories/{category}/edit', 'CategoryController@edit');
Route::put('/categories/{category}', 'CategoryController@update');
Route::get('/categories/{category}/delete', 'CategoryController@destroy')->name('categories.delete');


Route::get('/tags/create', 'TagController@create');
Route::post('/tags', 'TagController@store');
Route::get('/tags', 'TagController@index')->name('tags.index');
Route::get('/tags/{tag}', 'TagController@show')->name('tags.show');
Route::get('/tags/{tag}/edit', 'TagController@edit');
Route::put('/tags/{tag}', 'TagController@update');
Route::get('/tags/{tag}/delete', 'TagController@destroy')->name('tags.delete');

Route::get('/result',function (){
   $title = \App\Posts::where('title','like','%'.request('search').'%')->get();
   $body = \App\Posts::where('body','like','%'.request('search').'%')->get();
   return view('result')
       ->with('posts',$title)
       ->with('posts',$body)
       ->with('categories',\App\Category::all())
       ->with('tags',\App\Tag::all())
       ->with('title','Result : '.request('search'));
});

Route::post('/posts/{post}', 'CommentController@store');
Route::post('/posts/{post}', 'LikeController@store');
