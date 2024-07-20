<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use App\Models\Rooms;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File as FacadesFile;

class RoomController extends Controller
{
  public function index()
  {
    $rooms = Rooms::all();
    $forms = Booking::all();
    

    $paginate = Rooms::paginate(6);

    return view('rooms.index', compact('rooms', 'forms', 'paginate'));
  }
  public function create()
  {
    $forms = Booking::all();
    return view('rooms.create', compact('forms'));
  }
  public function store(Request $request)
  {
    $data = $request->validate([
      'room_type' => 'required',
      'rate' => 'required',
      'photopath' => 'required',
      'priority' => 'required|numeric'

    ]);
    if ($request->file('photopath')) {
      $file = $request->file('photopath');
      $filename = $file->getClientOriginalName();
      $photopath = time() . '_' . $filename;
      $file->move(public_path('/images/rooms/'), $photopath);
      $data['photopath'] = $photopath;
    }
    Rooms::create($data);
    return redirect(route('rooms.index'))->with('success', ' New Room Created Successfully');
  }
  public function edit($id)
  {
    $rooms = Rooms::find($id);
    $forms = Booking::all();
    return view('rooms.edit', compact('rooms', 'forms'));
  }
  public function update(Request $request, Rooms $rooms)
  {
      $data = $request->validate([
          'room_type' => 'required',
          'rate' => 'required',
          'photopath' => 'nullable|image', // Validate as image
          'priority' => 'required|numeric'
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
      return redirect(route('rooms.index'))->with('success', 'Details Updated Successfully');
  }
    public function delete(Request $request)
  {
    $rooms = Rooms::find($request->dataid);
    FacadesFile::delete(public_path('/images/rooms/' . $rooms->photopath));
    $rooms->delete();
    return redirect(route('rooms.index'))->with('success', 'Room Deleted Successfully');
  }
  public function checkAvailability(Request $request)
  {
      $request->validate([
          'checkin' => 'required|date|after_or_equal:today',
          'checkout' => 'required|date|after:checkin',
      ]);

      $checkin = $request->input('checkin');
      $checkout = $request->input('checkout');

      $availableRooms = Rooms::whereDoesntHave('bookings', function ($query) use ($checkin, $checkout) {
          $query->where(function ($query) use ($checkin, $checkout) {
              $query->where('check_in', '<', $checkout)->where('check_out', '>', $checkin);
          });
      })->get();

      return view('availability', compact('availableRooms', 'checkin', 'checkout'));
  }
 
}
