<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
    }
    public function create()
    {
     return view('users.create');
    }
    public function store(Request $request)
    {
        $data= $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
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
