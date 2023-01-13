<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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
            'title' => 'required|min:2|max:50',
            'image' => 'image|required'
        ]);

       $data['image'] = Storage::disk('public')->put('/images/brand', $data['image']);

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
            'title' => 'min:2|max:50',
            'image' => ''
        ]);
        $oldImage = $brand->image;
        $newImage = $request->Hasfile('image');



        if($newImage === true){
            Storage::disk('public')->delete($oldImage);
            $data['image'] = Storage::disk('public')->put('images/brand', $data['image']);
        }

        $brand->update($data);
        return redirect()->back();
    }

    public function destroy(Brand $brand){

        $brand->delete();
        return redirect()->route('admin.brand.index')->with('massage', 'успешно удалили');
    }
}
