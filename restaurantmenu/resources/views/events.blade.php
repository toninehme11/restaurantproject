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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="{{ asset('css/caroussel.css') }}">
  
    
    </head>
    <body>
 



    @include('partials.header')







    <div class="about-menu">
    <div class="container-fluid">
        @foreach ($events as $event)
        <div class="row">
            <div class="col-md-6 pl-0 pr-0">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="item">
                    <img src="data:image/jpeg;base64,{{ base64_encode($event->image) }}" alt="Menu Item Image" class="crousselImg">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 pl-0 pr-0">
                <h1>{{ $event->title }}</h1>
                <p>{{ $event->time }}</p>
                <p>{{ $event->description }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
















    @include('partials.footer')
    </body>
</html>
