<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public $table = "Shipping";

    protected $casts = [
        'items' => 'array',
        'cart' => 'array',
    ];

    protected $fillable = ['user_id', 'namee', 'no_hpp', 'kotaa', 'kecamatan', 'kode_pos', 'alamatt', 'items', 'statuss'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
