<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        $products = Product::with('brand','category')->paginate(8);
        return view('main.home', compact('products'));
    }
}
