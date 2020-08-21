<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('commentCount', function ($builder) {
            $builder->withCount('comments');
        });
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Chemin pour accéder à un post - Alternative non exploitée
     */
    public function path()
    {
        return "/posts/" . $this->slug;
    }
}
