<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    public function path()
    {
        return route('tags.show', $this);
    }
    public function posts()
    {
        return $this->belongsToMany(Posts::class);
    }
}
