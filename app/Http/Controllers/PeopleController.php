<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\People;

use App\Http\Resources\People as PeopleResource;

class PeopleController extends Controller
{
	public function show(){
		$people=People::get();
		return PeopleResource::collection($people);
		
	}
}
