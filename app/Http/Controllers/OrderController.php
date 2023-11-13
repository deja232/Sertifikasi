<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    
    public function index(){
        $orders = Order::all();
        return view ('order', ['orders' => $orders]);
    }

    public function create(){

    }

    public function store(Request $request){


        Order::create([
            'customer_id' => $request->customer_id,
            'vehicle_id' => $request->vehicle_id,
        ]);
        return redirect()->route('order.index');
    }
    public function destroy($customer_id){
        $orders=Order::findOrFail($customer_id);
        $orders->delete();

        return redirect()-> route('order.index');
    }


}
