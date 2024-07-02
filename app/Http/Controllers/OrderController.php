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
        $orders = Order::paginate(10);
        $forms = Booking::all();
        return view('orders.index', compact('orders','forms'));
    }

   // In OrderController.php
public function create($id)
{
    $resturant = Resturant::findOrFail($id);
    return view('order-food', compact('resturant'));
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'food' => 'required|string|max:255',
        'customer_name' => 'required|string|max:255',
        'customer_email' => 'required|email|max:255',
        'customer_phone' => 'required|string|max:15',
        'quantity' => 'required|integer',
        'resturant_id' => 'required|exists:resturants,id',
    ]);

    // Fetch the resturant to get the rate
    $resturant = Resturant::findOrFail($validatedData['resturant_id']);

    $order = new Order();
    $order->food = $validatedData['food'];
    $order->customer_name = $validatedData['customer_name'];
    $order->customer_email = $validatedData['customer_email'];
    $order->customer_phone = $validatedData['customer_phone'];
    $order->quantity = $validatedData['quantity'];
    $order->resturant_id = $validatedData['resturant_id'];
    $order->rate = $resturant->rate; // Assign the rate from the resturant
    $order->status = 'Pending'; // Set the default status

    $order->save();

    return redirect()->route('orders.index')->with('success', 'Order placed successfully!');
}
public function show($id)
{
    $order = Order::findOrFail($id);
    return view('orders.show', compact('order'));
}

// Show the form for editing the specified resource.
public function edit($id)
{
    $order = Order::findOrFail($id);
    $forms = Booking::all();

    return view('orders.edit', compact('order','forms'));
}

// Update the specified resource in storage.
// public function update(Request $request, $id)
// {
//     $validatedData = $request->validate([
//         'food' => 'required|string|max:255',
//         'customer_name' => 'required|string|max:255',
//         'customer_email' => 'required|email|max:255',
//         'customer_phone' => 'required|string|max:15',
//         'customer_address' => 'required|string|max:255',
//         'quantity' => 'required|integer|',
//         'resturant_id' => 'required|exists:resturants,id',
//     ]);

//     $order = Order::findOrFail($id);
//     $order->update($validatedData);
//     return redirect()->route('orders.index')->with('success', 'Order updated successfully!');
// }

// Remove the specified resource from storage.
public function destroy($id)
{
    $order = Order::findOrFail($id);
    $order->delete();
    return redirect()->route('orders.index')->with('success', 'Order deleted successfully!');
}
// app/Http/Controllers/OrderController.php



public function update(Request $request, $id)
{ 
    $order = Order::find($id);
    $order->status = $request->status;
    $order->save();

    return redirect()->route('orders.index')->with('success', 'Order updated successfully');
}

public function generateInvoice(Order $order)
    {
        if ($order->status !== 'Completed') {
            return redirect()->route('orders.edit', $order->id)->with('error', 'Invoice can only be generated for completed orders.');
        }
        $order->load('resturant');

        $resturant = Resturant::find($order->resturant_id);
        return view('orders.invoice', compact('order','resturant'));
    }
}

