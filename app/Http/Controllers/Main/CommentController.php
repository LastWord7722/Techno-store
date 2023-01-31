<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\StoreCommentRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request, $product){
        dd('sss');
        $user = Auth::user();
        $data = $request->validated();
        dd($data);
    }

    public function destroy(){
        //
    }
}
