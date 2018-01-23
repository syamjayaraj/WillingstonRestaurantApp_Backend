<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class People extends Resource
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
            'people_id' => $this->ID,
            'code' => $this->PIN,
            'name' => $this->NAME,
        ];
    }
}
