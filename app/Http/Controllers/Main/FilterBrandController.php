<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilterBrandController extends Controller
{
    public function index(){
        $brands = Brand::all();
        return view('main.brand.index',compact('brands'));
    }

    public function getProductBrand(Brand $brands){

        return view('main.brand.show',compact('brands'));
    }

}
