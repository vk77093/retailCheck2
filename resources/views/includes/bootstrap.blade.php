<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="/assets/hover-min.css">

<!-- Font Awesome -->
{{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> --}}
<!-- Google Fonts -->
{{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"> --}}
<!-- Bootstrap core CSS -->
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}
<!-- Material Design Bootstrap -->
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet"> --}}
<style>
    .my{
        margin-top:-12px;
    }

    .navbar-light .navbar-toggler-icon{
background-image: url(https://i.stack.imgur.com/mSXoO.png)!important;
/* width: 40px; */
}
.nav-link{
   display: block;
    padding: 0px;
}
/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
    .pad{
        margin-top: -5px;
    }
    .pad2{
        margin-top: 7px;
    }
}

</style>
    <title>

Foodcoast| {{$title_page ?? ''}} </title>
  </head>
<body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mt-1">
  <a class="navbar-brand" href="/second"><img src="image/foodcoast_retail_logo.png" class="my"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link active" href="/retail">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link pad2" href="/retail#products"><p class="font-weight-bold">Product</p></a>
      <a class="nav-item nav-link pad" href="/upcomingLaunch"><p class="font-weight-bold">Upcoming</p></a>
      <a class="nav-item nav-link pad" href="/retail#contact"><p class="font-weight-bold">Contact Us</p></a>
    </div>
  </div>
</nav>
 <body>
    @yield('mainContent')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
        $(".rotate").click(function () {
    $(this).toggleClass("down");
})
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    @yield('javaScript')

  </body>
  @include('includes.footer')
</html>
