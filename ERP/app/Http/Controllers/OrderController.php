<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\OrderRequest;


class OrderController extends Controller
{
    public function index()
    {
        $order = Order::all();
        return view('order.index')->with('orders', $order);
    }

    public function cancelled()
    {
        $order = DB::table('product_order')
                    ->where('status', 'cancelled')
                    ->get();
        return view('order.cancelled')->with('orders', $order);
    }

    public function complete()
    {
        $order = DB::table('product_order')
                    ->where('status', "complete")
                     ->get();
        return view('order.complete')->with('orders', $order);
    }

    public function running()
    {
        $order = DB::table('product_order')
                    ->where('status', "running")
                     ->get();
        return view('order.running')->with('orders', $order);
    }

    public function editOrder($order_id){
        $order = Order::find($order_id);
        return view('order.edit')->with('order', $order);
    }

    public function storeOrder($order_id,OrderRequest $req){
        $order = Order::find($order_id);

        $order->product_name = $req->product_name;
        $order->quantity = $req->quantity;
        $order->unit_price = $req->unit_price;
        $order->total_price = $req->total_price;
        $order->status = $req->status;
        $order->product_id = $req->product_id;
        $order->vendor_name = $req->vendor_name;
        $order->vendor_address = $req->vendor_address;
        $order->vendor_phone = $req->vendor_phone;
        $order->date_sold = $req->date_sold;
        $order->payment_type = $req->payment_type;
        $order->payment_amount = $req->payment_amount;
        $order->due_amount = $req->due_amount;
        
        $order->save();

        return redirect()->route('SupplyChainManager.dashboard'); 
    }
}
