<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilterCategoryController extends Controller
{
    public function index(){

    }

    public function getProductCategory(){

        $products = Product::with('brand','category')->paginate(10);
        return view('main.home', compact('products'));
    }

}
