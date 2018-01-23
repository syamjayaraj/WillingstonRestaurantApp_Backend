<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'ORDERS';
    protected $fillable = ['table', 'floor', 'tariff', 'price_before_gst', 'final_price'];
}
