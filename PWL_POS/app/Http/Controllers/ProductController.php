<?php

namespace App\Http\Controllers;

class ProductController extends Controller {
    public function foodBeverage() { return view('products.index', ['cat' => 'Food Beverage']); }
    public function beautyHealth() { return view('products.index', ['cat' => 'Beauty Health']); }
    public function homeCare() { return view('products.index', ['cat' => 'Home Care']); }
    public function babyKid() { return view('products.index', ['cat' => 'Baby Kid']); }
}