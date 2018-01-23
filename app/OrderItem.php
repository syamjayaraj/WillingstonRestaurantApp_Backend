<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
   protected $table = 'ORDERITEMS';
   protected $fillable = ['products_id', 'name', 'orders_id', 'price', 'quantity'];
}
