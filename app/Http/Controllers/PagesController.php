<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Gallery;
use App\Models\Roomdetails;
use App\Models\Rooms;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $rooms = Rooms::all();
        $galleries = Gallery::all();
        $sliders = Slider::all();
     
        return view('welcome', compact('rooms', 'galleries', 'sliders'));
    }
    public function about()
    {
        return view('about');
    }
    public function room()
    {
        $rooms = Rooms::all();
        return view('room', compact('rooms'));
    }
    public function gallerys()
    {
        $galleries = Gallery::all();
        return view('gallerys', compact('galleries'));
    }
    public function rums($id)
    {
        $room = Rooms::find($id);
        $roomdetail = Roomdetails::where('room_id', $id)->first();
        $users=User::find($id);
        return view('rums', compact('room', 'roomdetail','users'));
    }
    public function bookingview()
    {
        $rooms = Rooms::all();
        $forms = Booking::all();
        
        return view('bookingview', compact('rooms', 'forms'));

    }
}
