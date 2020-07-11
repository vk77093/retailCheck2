@extends('includes.newBootstrap')
@section('mainContent2')

<h4 class="text-center">Hiii new </h4>

<div class="container mt-5">
<div class="text-center">
{{-- <img src="/image/fc_logo.jpg" class="img-fluid"> --}}
</div>
</div>
<div class="container mt-5">
    <div class="text-center">
        <img src="/image/fc_banner.jpg" class="img-fluid hvr-grow">
    </div>
</div>
<hr>
<div class="container mt-2">
    <h4 class="text-center text-primary">About Us</h4>
    <p class="text-center mr-2"><strong>Foodcoast International</strong> was started in 2009, as a trading company and set up its manufacturing base in 2010. We strive to serve consistently and innovatively the markets with best food products at competitive prices. The company is focused on planning and executing the conception, pricing, promotion and distribution of world class food products.</p>
          <p class="text-center mr-2">We are into manufacturing of Mayonnaise, Ketchup, Spreads, Salad Dressings, Indian gravies, Toppings, Crushes etc. for both Indian &amp; World cuisine, in bulk packaging for instutionalized sales.</p>
</div>
<hr>
<div class="container mt-2">
    <div class="text-center">
        <img src="/image/fc_rangeA.jpg" class="img-fluid hvr-grow">
    </div>
</div>
<hr>
<div class="container mt-2">
    <div class="text-center">
        <a href="/image/Foodcoast_Catalogue_2015.pdf" target="_blank"><strong class="hvr-pop">Download PDF Catalogue</strong></a>
        <br>
        <a href="/image/Foodcoast_Catalogue_2015.pdf"><img src="/image/fc_download.jpg" class="img-fluid hvr-push"></a>
    </div>
</div>
{{-- <table>
    <tr>
    <td height="20" colspan="3" valign="top" bgcolor="#E14045"><!--DWLayoutEmptyCell-->&nbsp;</td>
    </tr>
</table> --}}
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
            <form action="{{route('second.storeNew')}}" method="POST">
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

                zoom: 16,
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
