<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />



        <!--bootstarp-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 

        <link rel="stylesheet" href="{{ asset('css/caroussel.css') }}">
  
    
  
              <!-- Vendor CSS Files -->
<link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    </head>
    <body>
 



    @include('partials.header')





    <div class="about-menu">

    <div class="intro intro-carousel swiper position-relative">

<div class="swiper-wrapper">
@foreach ($events as $event)
    @php
        $img = 'data:image/jpeg;base64,' . base64_encode($event->image);
    @endphp
  <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image:  url('{{ $img }}');">
        <!-- ... (rest of the content) ... -->">
    <div class="overlay overlay-a"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="intro-body">
              <p class="intro-title-top">{{ $event->description }}
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">{{ $event->title }}</span>
                    </h1>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">{{ $event->time }}</span>
                    </h1>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div><!-- End Intro Section -->

</div>


    @include('partials.footer')




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>


  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
