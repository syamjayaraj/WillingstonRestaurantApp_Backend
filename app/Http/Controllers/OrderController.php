<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;

class OrderController extends Controller
{
   public function store(Request $request)
    {	


        $order = Order::create($request->all());
        $orders_id = $order->id;

       foreach(json_decode(json_encode($request->order_data), true) as $order_item){
        	$ord_item = OrderItem::create( array_merge($order_item, ['orders_id' => $orders_id]));

        }


 			
        return response()->json([
        	'code' => 200,
        	'message' => "Created the order successfully",
        	'order' => $order,
        	'original' => $request->order_data
        	
        ]);
    }
 

    
}
