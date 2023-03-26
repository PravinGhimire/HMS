<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Rooms;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    Public function index(){
        return view('rooms.index');
    }
    public function create(){
        return view('rooms.create');
    }
    public function store(Request $request){
       $data =$request->validate([
         'room_type'=> 'required',
         'rate'=>'required',
         'priority'=> 'required|numeric'

        ]);
        Rooms::create($data);
        
        return redirect(route('rooms.index'));
 }
}
