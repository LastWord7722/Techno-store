<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function redirect;
use function view;

class ProductController extends BaseController
{
    public function index(){

        $products = Product::get();

        return view('admin.product.index', compact('products'));
    }

    public function create(){
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.product.create', compact('brands','categories'));
    }

    public function store(StoreProductRequest $request, Product $product){

        $data = $request->validated();

        $data['image'] = Storage::disk('public')->put('/images/product', $data['image']);

        $product->create($data);
        dd($product);
        return redirect()->route('admin.product.show',$data->id );
    }

    public function show(Product $product){

        return view('admin.product.show', compact('product'));
    }

    public function edit(Product $product){

        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, Product $product){
        $data = $request->validate([
            'name' => 'min:2|max:50',
            'image' => ''
        ]);

        $oldImage = $product->image;
        $newImage = $request->Hasfile('image');

        if($newImage === true ){
            Storage::disk('public')->delete($oldImage);
            $data['image'] = Storage::disk('public')->put('images/product', $data['image']);
        }

        $product->update($data);
        return redirect()->back();
    }

    public function destroy(Product $product){

        $product->delete();
        return redirect()->route('admin.product.index')->with('massage', 'успешно удалили');
    }
}
