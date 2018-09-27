<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = "Order";

    protected $fillable = ['shipping_id', 'nama_rek', 'tgl_pay', 'bank', 'bukti', 'status_bayar'];

    public function shipping()
    {
        return $this->belongsTo(Shipping::class);
    }
}
