<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;

use App\Http\Resources\Order as OrderResource;
use App\Http\Resources\OrderItem as OrderItemResource;


require '../vendor/autoload.php';
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;


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
        	'original' => $request->order_data,
        	
        ]);


    }

   public function show()
    {   
        $order=Order::orderBy('id', 'DESC')->get();
        $orderItems=OrderItem::get();
        return OrderResource::collection($order);
        return OrderItemResource::collection($orderItems);
    }


   public function printtokitchen()
    {

        $connector = new FilePrintConnector("cups-brf:/");
        $printer = new Printer($connector);
        $printer -> text("Hello World!\n");
        $printer -> cut();
        $printer -> close();


        return response()->json([
        'code' => 200,
        'message' => "Printed successfully",        
        ]);
       
    }   


}
