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
        <li><a class="btn text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Booking</a>

          <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Bookings</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <div class="table-responsive">
<table  class="table ">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Check_in</th>
        <th>Check_out</th>
        <th>Room </th>
        <th>Payment Status</th>
        <th>Action</th>
     </tr>
    </thead>
    <tbody>
        @foreach($forms as $form)
        <tr>
        <tr>

            <td>{{$form->name}}</td>
            <td>{{$form->email}}</td>
            <td>{{$form->check_in}}</td>
            <td>{{$form->check_out}}</td>
            <td>{{$form->room->room_type}}</td>
            <td><span class="bg-yellow-400 text-white text-m font-medium mr-2 px-2.5 py-1 rounded dark:bg-yellow-400">Pending</span>

            </td>
            <td>
                <a href="" class="bg-blue-600 text-white px-4 py-1 rounded-lg mx-1">Edit</a> <a onclick="showDelete" class="bg-red-600 text-white px-4 py-1 rounded-lg mx-1 cursor-pointer">Delete</a>
            </td>
        </tr>
         </tr>
        @endforeach
    </tbody>
</table>
</div>
            </div>
          </div>
        </li>
        @endif
        <ul>
          @if(!auth()->check())
          <li><a class="nav-link active" href="{{route('login')}}">Login</a></li>
          @else

          <li><a class="nav-link active" href="{{route('logout')}}">Logout</a></li>

          @endif
        </ul>
      </div>
    </div>
    </div>
  </nav>
</header>