<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use function Symfony\Component\String\b;

class BrandController extends Controller
{
    public function index(){

        $brends = Brand::get();

        return view('admin.brand.index', compact('brends'));
    }

    public function create(){
        //форма полетела

        return view('admin.brand.create');
    }

    public function store(Request $request){
        //
    }

    public function show(Brand $brand){

        return view('admin.brand.show', compact('brand'));
    }

    public function edit(Brand $brand){

        return view('admin.brand.edit', compact('brand'));
    }

    public function update(){
    // валидатор + апдейт+ редирект бек()
    }
}
