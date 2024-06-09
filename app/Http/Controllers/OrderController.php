<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Order;
use App\Models\Resturant;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   
    public function create($resturantId)
    {
        $resturant = Resturant::find($resturantId);
        return view('order-food', compact('resturant'));
    }

    // Method to store the order
    public function store(Request $request, $resturantId)
    {
        $request->validate([
            'food' => 'required|string|max:255',
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:20',
            'customer_address' => 'required|string',
            'quantity' => 'required|integer',
        ]);

        Order::create([
            'resturant_id' => $resturantId,
            'food' => $request->food,
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'customer_phone' => $request->customer_phone,
            'customer_address' => $request->customer_address,
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('resturant')->with('success', 'Order placed successfully!');
    }

    // Method to list all orders
    public function index()
    {
        $orders = Order::all();
        $forms= Booking::all();
        return view('orders.index', compact('orders','forms'));
    }
}
