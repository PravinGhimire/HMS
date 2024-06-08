<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Order;
use App\Models\Resturant;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   
        public function index()
        {
            $forms = Booking::all();

            $orders = Order::all();
            return view('orders.index', compact('orders','forms'));
        }
    

    public function create(Resturant $resturant)
    {
        $forms = Booking::all();

        return view('orders.create', compact('resturant','forms'));
    }

    public function store(Request $request, Resturant $resturant)
    {
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|string|email|max:255',
            'customer_phone' => 'required|string|max:15',
            'customer_address' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
        ]);

        $order = new Order($validatedData);
        $order->resturant_id = $resturant->id;
        $order->save();

        return redirect()->route('resturant.index')->with('success', 'Order placed successfully.');
    }
}