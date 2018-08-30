<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'slug', 'name'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }    
}
