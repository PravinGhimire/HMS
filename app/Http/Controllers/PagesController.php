<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $rooms=Rooms::all();
        return view ('welcome',compact('rooms'));
    }
    public function about(){
        return view('about');
    }
    public function room(){
        $rooms=Rooms::all();
        return view('room', compact('rooms'));
    }
    public function gallery(){
        return view('gallery');
    }

}
