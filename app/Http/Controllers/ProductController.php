<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\ProductCategory;

use App\Tariffareas_prod;

use App\Tariffarea;

use App\Http\Resources\Product as ProductResource;

use App\Http\Resources\ProductCategory as ProductCategoryResource;

use App\Http\Resources\Tariffareas_Prod as Tariffareas_prodResource;

use App\Http\Resources\Tariffarea as TariffareaResource;

class ProductController extends Controller
{

	public function tariff(){

		$tariffarea = Tariffarea::get();

		return TariffareaResource::collection($tariffarea);
	}

	public function show(){
		$product=Product::get();
		$product_category = ProductCategory::get();
		$product_tariff = Tariffareas_prod::get();
		$tariffarea = Tariffarea::get();

		return ProductResource::collection($product);
		return ProductCategoryResource::collection($product_category);
		return Tariffareas_prodResource::collection($product_tariff);
		return TariffareaResource::collection($tariffarea);		
	}
}
