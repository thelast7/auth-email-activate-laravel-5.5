<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'user_id', 'status', 'category_id', 'name', 'slug', 'description', 'cover', 'quantity', 'price', 'activate', 'review'
    ];

    public function getImage()
    {
        return asset('/cover-product/' . $this->cover);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
