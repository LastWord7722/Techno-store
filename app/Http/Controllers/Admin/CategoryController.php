<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
    }

    public function create(){

        return view('admin.category.create');
    }

    public function store(Request $request, Category $category){

        $data = $request->validate([
            'title' => 'required|min:2|max:50'
        ]);

        $category->create($data);

        return redirect()->route('admin.category.index' );
    }

    public function show(Category $category){

        return view('admin.category.show', compact('category'));
    }

    public function edit(Category $category){

        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category){

        $data = $request->validate([
            'title' => 'required|min:2|max:50'
        ]);

        $category->update($data);
        return redirect()->back();
    }

    public function destroy(Category $category){

        $category->delete();
        return redirect()->route('admin.category.index')->with('massage', 'успешно удалили');
    }
}

