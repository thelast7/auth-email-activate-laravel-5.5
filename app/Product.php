<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'admin_id', 'category_id', 'name', 'slug', 'description', 'cover', 'quantity', 'activate' ];
}
