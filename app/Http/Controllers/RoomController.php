<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Rooms;
use Illuminate\Http\Request;
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
            'photopath' => 'required|image', // Validate as image
            'priority' => 'required|numeric'
        ]);

        if ($request->hasFile('photopath')) {
            $file = $request->file('photopath');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('/images/rooms/'), $filename);
            $data['photopath'] = $filename;
        }

        Rooms::create($data);
        return redirect(route('rooms.index'))->with('success', 'New Room Created Successfully');
    }

    public function edit($id)
    {
        $rooms = Rooms::find($id);
        $forms = Booking::all();
        return view('rooms.edit', compact('rooms', 'forms'));
    }

    public function update(Request $request, $id)
    {
        $rooms = Rooms::find($id);

        $data = $request->validate([
            'room_type' => 'required',
            'rate' => 'required',
            'photopath' => 'nullable|image', // Validate as image
            'priority' => 'required|numeric'
        ]);

        if ($request->hasFile('photopath')) {
            $file = $request->file('photopath');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('/images/rooms/'), $filename);

            // Delete the old image
            FacadesFile::delete(public_path('/images/rooms/' . $rooms->photopath));

            // Update the photopath field
            $data['photopath'] = $filename;
        } else {
            // Keep the old image if no new image is uploaded
            $data['photopath'] = $rooms->photopath;
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
