<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Gallery;
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
    return view('dashboard', compact('totalrooms', 'totalusers', 'totalbooking','totalgallery'));
  }
}
