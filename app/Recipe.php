<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'user_id', 'status', 'name', 'slug', 'description', 'cover'
    ];

    public function getImage()
    {
        return asset('/foto-recipe/' . $this->cover);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
