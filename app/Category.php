<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $validateCategory)
 */
class Category extends Model
{
    protected $guarded = [];

    public function path()
    {
        return route('categories.show', $this);
    }
    public function posts()
    {
        return $this->hasMany(Posts::class);
    }
}
