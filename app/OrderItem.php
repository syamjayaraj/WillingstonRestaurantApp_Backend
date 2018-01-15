<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
   protected $fillable = ['products_id', 'orders_id', 'price', 'quantity'];
}
