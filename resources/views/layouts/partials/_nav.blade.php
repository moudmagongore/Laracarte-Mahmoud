 <nav class="navbar navbar-expand-md navbar-dark static-top bg-dark">
  {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> --}}

  <div class="container" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link {{--  disabled --}}" href="{{route('root_path')}}">{{config('app.name')}} <span class="sr-only">(current)</span></a>
      </li>
      <li class="{{set_active_route('root_path')}}">
        <a class="nav-link" href=" {{route('root_path')}} ">Home</a>
      </li>
      <li class="{{set_active_route('about_path')}}">
        <a class="nav-link" href=" {{route('about_path')}} ">About</a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="#">Artisans</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" role="Planet" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Laravel.com</a>
          <a class="dropdown-item" href="#">Laravel.io</a>
          <a class="dropdown-item" href="#">Larjobs</a>
           <a class="dropdown-item" href="#">LaraNews</a>
            <a class="dropdown-item" href="#">Larachart</a>
        </div>
      </li>

       <li class="{{set_active_route('contact_path')}}">
        <a class="nav-link" href=" {{route('contact_path')}} ">Contact</a>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">  
       <li class="nav-item ">
        <a class="nav-link" href="#">Login</a>
      </li>


       <li class="nav-item ">
        <a class="nav-link" href="#">Register</a>
      </li>
    </ul>
   {{--  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> --}}
  </div>
</nav> 