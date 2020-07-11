@extends('includes.bootstrap')
@section('mainContent')
<!-- Hero Start -->

        <div class="container pb-top">
<div class="row">
    <div class="col-sm-4 text-center">
        <h4 class="text-center font-weight-bold mb-4">Pizza Topping</h4>
<div class="img hvr-float"><img src="/productImage/pizza topping.jpg" class="img-fluid center-block" alt="Responsive image" id="myImage"></div>
<button onclick="document.getElementById('myImage').src='/productImage/pizza topping.jpg'">Close The packet</button>
<button onclick="document.getElementById('myImage').src='/productImage/Buttery Mayo.jpg'">Open The Packet</button>
    </div>
    <div class="col-sm-8">
  <div class="container my-4 ml-3">

    {{-- <p class="font-weight-bold">Example of bootstrap accordion with animated arrows.</p> --}}

    <p><strong>Some Dummy Descrition for the Product Like What they are what they not what special (Like A brief Summary of Product)</strong></p>

    {{-- <p class="font-weight-bold">Basic example</p> --}}

    <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne1">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="false"
        aria-controls="collapseOne1">
        <h5 class="mb-0">
         Composition and nutritional value <i class="fa fa-angle-down float-right rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
     {{-- class="collapse show" --}}
    <div id="collapseOne1" role="tabpanel" class="collapse show" aria-labelledby="headingOne1"
      data-parent="#accordionEx">
      <div class="card-body">
        <div class="container">
            <div class="row">
            <div class="col-sm-6">
                <h4 class="font-weight-bold">Ingredients</h4>
                <p class="text-center">
Refined Soyabean Oil, Water, Sugar, Liquid Glucose, Iodised Salt, Milk Solids, Tomato Paste, Red Chilli Puree, Thickeners (INS1422, INS415, INS412), Acidity Regulators (INS260, INS330), Lemon Powder, Garlic Granulated, Onion Powder, Spices & Condiments, Sequestrant (INS385), CONTAINS ADDED FLAVOUR (NATURE-IDENTICAL), CONTAINS PERMITTED CLASS II PRESERVATIVES (INS202, INS211).
                </p>
            </div>
            <div class="col-sm-6">
<div class="card">
    <div class="card-body">
       <table class="table table-bordered">
<tbody>
    <tr>
<td colspan="2"><strong>NUTRITIONAL  INFORMATION</strong></td>
    </tr>
    <tr>
        <td colspan="2"><strong>Average Quantity Per 100g*</strong></td>
    </tr>
    <tr>
        <td>Energy (kcal)</td>
        <td>534.00</td>
    </tr>
    <tr>
        <td>Total Fat (g)</td>
        <td>34.00</td>
    </tr>
    <tr>
        <td>Saturated Fat (g)</td>
        <td>21.00</td>
    </tr>
    <tr>
        <td>Carbohydrates (g)</td>
        <td>45.70</td>
    </tr>
    <tr>
        <td>Sugar (g)</td>
        <td>45</td>
    </tr>
    <tr>
        <td>Total Fat (g)</td>
        <td>34.00</td>
    </tr>
    <tr>
        <td>Saturated Fat (g)</td>
        <td>21.00</td>
    </tr>
</tbody>
       </table>
    </div>
</div>
            </div>
        </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo2">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
        aria-expanded="false" aria-controls="collapseTwo2">
        <h5 class="mb-0">
        Storage conditions and shelf life <i class="fa fa-angle-down rotate-icon float-right"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
      data-parent="#accordionEx">
      <div class="card-body">
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque corporis, repudiandae aperiam, nihil officia possimus iusto qui iste sapiente tenetur, dolore fugit pariatur eos dolorum eius eveniet est consectetur odit.</p>
      </div>
     </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree3">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
        aria-expanded="false" aria-controls="collapseThree3">
        <h5 class="mb-0">
        Weight and packaging format<i class="fa fa-angle-down rotate-icon float-right"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
      data-parent="#accordionEx">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
        labore sustainable VHS.
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree4">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4"
        aria-expanded="false" aria-controls="collapseThree4">
        <h5 class="mb-0">
        Box / Pallet<i class="fa fa-angle-down rotate-icon float-right"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4"
      data-parent="#accordionEx">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
        labore sustainable VHS.
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree5">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree5"
        aria-expanded="false" aria-controls="collapseThree5">
        <h5 class="mb-0">
        Product code<i class="fa fa-angle-down rotate-icon float-right"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree5" class="collapse" role="tabpanel" aria-labelledby="headingThree5"
      data-parent="#accordionEx">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
        labore sustainable VHS.
      </div>
    </div>

  </div>
  <!-- Accordion card -->

</div>
<!-- Accordion wrapper -->

  </div>
    </div>
</div>
        </div>
<!--- Recipe Section---->
<div class="text-center mr-5 ml-5">
    <h6 class="text-bold">DISCOVER THE PIZZA TOPPING</h6>
</div>
<div class="container mt-3">
    <div class="row w-70">
        <div class="col-sm-4">
<div class="img hvr-float-shadow"><img src="/image/pizzaTopping.jpg" class="img-fluid center-block" alt="Responsive image"></div>
        </div>
        <div class="col-sm-6 mt-4 ml-5">
<table class="table table-bordered">
    <thead>
        <th>S.No</th>
        <th>Ingredients</th>
        <th>Quantity</th>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Pizza base (7 inch) </td>
            <td>1 Pcs</td>
        </tr>
        <tr>
             <td>2</td>
            <td>Finely chopped capsicum</td>
            <td>10 gm</td>
        </tr>
        <tr>
             <td>3</td>
            <td>Red bell pepper </td>
            <td>1 Pcs</td>
        </tr>
        <tr>
             <td>4</td>
            <td>Onion and corns each</td>
            <td>1 Pcs</td>
        </tr>
    </tbody>
</table>
        </div>
    </div>
<h4 class="text-bold mt-4">PREPARATION</h4>
<ul class="list-item ml-5 cook-text">
    <li>Take pizza Base and spread Foodcoast pizza topping over it</li>
    <li>Then add vegetables and mozzarella cheese over it.</li>
    <li>Finally Add Green olives, black olives, salt and pepper<br>
        according to your taste and bake it in an oven at 180 C for 5-10 min</li>
</ul>
<div class="text-center">
    <p class="font-weight-bold tagLine"><i>Serve it hot for terrific taste !!!</i></p>
</div>
</div>

<!---end of Recipe Section----->
<div class="text-center mr-5 ml-5">
    <h6 class="text-bold">EXPLORE OUR MORE RANGE</h6>
</div>
<div class="container w-50 mt-5">
    <div class="row justify-content-md-center">
<div class="col-sm-4">
<div class="img hvr-float-shadow"><a href="/tandoriSandwich"><img src="/productImage/Tandoori Sandwich.jpg" class="img-fluid center-block" alt="Responsive image"></a></div>
<p class="text-center mt-2">Tandori Sandwich Spread</p>
</div>
<div class="col-sm-4">
    <div class="img hvr-float-shadow"><a href="/whitePasta"><img src="/productImage/white pasta sauce.jpg" class="img-fluid center-block" alt="Responsive image"></a></div>
    <p class="text-center mt-2">White Pasta Sauce</p>
</div>
<div class="col-sm-4">
    <div class="img hvr-float-shadow"><a href="/burgerMayo"><img src="/productImage/Burger Mayo.jpg" class="img-fluid center-block" alt="Responsive image"></a></div>
    <p class="text-center mt-2">Burger Mayo</p>
</div>
    </div>
</div>


@endsection
