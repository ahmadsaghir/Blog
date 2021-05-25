<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Posts extends Model
{
    protected $guarded = [];

    public function path()
    {
        return route('blogs.show', $this);
    }
    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }
    public function like()
    {
        $this->likes()->create(['liked' => true]);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}

