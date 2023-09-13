<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
  <link rel="stylesheet" href="{{asset('css/contactus.css')}}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


  

        <!--bootstarp-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  </head>
  <body>







  @include('partials.header')
    <div class="container2">
      <div class="text">Contact Us</div>
      <form action="" method="post">
        <div class="form-row">
          <div class="input-data">
            <input type="text" required id="first" name="first">
            <div class="underline"></div>
            <label for="first">First Name</label>
          </div>
          <div class="input-data">
            <input type="text" required id="last" name="last">
            <div class="underline"></div>
            <label for="last">Last Name</label>
          </div>
        </div>
        <div class="form-row">
          <div class="input-data">
            <input type="text" required id="email" name="email">
            <div class="underline"></div>
            <label for="email">Email Address</label>
          </div>
        </div>
        <div class="form-row">
          <div class="input-data textarea">
            <textarea rows="8" cols="80" required id="message" name="message"></textarea>
            <div class="underline"></div>
            <label for="message">Write your message</label>
          </div>
        </div>
        <div class="form-row submit-btn">
          <div class="input-data">
            <div class="inner"></div>
            <input type="button" value="submit" id="submit" >
          </div>
        </div>
      </form>
    </div> 
    </div>
</div>
</div>
   </div>
   </div>
   </div>
 @include('partials.footer')
  </body>
 
  <script>
$("#submit").on("click", function(){

// If the form is not valid, stop here.
if (!document.querySelector('form').checkValidity()) {
    return;
}

$.ajax({
    type: "POST",
    url: "./PHPMailer.php",
    data: { 
      fname: $('#first').val(),
      uname: $('#last').val(),
      email: $('#email').val(),
      body: $('#message').val(),
    },
    success: function(result) {
      Swal.fire({
          icon: 'success',
          title: 'Mail sent successfully',
          showConfirmButton: false,
          timer: 1500
        })
    },
    error: function(result) {
    }
});
});

  </script>

</html>
