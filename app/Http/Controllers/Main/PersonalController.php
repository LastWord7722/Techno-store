<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalController extends Controller
{
    public function index(User $user){

        return view('main.personal.index', compact('user'));
    }

    public function show(Product $product){

        return view('main.show', compact('product'));
    }
}
