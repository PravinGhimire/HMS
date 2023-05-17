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
            <li><button class="btn btn-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">View Booking</button>

              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                  <h5 id="offcanvasRightLabel">View Booking</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <!-- <table id="example" class="display  ">
                    <thead>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Check_in</th>
                      <th>Check_out</th>
                      <th>Room </th>
                      <th>Payment Status</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                      @foreach($forms as $form)

                      <tr>
                        <td>{{$form->name}}</td>
                        <td>{{$form->email}}</td>
                        <td>{{$form->check_in}}</td>
                        <td>{{$form->check_out}}</td>
                        <td>{{$form->room->room_type}}</td>
                        <td><span class="bg-yellow-400 text-white text-m font-medium mr-2 px-2.5 py-1 rounded dark:bg-yellow-400">Pending</span>

                        </td>
                        <td>
                          <a href="" class="bg-blue-600 text-white px-4 py-1 rounded-lg mx-1">Edit</a>
                          <a onclick="showDelete" class="bg-red-600 text-white px-4 py-1 rounded-lg mx-1 cursor-pointer">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table> -->

                </div>
              </div>
            </li>
            <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
            @endif
            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>