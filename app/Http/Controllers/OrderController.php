<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    
    public function index(){
        $customers = DB::table('orders')->get();
    }

    public function create(){

    }

    public function store(Request $request){


        Order::create([
            'orderDate' => 'orderDate',
            'quantity' => 'quantity',
            'total' => 'total'
        ]);
    }


}
