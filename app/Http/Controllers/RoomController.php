<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Rooms;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    Public function index(){
        $roommss=Rooms::all();

        return view('rooms.index',compact('roommss'));
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
        return redirect(route('rooms.index'))->with('success',' New Room Created Successfully');
 }
 public function edit($id){
    $roomss = Rooms::find($id);
    return view('rooms.edit',compact('roomss'));
  }
  public function update(Request $request,$id){
    $data =$request->validate([
      'room_type'=> 'required',
      'rate'=>'required',
      'priority'=> 'required|numeric'

     ]);
     $roomss= Rooms::find($id);
  $roomss->update($data);
  return redirect(route('rooms.index'))->with('success','Details Updated Successfully');
}
public function delete(Request $request)
  {
    $roomss= Rooms::find($request->dataid);
    $roomss->delete();
    return redirect(route('rooms.index'))->with('success','Room Deleted Successfully');
  }

}
