<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Resturant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class ResturantController extends Controller
{
    public function index()
    {
        $forms = Booking::all();
       
        return view('resturant.index', compact( 'forms'));
    }

    public function details()
    {
        $resturants = Resturant::all();
        $forms = Booking::all();
        $paginate = Resturant::paginate(10);
        return view('resturant.details', compact('resturants','forms','paginate'));
    }
    public function create()
    {
        $forms = Booking::all();
        return view('resturant.create',compact('forms'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'priority' => 'required|integer',
            'food' => 'required|string',
            'quantity' => 'required|string',
            'rate' => 'required|numeric',
            'photopath' => 'required|mimes:jpg,png'
        ]);

        if ($request->file('photopath')) {
            $file = $request->file('photopath');
            $filename = $file->getClientOriginalName();
            $photopath = time() . '_' . $filename;
            $file->move(public_path('images/resturants/'), $photopath);
            $validatedData['photopath'] = $photopath;
        }

        Resturant::create($validatedData);

        return redirect()->route('resturant.details')->with('success', 'Restaurant item created successfully.');
    }

    public function edit($id)
    {
        $forms = Booking::all();

        $resturant = Resturant::findOrFail($id);
        return view('resturant.edit', compact('resturant','forms'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'priority' => 'required|integer',
            'food' => 'required|string',
            'quantity' => 'required|string',
            'rate' => 'required|numeric',
            'photopath' => 'nullable|mimes:jpg,png',
        ]);

        $resturant = Resturant::findOrFail($id);

        if ($request->file('photopath')) {
            $file = $request->file('photopath');
            $filename = $file->getClientOriginalName();
            $photopath = time() . '_' . $filename;
            $file->move(public_path('images/resturants/'), $photopath);
            $validatedData['photopath'] = $photopath;
        } else {
            unset($validatedData['photopath']);
        }

        $resturant->update($validatedData);

        return redirect()->route('resturant.details')->with('success', 'Restaurant item updated successfully.');
    }

    // public function destroy(Request $request, $id)
    // {
    //     $resturant = Resturant::findOrFail($id);
    //     $resturant->delete();
    //     return redirect()->route('resturant.index')->with('success', 'Restaurant item deleted successfully.');
    // }
    public function delete(Request $request)
  {
    $resturant = Resturant::find($request->dataid);
    FacadesFile::delete(public_path('/images/resturants/' . $resturant->photopath));
    $resturant->delete();
    return redirect(route('resturant.details'))->with('success', 'Items Deleted Successfully');
  }
}