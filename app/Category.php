<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function boot()
    {
        parent::boot();

        static::addGlobalScope('categoriesCount', function ($builder) {
            $builder->withCount('posts');
        });
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
