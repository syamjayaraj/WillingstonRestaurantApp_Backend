<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

use App\ProductCategory;

use App\Tariffareas_prod;

use App\Tariffarea;

use App\Http\Resources\ProductCategory as ProductCategoryResource;

use App\Http\Resources\Tariffareas_prod as Tariffareas_prodResource;

use App\Http\Resources\Tariffarea as TariffareaResource;

class Product extends Resource
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
            'products_id' => $this->ID,
            'products_code' => $this->CODE,
            'name' => $this->NAME,
            'tariff' => Tariffareas_prodResource::collection(Tariffareas_prod::where('PRODUCTID' , $this->ID)->get()),
            'category' => ProductCategoryResource::collection(ProductCategory::where('ID' , $this->CATEGORY)->get()),
            'price' => $this->PRICESELL,
            'quantity' => 1
        ];

    }
}
