<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Roomdetails;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class RoomDetailsController extends Controller
{
    public function index()
    {
        $roomdetails = Roomdetails::all();
        $forms=Booking::all();
        $roomdetailed=Roomdetails::paginate(6);
        return view('roomdetails.index', compact('roomdetails','forms','roomdetailed'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms = Rooms::all();
        $forms=Booking::all();
        
        return view('roomdetails.create', compact('rooms','forms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'priority' => 'required',
            'description' => 'required',
            'photopath' => 'required|mimes:jpg,png',
            'room_size' => 'required',
            'bed_size' => 'required',
            'view' => 'required',
            'room_id' => 'required',
        ]);


        if ($request->file('photopath')) {
            $file = $request->file('photopath');
            $filename = $file->getClientOriginalName();
            $photopath = time() . '_' . $filename;
            $file->move(public_path('images/roomdetails/'), $photopath);
            $data['photopath'] = $photopath;
        }
        Roomdetails::create($data);
        return redirect(route('roomdetails.index'))->with('success', 'Details added Successfully');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $rooms = Rooms::all();
        $roomdetails = Roomdetails::find($id);
        $forms=Booking::all();
        return view('roomdetails.edit', compact('roomdetails', 'rooms','forms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Roomdetails $roomdetails)
    {
        $data = $request->validate([
            'priority' => 'required',
            'description' => 'required',
            'photopath' => 'nullable',
            'room_size' => 'required',
            'bed_size' => 'required',
            'view' => 'required',
        ]);
        $data['photopath'] = $roomdetails->photopath;
        if ($request->file('photopath')) {
            $file = $request->file('photopath');
            $filename = $file->getClientOriginalName();
            $photopath = time() . '_' . $filename;
            $file->move(public_path('/images/roomdetails/'), $photopath);
            FacadesFile::delete(public_path('/images/roomdetails/' . $roomdetails->photopath));
            $data['photopath'] = $photopath;
        }
        $roomdetails->update($data);
        return redirect(route('roomdetails.index'))->with('success', 'Details Updated Successfully');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)

    {
        $roomdetails = Roomdetails::find($request->dataid);
        FacadesFile::delete(public_path('/images/roomdetails/' . $roomdetails->photopath));
        $roomdetails->delete();
        return redirect(route('roomdetails.index'))->with('success', 'Details Deleted Successfully');
    }
}
