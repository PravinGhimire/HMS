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

        @if(auth()->check())
        <a class="text-white text-sm m-1 ">Welcome,{{auth()->user()->name}}</a>
        @endif
        <ul>
          @if(!auth()->check())
          <li><a class="nav-link active" href="{{route('login')}}">Login</a></li>
          @else

          <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              @if(auth()->user()->role=='admin')
              <li><a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a></li>
              @else
              <li><a class="dropdown-item" href="{{route('bookingview')}}">View Booking</a></li>
              <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
              @endif
              <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
            </ul>
          </div>


          @endif
        </ul>
      </div>
    </div>
    </div>
  </nav>
</header>