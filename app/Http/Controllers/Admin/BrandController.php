<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;


class BrandController extends Controller
{
    public function index(){

        $brends = Brand::get();

        return view('admin.brand.index', compact('brends'));
    }

    public function create(){

        return view('admin.brand.create');
    }

    public function store(Request $request, Brand $brand){

        $data = $request->validate([
            'title' => 'required|min:2|max:50'
        ]);

        $brand->create($data);

        return redirect()->route('admin.brand.index' );
    }

    public function show(Brand $brand){

        return view('admin.brand.show', compact('brand'));
    }

    public function edit(Brand $brand){

        return view('admin.brand.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand){

        $data = $request->validate([
            'title' => 'required|min:2|max:50'
        ]);

        $brand->update($data);
        return redirect()->back();
    }

    public function destroy(Brand $brand){

        $brand->delete();
        return redirect()->route('admin.brand.index')->with('massage', 'успешно удалили');
    }
}
