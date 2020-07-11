<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDes extends Controller
{
    /* @param ProductDesciption */
    public function burger(){
        $title_page='Burger_Mayo';
        return view('ProductDesciption.burgerMayo',compact('title_page'));
    }
    public function butter(){
        $title_page='Buttery_Mayo';
        return view('ProductDesciption.buttermayo',compact('title_page'));
    }
    public function sandwich(){
        $title_page="Exotic_Sandwich_Spread";
        return view('ProductDesciption.exoticSandwich',compact('title_page'));
    }
    public function pizzaPasta(){
        $title_page="Pizza_Pasta_Sauce";
        return view('ProductDesciption.pizzapasta', compact('title_page'));

    }
    public function pizzaTopping(){
        $title_page='Pizza_Topping';
        return view('ProductDesciption.pizzaTopping',compact('title_page'));
    }
    public function tandoriSandwich(){
        $title_page='Tandori_Sandwich_Spread';
        return view('ProductDesciption.tandoriSandwich',compact('title_page'));
    }
    public function whitePasta(){
        $title_page='White_Pasta_Sauce';
        return view('ProductDesciption.whitePasta',compact('title_page'));
    }
}
