<header>
 <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
  <div class="container ">
    <a class="navbar-brand" href="/">New Era</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/room">Our Room</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/gallerys">Gallery</a>
        </li>
      </ul>
        <div class=" btn-group ">
        @if(auth()->check())
        <p class="text-white text-xl m-2 ">Welcome,{{auth()->user()->name}} aalu</p>
        @endif
                 <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class='	far fa-user-circle' style='font-size:30px margin-right=1px' href="#"></i>
               </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                     @if(!auth()->check())
                     <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                     @else
                     <!-- <li><a class="dropdown-item" href="{{route('login')}}">{{auth()->user()->name}}</a></li> -->
                     <li><a class="dropdown-item" href="{{route('books.index')}}">View Bookings</a></li>
                     <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                     @endif
                     <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                  </ul>
             </div>
    </div>
  </div>
</nav> 
   </header>