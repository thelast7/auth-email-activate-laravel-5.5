<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public $table = "Shipping";

    protected $casts = [
        'items' => 'array',
    ];

    protected $fillable = ['user_id', 'namee', 'no_hpp', 'kotaa', 'kecamatan', 'kode_pos', 'alamatt', 'statuss', 'items'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
