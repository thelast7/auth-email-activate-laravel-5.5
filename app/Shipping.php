<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public $table = "Shipping";

    protected $fillable = ['user_id', 'product_id', 'namee', 'no_hpp', 'kotaa', 'alamatt', 'totall', 'statuss'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
