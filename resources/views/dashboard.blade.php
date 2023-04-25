
@extends('layouts.app')
@section('content')


<h2 class="text-4xl font bold border-b-4 text-red-500 border-blue "> Admin Dashboard</h2>  

<div class="grid grid-cols-3 gap-8 my-6 ">      
    <div class="p-4 flex justify-between bg-green-600 text-white rounded-lg">
        <span class="text-xl font-bold">Total Reviews</span>
        <span class="text-5xl font-bold">3905</span>
    </div>
    <div class="p-4 flex justify-between bg-blue-600 text-white rounded-lg">
        <span class="text-xl font-bold">Total feedback </span>
        <span class="text-5xl font-bold">3565</span>
    </div>
    <div class="p-4 flex justify-between bg-red-600 text-white rounded-lg">
        <span class="text-xl font-bold">Total visits</span>
        <span class="text-5xl font-bold">5000</span>
    </div>
    <div class="p-4 flex justify-between bg-slate-600 text-white rounded-lg">
        <span class="text-xl font-bold">Total Rooms</span>
        <span class="text-5xl font-bold">{{$totalrooms}}</span>
    </div>
    <div class="p-4 flex justify-between bg-pink-800 text-white rounded-lg">
        <span class="text-xl font-bold">Total Users</span>
        <span class="text-5xl font-bold">{{$totalusers}}</span>
    </div>
    <div class="p-4 flex justify-between bg-slate-900 text-white rounded-lg">
        <span class="text-xl font-bold">Total Booking</span>
        <span class="text-5xl font-bold">5890</span>
    </div>
</div>

@endsection