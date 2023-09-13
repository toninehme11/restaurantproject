<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restomenu</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />


    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">



<script src="{{ mix('js/app.js') }}" defer></script>

  </head>
  <body>



    <nav class="navbar">
      <div class="navbar-container container">
          <input type="checkbox" name="" id="">
          <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
          </div>
          <ul class="menu-items">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ url('/events') }}">events</a></li>
              <li><a href="{{ url('/contact-us') }}">contact</a></li>
              @if (Route::has('login'))
                @auth
              <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                @else
               <li><a href="{{ route('login') }}" >Log in</a></li>
               @if (Route::has('register'))
               <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                @endif 
          </ul>
          <img src="{{ asset('img/logo.png') }}" alt="Restaurant" class="logo" >
      </div>
  </nav>
   

