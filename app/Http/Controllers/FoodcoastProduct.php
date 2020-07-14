<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodcoastProduct extends Controller
{
    public function allmayo(){
        $title_page='ALL MAYO RANGE';
        return view('foodcoastProduct.mayonanise.allmayo',compact('title_page'));
    }
    public function realmayo(){
        $title_page='Real Mayo';
        return view('foodcoastProduct.mayonanise.realmayo', compact('title_page'));
    }
}
