<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Oreder;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function basket(){
        $orderId = session('orderId');
        if (!is_null($orderId)){
            $order = Oreder::findOrFail($orderId);
        }

        return view('main.basket', compact('order'));
    }

    public function addCard($productId){

        $orderId = session('orderId');

        if (is_null($orderId)){
            $order = Oreder::create()->id;
            session(['orderId'=> $order]);

        }else{
            $order = Oreder::find($orderId);
        }

        // проверка есть ли товар
        if ($order->products->contains($productId)){
            $plusCount = $order->products()->where('product_id','=',$productId)->first()->pivot;
            $plusCount->quantity++;
            $plusCount->update();

        }else{
            $order->products()->attach($productId);
        }

        return redirect()->back();
    }

    public function removeCard($productId){
        $orderId = session('orderId');
        $order = Oreder::find($orderId);

        $order->products()->detach($productId);
        return redirect()->back();
    }

    public function minusProduct($productId){
        $orderId = session('orderId');
        $order = Oreder::find($orderId);

        $minusCount = $order->products()->where('product_id','=',$productId)->first()->pivot;
        if ($order->products->contains($productId) and $minusCount->quantity >= 2){
            $minusCount->quantity--;
            $minusCount->update();
        }
        return redirect()->back();

    }
}
