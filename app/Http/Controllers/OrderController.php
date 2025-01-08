<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function buy($id, $price) {
        Order::create([
            'item_id' => $id,
            'account_id' => Auth::user()->id,
            'price' => $price,
        ]);

        return redirect('cart');
    }

    public function cart() {
        $order = Auth::user()->order;

        return view('cart')->with(['order' => $order]);
    }  

    public function checkout() {
        $orders = Auth::user()->order;
        foreach($orders as $o) {
            $o->delete();
        }

        return view('success');
    }

    public function delete($id) {
        $order = Order::find($id);
        $order->delete();

        return back()->with("status", "Product Remove from Carts!");
    }
}
