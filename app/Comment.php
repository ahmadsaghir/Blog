<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];
    public function posts()
    {
        $this->belongsTo(Posts::class);
    }
}
