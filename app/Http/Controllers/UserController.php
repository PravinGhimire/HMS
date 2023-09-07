<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $forms=Booking::all();
        $paginatedUsers = User::paginate(6);
       
        return view('users.index',compact('users','forms','paginatedUsers'));
    }
    public function create()
    {
        $forms=Booking::all();
     return view('users.create',compact('forms'));
    }
    public function store(Request $request)
    {
        $data= $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed','min:8', 'regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d!@#$%^&*()\-_=+{};:,<.>]{8,}$/', Rules\Password::defaults()],
            'role' =>'required'
        ]);
        $data['password']= Hash::make($request->password);
        user::create($data);
        return redirect(route('user.index'))->with('success','User created successfully');
    }
    public function delete(Request $request)
    {
        $users = User::find($request->dataid);
        $users->delete();
        return redirect(route('user.index'))->with('success','User Deleted Successfully');
    }
}
