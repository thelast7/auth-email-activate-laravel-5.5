<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public $table = "Shipping";

    protected $fillable = ['order_id', 'namee', 'no_hpp', 'kotaa', 'alamatt', 'totall', 'statuss'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
