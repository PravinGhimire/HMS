<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forms=Booking::all();
        $sliders = Slider::all();
        return view('slider.index',compact('sliders','forms'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'priority' => 'required',
            //'priority' => 'required|numeric:min=0',
            'photopath' => 'required|mimes:jpg,png'
        ]);
        if($request->file('photopath'))
        {
            $file=$request->file('photopath');
            $filename=$file->getClientOriginalName();
            $photopath =time().'_'.$filename;
            $file->move(public_path('images/slider/'),$photopath);
            $data['photopath']=$photopath;

        }
        Slider::create($data);
        return redirect(route('slider.index'))->with('success','Picture added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $data = $request->validate([
            'priority' => 'required',
            'photopath' => 'nullable',
        ]);
        $data['photopath']=$slider->photopath;
        if($request->file('photopath'))
        {
            $file=$request->file('photopath');
            $filename=$file->getClientOriginalName();
            $photopath =time().'_'.$filename;
            $file->move(public_path('/images/slider/'),$photopath);
            FacadesFile::delete(public_path('/images/slider/'.$slider->photopath));
            $data['photopath']=$photopath;

        }
        $slider->update($data);
        return redirect(route('slider.index'))->with('success','Picture Updated Successfully');
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request )

    {
        $slider=Slider::find($request->dataid);
        FacadesFile::delete(public_path('/images/slider/'.$slider->photopath));
        $slider->delete();
        return redirect(route('slider.index'))->with('success','Picture Deleted Successfully');
        
    }
}
