<div class="header_main">
    <div class="mobile_menu">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo_mobile"><img src="images/logo-no-background.png"></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav">
                <li class="nav-item">
                   <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{url('home.about')}}">About</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link " href="{{url('services')}}">Blog</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link " href="contact#">Contact</a>
                </li>
             </ul>
          </div>
       </nav>
    </div>
    <div class="container-fluid">
       <div class="logo w-20 md:w-1/2 lg:w-1/3 xl:w-1/4"><img width="80px" src="images/logo-no-background.png"></div>
       <div class="menu_main">
          <ul>
             <li class="active"><a href="{{url('/')}}">Home</a></li>
             <li><a href="{{url('home.about')}}">About</a></li>
             <li><a href="{{url('home.services')}}">Blog</a></li>
             @if (Route::has('login'))
             @auth
             <li>
                <x-app-layout>

                </x-app-layout>
             </li>

              @else
               <li><a href="{{route('login')}}">Login</a></li>
               <li><a href="{{route('register')}}">Register</a></li>
            @endauth
             @endif
          </ul>
       </div>
    </div>
 </div>
