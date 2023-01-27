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
        $categories = Category::withCount('product')->get();

        return view('main.category.index',compact('categories'));
    }

    public function getProductCategory(Category $categories){

        return view('main.category.show',compact('categories'));
    }

}
