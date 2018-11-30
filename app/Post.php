<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    




    /**
     * Return the post's author
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Return the post's comments
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

        /**
     * Return the post's comments
     */
    public function replies(): HasMany
    {
        return $this->hasMany(Reply::class);
    }
}
