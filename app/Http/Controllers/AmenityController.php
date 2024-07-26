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
        'description' => 'nullable|string',
        'icon' => 'required|string|max:255',
        'color' => 'required|string|max:7', // Add validation for color
    ]);

    $amenity = new Amenity([
        'name' => $request->name,
        'description' => $request->description,
        'icon' => $request->icon,
        'color' => $request->color, // Save color
    ]);

    $amenity->save();

    return redirect()->route('amenities.index')->with('success', 'Amenity created successfully');
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'icon' => 'required|string|max:255',
        'color' => 'required|string|max:7', // Add validation for color
    ]);

    $amenity = Amenity::findOrFail($id);
    $amenity->name = $request->name;
    $amenity->description = $request->description;
    $amenity->icon = $request->icon;
    $amenity->color = $request->color; // Update color
    $amenity->save();

    return redirect()->route('amenities.index')->with('success', 'Amenity updated successfully');
}
    public function edit($id)
    {
        $amenity = Amenity::findOrFail($id);
        $amenities = Amenity::paginate(10);
        $forms=Booking::all();

        return view('amenities.index', compact('amenity', 'amenities','forms'));
    }

    
    public function destroy(Request $request)
    {
        $amenity = Amenity::findOrFail($request->dataid);
        $amenity->delete();

        return redirect()->route('amenities.index')->with('success', 'Amenity deleted successfully.');
    }
}
