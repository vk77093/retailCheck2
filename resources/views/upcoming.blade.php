@extends('includes.bootstrap')

@section('mainContent')
        <!-- our upcoming Events ---->
 <div class="container pb-topx text-center">


        <h3 class="text-center">Event Type :Product Launch</h3>
        <div class="col md-4">
<!-- Card Wider -->
  <div class="card card-cascade wider mt-2 mb-3">

    <!-- Card image -->

    <div class="view view-cascade overlay hvr-shrink">
      <img  class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!-- Card content -->
    <div class="card-body card-body-cascade text-center">

      <!-- Title -->
      <h4 class="card-title"><strong>AAHAR - 45</strong></h4>
      <!-- Subtitle -->
      <h5 class="blue-text pb-2"><strong>Some place name</strong></h5>
       <h5 class="blue-text pb-2"><strong>From --- 25-5-2020 ---TO---  27-5-2020</strong></h5>
      <!-- Text -->
      <p class="card-text">Address and venue details and much more content for the user </p>

      <!-- Dribbble -->
      <a class="btn-floating btn-fb mx-1"href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Fcss-tricks.com%2F" target="_blank"><i class="fa fa-facebook-official w3-hover-blue" id="social-fb"></i></a>
      <!-- Linkedin -->
      <a class="px-2 fa-lg li-ic" href="https://www.linkedin.com/shareArticle?..." target="_blank"><i class="fa fa-instagram w3-hover-red"></i></a>
      <!-- Twitter -->
      <a class="px-2 fa-lg tw-ic" href="https://twitter.com/intent/tweet?..." target="_blank"><i class="fa fa-twitter w3-hover-blue"></i></a>
      <a class="px-2 fa-lg tw-ic" href="https://twitter.com/intent/tweet?..." target="_blank"><i class="fa fa-youtube w3-hover-red"></i></a>

    </div>

  </div>
  <!-- Card Wider -->

        </div>
    </div>

<!---end of upcoming events----->

@endsection
