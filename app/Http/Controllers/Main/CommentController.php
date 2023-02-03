<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;


use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request,Product $product){
        $data = $request->validate([
            'message' => 'required'
        ]);
        // cервис
        $user = Auth::user();
        $data['user_id'] = $user['id'];
        $data['product_id'] = $product['id'];

        Comment::create($data);
        return redirect()->back();
    }

    public function destroy(Comment $comment){
        $comment->delete();
        return redirect()->back();
    }
}
