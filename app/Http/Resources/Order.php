<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\OrderItem;
use App\Http\Resources\OrderItem as OrderItemResource;

class Order extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'floor' => $this->floor,
            'table' => $this->table,
            'tariff' =>$this->tariff,
            'price_before_gst' => $this->price_before_gst,
            'final_price' => $this->final_price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,  
            'order_data' => OrderItemResource::collection(OrderItem::where('orders_id' , $this->id)->get()),
        ];

    }
}
