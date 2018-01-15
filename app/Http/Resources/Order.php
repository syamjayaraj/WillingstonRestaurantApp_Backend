<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

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
            'tarrif' =>$this->tarrif,
            'price_before_gst' => $this->price_before_gst,
            'final_price' => $this->final_price,
        ];

    }
}
