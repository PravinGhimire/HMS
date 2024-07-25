<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use App\Models\Booking;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    
    public function index()
    {
        $amenities = Amenity::paginate(10);
        $forms=Booking::all();

        return view('amenities.index', compact('amenities','forms'));
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'icon' => 'required|string|max:255',
        'color' => 'required|string|max:7',
    ]);

    Amenity::create([
        'name' => $request->name,
        'description' => $request->description,
        'icon' => $request->icon,
        'color' => $request->color,
    ]);

    return redirect()->route('amenities.index')->with('success', 'Amenity created successfully.');
}
    public function edit($id)
    {
        $amenity = Amenity::findOrFail($id);
        $amenities = Amenity::paginate(10);
        $forms=Booking::all();

        return view('amenities.index', compact('amenity', 'amenities','forms'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'required|string|max:255',
        ]);

        $amenity = Amenity::findOrFail($id);
        $amenity->update($request->all());

        return redirect()->route('amenities.index')->with('success', 'Amenity updated successfully.');
    }

    public function destroy(Request $request)
    {
        $amenity = Amenity::findOrFail($request->dataid);
        $amenity->delete();

        return redirect()->route('amenities.index')->with('success', 'Amenity deleted successfully.');
    }
}
