<?php

namespace App\Http\Controllers;

use App\Models\AdminNotification;
use App\Models\Booking;
use App\Models\Gallery;
use App\Models\Order;
use App\Models\Rooms;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
  public function index()
  {
    $totalusers = User::count();
    $totalrooms = Rooms::count();
    $totalgallery=Gallery::count();
    $totalbooking = Booking::count();
    $totalorders =Order::count();
    $forms = Booking::with('room')->orderBy('created_at', 'desc') // Order by creation date in descending order
    ->take(5) // Get the latest 4 records
    ->get();
   

    return view('dashboard', compact('totalrooms', 'totalusers', 'totalbooking','totalgallery','totalorders','forms'));
  }
}
