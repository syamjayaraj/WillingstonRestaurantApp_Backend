<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Http\Resources\Product as ProductResource;

class ProductController extends Controller
{
	public function show(){
		$product=Product::get();
		return ProductResource::collection($product);
		
	}
}
