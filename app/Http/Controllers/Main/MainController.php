<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index(){
        $user = Auth::user()->with('role')->get();

        $products = Product::with('brand','category')->paginate(10);
        return view('main.home', compact('products','user'));
    }

    public function show(Product $product){

        return view('main.show', compact('product'));
    }
}
