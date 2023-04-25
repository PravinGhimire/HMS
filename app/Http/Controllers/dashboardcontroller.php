<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
 public function index(){
  
   $totalrooms = Rooms::count();
   return view('dashboard',compact('totalrooms'));
   
 }
}
