@extends('includes.bootstrap')
@section('mainContent')

 {{-- <h4 class="text-center">Welcome to the Reatail Page</h4> --}}
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-top: 50px">
  <div class="carousel-inner">
    <div class="carousel-item active">
     <img src="\image\pic1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="\image\pic2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="\image\pic4.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<hr>
<div class="container mt-3">
<h5 class="text-center font-weight-bold">About Foodcoast Reatail</h5>
<p class="text-center mr-2 about-us">FOODCOAST is a name synonymous with premium quality food products in the Indian and the international market.
Today, the company is into manufacturing of processed food products like Mayonnaise, Ketchups, Sandwich Spreads, Dips, and Gravies, Crushes and other ready-to-use products
Foodcoast International manufactures products of truly international quality under famous brand names such as FOODCOAST, AARIA, TRRU and AFRIN. Internationally recognized quality certifications are proof of our commitment to quality. Delivering committed, customized and consistent service,  We create the most authentic and customized sauces for Indian Palates; catering to Indian tastes worldwide and thereby taking “FOODCOAST TO EVERY COAST by retail
</p>
</div>
<hr>
{{-- <div class="container mt-3" id="products">
<h5 class="text-center text-primary">Reatail Product Range</h5> --}}
{{-- <div class="row mt-3">
@forelse ($productData as $item)
     <div class="col-sm-4 mt-3">
<div class="card">
<div class="card-header text-center">{{$item->prod_name}}</div>
<img class="card-img-top img-responsive hvr-grow" src="/productImage/{{$item->prod_image}}" alt="Card image cap">
<div class="card-body align-content-lg-center">
    <h5 class="card-title">PKG TYPE --- {{$item->pkg_type}} | ({{$item->pkg_weight}})</h5>

<a href="{{$item->links}}" target="_blank" class="btn btn-primary">Buy Now</a>
  </div>
</div>
    </div>

@empty
 <h5 class="text-center">Currently no Any Product is Here</h5>
@endforelse
    {{-- <div class="col-sm-4 mt-3">
<div class="card">
<div class="card-header text-center">ABC Product 2</div>
<img class="card-img-top hvr-pulse-shrink" src="image/pouch1.jpg" alt="Card image cap">
<div class="card-body">
    <h5 class="card-title">PKG TYPE --- 1KG</h5>

    <a href="#" class="btn btn-primary">Buy Now</a>
  </div>
</div>
    </div>

    <div class="col-sm-4 mt-3">
<div class="card">
<div class="card-header text-center">ABC Product 2</div>
<img class="card-img-top hvr-grow " width="100" src="image/packet3.jpg" alt="Card image cap">
<div class="card-body">
    <h5 class="card-title">PKG TYPE --- 1KG</h5>

    <a href="#" class="btn btn-primary">Buy Now</a>
  </div>
</div>
    </div>

    <div class="col-sm-4 mt-3">
<div class="card">
<div class="card-header text-center">ABC Product 2</div>
<img class="card-img-top hvr-grow" src="image/pouch2.jpg" alt="Card image cap">
<div class="card-body">
    <h5 class="card-title">PKG TYPE --- 1KG</h5>

    <a href="#" class="btn btn-primary">Buy Now</a>
  </div>
</div>
    </div>
     <div class="col-sm-4 mt-3">
<div class="card">
<div class="card-header text-center">ABC Product 2</div>
<img class="card-img-top hvr-grow" src="image/pouch3.jpg" alt="Card image cap">
<div class="card-body">
    <h5 class="card-title">PKG TYPE --- 1KG</h5>

    <a href="#" class="btn btn-primary">Buy Now</a>
  </div>
</div>
    </div> --}}

     {{-- <div class="col-sm-4 mt-3">
<div class="card">
<div class="card-header text-center">ABC Product 2</div>
<img class="card-img-top hvr-grow" src="image/bottle3.png" alt="Card image cap">
<div class="card-body">
    <h5 class="card-title">PKG TYPE --- 1KG</h5>

    <a href="#" class="btn btn-primary">Buy Now</a>
  </div>
</div>
    </div> --}}

{{---</div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    {{$productData->render()}}
  </ul>
</nav>--}}
{{-- </div> --}}
 <!--- Product Range Section------>
 <div class="container mt-3" id="products">
<h5 class="text-center font-weight-bold">Reatail Product Range</h5>
<div class="row mt-3">
 <div class="col-sm-3 mt-3">
<div class="img hvr-float-shadow"><a href="/burgerMayo"><img src="/productImage/Burger Mayo.jpg" class="img-fluid center-block" alt="Responsive image"></a></div>
    <p class="text-center mt-2">Burger Mayo</p>

    </div>
    <div class="col-sm-3 mt-3">
<div class="img hvr-float-shadow">
    <a href="/butterMayo"><img src="/productImage/Buttery Mayo.jpg" class="img-fluid center-block" alt="Responsive image"></a></div>
    <p class="text-center mt-2">Buttery Mayo</p>
    </div>
    <div class="col-sm-3 mt-3">
<div class="img hvr-float-shadow"><a href="/sandwich"><img src="/productImage/Exotic Sandwich.jpg" class="img-fluid center-block" alt="Responsive image"></a></div>
    <p class="text-center mt-2">Exotic Sandwich</p>
    </div>
    <div class="col-sm-3 mt-3">
<div class="img hvr-float-shadow"><a href="/pizzaPasta"><img src="/productImage/pizza pasta sauce.jpg" class="img-fluid center-block" alt="Responsive image"></a></div>
    <p class="text-center mt-2">Pizza Pasta sauce</p>
    </div>
    <div class="col-sm-4 mt-3">
<div class="img hvr-float-shadow"><a href="/pizzaTopping"><img src="/productImage/pizza topping.jpg" class="img-fluid center-block" alt="Responsive image"></a></div>
    <p class="text-center mt-2">Pizza Topping</p>
    </div>
    <div class="col-sm-4 mt-3">
<div class="img hvr-float-shadow"><a href="/tandoriSandwich"><img src="/productImage/Tandoori Sandwich.jpg" class="img-fluid center-block" alt="Responsive image"></a></div>
    <p class="text-center mt-2">Tandoori Sandwich</p>
    </div>
    <div class="col-sm-4 mt-3">
<div class="img hvr-float-shadow"><a href="/whitePasta"><img src="/productImage/white pasta sauce.jpg" class="img-fluid center-block" alt="Responsive image"></a></div>
    <p class="text-center mt-2">White Pasta Sauce</p>
    </div>
</div>
 </div>
<hr>
<!-- Contact Section -->
    <div class="w3-container w3-light-grey" style="padding:12px 16px" id="contact">
        <h3 class="w3-center"><span class="w3-text-red" style="font-family:sans-serif;color:  #ff0000">CONTACT</span></h3>
        <p class="w3-center w3-large"style="line-height: 1.2px">Lets get in touch. Send us a message:</p>
        <div class="w3-row-padding" style="margin-top:34px">
            <div class="w3-half">
                <p class="w3-small"><i class="fa fa-map-marker fa-fw w3-xlarge w3-margin-right"></i>Foodcoast International A-23A Focal Point Extension,Jalandhar-144004</p>

                <p class="w3-small"><i class="fa fa-phone fa-fw w3-xlarge w3-margin-right"></i><b> Phone: 1800 274 274 0 ,  91 181 5077771/72</b></p>
                <p class="w3-small"><i class="fa fa-envelope fa-fw w3-xlarge w3-margin-right"> </i> Email:     info@foodcoast.com</p>
                <br>
            <form action="{{route('retail.store')}}" method="POST">
                @csrf
                <div id="sessionMessage">
                     @if (Session::has('user_query'))
                <div class="alert alert-danger">
                <p class="text-danger">{{session('user_query')}}</p>
                </div>

                @endif
                    <p class="w3-small"><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name" name="name"></p>
                    <p class="w3-small"><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email" name="email"></p>
                    <p class="w3-small"><input class="w3-input w3-border" type="tel" maxlength="10" minlength="10" placeholder="Your Number" required name="mob_number" name="mob_number"></p>
                    <p class="w3-small"><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject" name="subject"></p>
                    <p class="w3-small"><input class="w3-input w3-border" type="text" placeholder="Query" required name="user_query" name="user_query"></p>
                    <p>
                        <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> SEND QUERY
          </button>
                    </p>
                    </div>
                </form>
            </div>
            <div class="w3-half">
                <!-- Add Google Maps -->
                <div id="googleMap" class="w3" style="width:100%;height:410px;"></div>
            </div>
        </div>
    </div>

    <!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
    <a href="#" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
        <i class="fa fa-facebook-official w3-hover-blue"></i>
        <i class="fa fa-instagram w3-hover-red"></i>
      <a href="https://www.youtube.com/channel/UCVIg3GIbSP6vLoiPPcdZCYw" target="_blank">
        <i class="fa fa-youtube w3-hover-red"></i></a>
        <i class="fa fa-twitter w3-hover-opacity"></i>
    </div>

    {{-- <p>Crafted by <i class="fa fa-hand-peace-o" style="font-size:24px;color:red"></i> <a href="" target="" class="w3-hover-text-green">Vijay Kumar</a></p> --}}
     <p style="align:center">&copy;  All Right Resvered at FoodCoast International<p>
</footer>
@section('javaScript')
    <!-- Add Google Maps -->
    <script>
        function myMap() {
            myCenter = new google.maps.LatLng(31.366778, 75.574660);
            var mapOptions = {
                center: myCenter,

                zoom: 12,
                scrollwheel: false,
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
                animation: google.maps.Animation.BOUNCE,
            });
            marker.setMap(map);
        }map

        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }


        // Toggle between showing and hiding the sidebar when clicking the menu icon
        var mySidebar = document.getElementById("mySidebar");

        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
            } else {
                mySidebar.style.display = 'block';
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
        }

    </script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBYyj0lk0Lp8wR1wxnUGPvkt4caXJAeIs&callback=myMap"></script>

@endsection
@endsection
