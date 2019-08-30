 <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
<div class="container">

  <a class="navbar-brand" href="{{route('root_path')}}">{{config('app.name')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav mr-auto">
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
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
         <a class="dropdown-item" href="https://laravel.com" target="_blank">Laravel.com</a>
            <a class="dropdown-item" href="https://laracasts.com" target="_blank">Laracasts</a>
          <a class="dropdown-item" href="https://laravel.io" target="_blank">Laravel.io</a>
          <a class="dropdown-item" href="https://larajobs.com" target="_blank">Larjobs</a>
          <a class="dropdown-item" href="https://lara-news.com" target="_blank">LaraNews</a>
          <a class="dropdown-item" href="https://larachat.com" target="_blank">Larachat</a>
        </div>
      </li>
       <li class="{{set_active_route('contact_path')}}">
        <a class="nav-link" href=" {{route('contact_path')}} ">Contact</a>
      </li>
    </ul>


     <ul class="nav navbar-nav navbar-right"> 
      @guest 
           <li class="nav-item ">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>


           <li class="nav-item ">
            <a class="nav-link" href="{{route('register')}}">Register</a>
          </li>
        @else
          <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->full_name}} <span class="caret"></span>
                </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>
                  </div>
            </li>
      @endguest
    </ul>
   
  </div>
  </div>
</nav>






 {{-- <nav class="navbar navbar-expand-md fixed-top navbar-dark static-top bg-dark">
  <div class="container" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link " href="{{route('root_path')}}">{{config('app.name')}} <span class="sr-only">(current)</span></a>
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

      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="planetDropdown" role="Planet" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
        <div class="dropdown-menu" aria-labelledby="planetDropdown">
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
      @guest 
           <li class="nav-item ">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>


           <li class="nav-item ">
            <a class="nav-link" href="{{route('register')}}">Register</a>
          </li>
        @else
          <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
            </li>
      @endguest
    </ul>
  
  </div>
</nav>  --}}