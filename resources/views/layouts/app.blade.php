<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('datatable/datatables.css')}}">
        <script src="{{asset('datatable/jquery-3.6.0.js')}}"></script>
        <script src="{{asset('datatable/datatables.js')}}"></script>
 
       
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
   <body class="font-sans antialiased">
   <div class="flex ">
            <div class="w-56 bg-blue-200 shadow-md h-screen">
                 <div class="my-1">
                    <img src="images/logo3.png "class="w-10/12 bg-white mt-2 mx-auto  rounded-2xl" alt="">
                </div> 
                <div class="mt-13 ">
                <p class="text-center font-bold text-lg">Hello, {{auth()->user()->name}}</p>
                    <a href="{{route('dashboard')}}" class="block pl-4 border-b-2 border-green-500 ml-2 text-xl py-2 hover:bg-violet-600 ease-in-out duration-300  hover:text-white  @if(request()->routeIs('dashboard')) bg-blue-600 text-white @endif">Dashboard</a>
                    @if(auth()->user()->role=='admin')
                    <a href="{{route('rooms.index')}}" class="block pl-4 border-b-2 border-green-500 ml-2 text-xl py-2 hover:bg-violet-600 ease-in-out duration-300  hover:text-white @if(request()->routeIs('rooms.*')) bg-blue-600 text-white @endif">Rooms</a>
                    <a href="{{route('slider.index')}}" class="block pl-4 border-b-2 border-green-500 ml-2 text-xl py-2 hover:bg-violet-600 ease-in-out duration-300  hover:text-white @if(request()->routeIs('slider.*')) bg-blue-600 text-white @endif">Sliders</a>
                    <a href="{{route('gallery.index')}}" class="block pl-4 border-b-2 border-green-500 ml-2 text-xl py-2 hover:bg-violet-600  hover:text-white @if(request()->routeIs('gallery.*')) bg-blue-600 text-white @endif">Gallery</a>
                    <a href="{{route('user.index')}}" class="block pl-4 border-b-2 border-green-500 ml-2 text-xl py-2 hover:bg-violet-600 ease-in-out duration-300  hover:text-white @if(request()->routeIs('user.*')) bg-blue-600 text-white @endif">Users</a>
                    <a href="{{route('roomdetails.index')}}" class="block pl-4 border-b-2 border-green-500 ml-2 text-xl py-2 hover:bg-violet-600 ease-in-out duration-300  hover:text-white @if(request()->routeIs('roomdetails.*')) bg-blue-600 text-white @endif">Room Deatils</a>
                    @endif
                    <a href="{{route('books.index')}}" class="  block pl-4 border-b-2 border-green-500 ml-2 text-xl py-2 hover:bg-violet-600  hover:text-white ease-in-out duration-300 @if(request()->routeIs('booking.*')) bg-blue-600 text-white @endif">Booking</a>
                    <a href="/" class="  block pl-4 border-b-2 border-green-500 ml-2 text-xl py-2 hover:bg-violet-600  hover:text-white ease-in-out duration-300 @if(request()->routeIs('viewsite.*')) bg-blue-600 text-white @endif">View Site</a>
                    <form action="{{route('logout')}}" method="POST" >
                        @csrf
                       <a class="block pl-4 border-b-2 border-green-500 ml-2 text-xl py-2 hover:bg-violet-600  hover:text-white ease-in-out duration-300" type="submit">Logout</a>
                    </form>
                </div>
            </div>
            <div class="flex-1 p-6">
                @yield('content')
            </div>
        </div>
 
    </body>
</html>
