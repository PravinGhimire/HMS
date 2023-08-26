<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use App\Models\Rooms;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class RoomController extends Controller
{
    Public function index(){
        $rooms=Rooms::all();
        $forms=Booking::all();

        return view('rooms.index', compact('rooms','forms'));
    }
    public function create(){
        return view('rooms.create');
    }
    public function store(Request $request){
       $data =$request->validate([
         'room_type'=> 'required',
         'rate'=>'required',
         'photopath' => 'required',
         'priority'=> 'required|numeric'

        ]);
        if($request->file('photopath'))
        {
            $file = $request->file('photopath');
            $filename = $file->getClientOriginalName();
            $photopath = time().'_'.$filename;
            $file->move(public_path('/images/rooms/'),$photopath);
            $data['photopath'] = $photopath;
        }
        Rooms::create($data);
        return redirect(route('rooms.index'))->with('success',' New Room Created Successfully');
 }
 public function edit($id){
    $rooms = Rooms::find($id);
    return view('rooms.edit',compact('rooms'));
  }
  public function update(Request $request,Rooms $rooms){
    $data =$request->validate([
      'room_type'=> 'required',
      'rate'=>'required',
      'photopath' => 'nullable',
      'priority'=> 'required|numeric'

     ]);
     $data['photopath']=$rooms->photopath;
        if($request->file('photopath'))
        {
            $file=$request->file('photopath');
            $filename=$file->getClientOriginalName();
            $photopath =time().'_'.$filename;
            $file->move(public_path('/images/rooms/'),$photopath);
            FacadesFile::delete(public_path('/images/rooms/'.$rooms->photopath));
            $data['photopath']=$photopath;

        }
     
  $rooms->update($data);
  return redirect(route('rooms.index'))->with('success','Details Updated Successfully');
}
public function delete(Request $request)
  {
    $rooms= Rooms::find($request->dataid);
    FacadesFile::delete(public_path('/images/rooms/'.$rooms->photopath));
    $rooms->delete();
    return redirect(route('rooms.index'))->with('success','Room Deleted Successfully');
  }

}
