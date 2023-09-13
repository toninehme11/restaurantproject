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
        <link rel="stylesheet" href="{{ asset('css/menu.css') }}">


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

    
    </head>
    <body>

    @include('partials.header')




  <div class="about-menu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 pl-0 pr-0"> <!-- Adjust the padding here -->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{ asset('img/pasta.jpg') }}" alt="..." class="crousselImg">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('img/burger.jpg') }}" alt="..." class="crousselImg">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('img/pizza.jpg') }}" alt="..." class="crousselImg">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('.carousel').carousel({
                    interval: 3000
                });
            </script>

            <div class="col-md-5 pl-0 pr-0"> <!-- Adjust the padding here -->
                <h1>Welcome to restomenu</h1>
                <p>Experience the finest culinary delights in town. Whether you're craving a sumptuous pasta, a juicy burger, or a delectable pizza, we have it all for you. Join us for an unforgettable dining experience!</p>
                <div class="padder">
                <button type="button" class="about-menu padder" id="view-menu-button" href="#starters-section">View Menu</button>

                </div>
            </div>
        </div>
    </div>
</div>














<div class="second-navbar-container" id="second-navbar">
    <div class="second-navbar-scroll">
        <ul class="second-navbar-menu">
            @foreach ($categories as $category)
                <!-- Create anchor links that point to the menu titles -->
                <li><a href="#{{ $category->categories }}">{{ $category->categories }}</a></li>
            @endforeach
            <!-- Add more navigation items here -->
        </ul>
    </div>
</div>














<!-- ======= Menu Section ======= -->
<section id="menu-section" class="menu" style="margin-top: 0; padding-top: 0;">
    <div class="container">
        <!-- Remove the empty section-title div -->
        <div class="row menu-container" id="anchor">
            @foreach ($categories as $category)
                <!-- Add an id attribute to each menu title section -->
                <div class="col-lg-12 menu-item {{ strtolower($category->name) }}" id="{{ $category->categories }}">
                    <h2 style="margin-top: 40px">{{ $category->categories }}</h2>
                    <small>
                        <i></i>
                    </small>
                </div>
            
                @if (isset($menuItemsByCategory[$category->categories]))
                    @foreach ($menuItemsByCategory[$category->categories] as $menuItem)
                        <div class="col-lg-6 menu-item {{ strtolower($category->name) }}">
                            <div class="menu-content">
                                <a href="">{{ $menuItem->name }}</a>
                                <span>{{ $menuItem->price }} &nbsp;$</span>
                            </div>
                            <div class="menu-ingredients" style="vertical-align: middle;">
                                <div class="col-md-2" style="float:left;">
                                    @if ($menuItem->image)
                                    <img src="data:image/jpeg;base64,{{ base64_encode($menuItem->image) }}" alt="Menu Item Image" style="width: 70px; height: 70px;">
                                    @endif
                                </div>
                                <div class="col-md-10" style="margin: 5px;">
                                    @if ($menuItem->description)
                                        {{ $menuItem->description }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            @endforeach
        </div>
    </div>
</section>
<!-- End Menu Section -->








        @include('partials.footer')





        <script>
    $(document).ready(function() {
        // When the "View Menu" button is clicked
        $("#view-menu-button").click(function() {
            // Scroll to the "Starters" section with a smooth animation
            $("html, body").animate({
                scrollTop: $("#menu-section").offset().top
            }, 1000); // Adjust the animation duration (in milliseconds) as needed
        });
    });
</script>




</script>

<script>
$(document).ready(function() {
    // Smooth scrolling for anchor links
    $('a[href*="#"]').on('click', function(e) {
        e.preventDefault();

        var target = $(this).attr('href');

        $('html, body').animate(
            {
                scrollTop: $(target).offset().top
            },
            1000 // Adjust the scrolling duration as needed
        );
    });
});
</script>



<script>
$(document).ready(function() {
    // Smooth scrolling for anchor links in the secondary navbar
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();

        var target = $(this).attr('href');

        $('html, body').animate(
            {
                scrollTop: $(target).offset().top
            },
            1000 // Adjust the scrolling duration (in milliseconds) as needed
        );
    });
});
</script>




    </body>
</html>
