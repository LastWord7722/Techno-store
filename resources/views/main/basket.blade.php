@extends('layouts.layouts')
<!-- Background image -->

@section('Content')
    <section class="cart-area pt-120 pb-120">
        <div class="container">
            <div class="row wow fadeInUp  animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="cart-table-box">
                        <div class="table-outer">
                            <table class="cart-table">
                                <thead class="cart-header">
                                <tr>
                                    <th class="">Наиминование</th>
                                    <th class="price">Цена</th>
                                    <th>Количество товара</th>
                                    <th>Промежуточный итог</th>
                                    <th class="hide-me"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!$order->products)
                                  <h3 class="text-center text-dark">  Добавленых товаров нет </h3>
                                @endif
                                @foreach($order->products as $product)
                                    <tr>
                                        <td>
                                            <div class="thumb-box"><a href="{{route('main.show',$product->id)}}"
                                                                      class="thumb">
                                                    <img src="{{url('storage/' . $product->image)}}" alt="нету">
                                                </a> <a href="shop-details-1.html" class="title">
                                                    <h5> {{$product->name}} </h5>
                                                </a></div>
                                        </td>
                                        <td>{{$product->price}} $</td>
                                        <td class="qty">
                                            <div class="qtySelector text-center">
                                                <form action="{{route('minusProduct', $product->id)}}" method="post"> @csrf
                                                    <button type="submit">
                                                <span class="decreaseQty"><i class="flaticon-minus"></i> </span>
                                                    </button>
                                                </form>

                                                <input type="number" class="qtyValue" value="{{$product->pivot->quantity}}">

                                                <form action="{{route('addCard',$product->id)}}" method="post"> @csrf
                                                    <button type="submit">
                                                <span class="increaseQty"> <i class="flaticon-plus"></i> </span>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td class="sub-total">{{$product->price * $product->pivot->quantity}} $</td>

                                        <td>
                                            <form action=" {{route('removeCard',$product->id)}}" method="post">
                                                @csrf @method('post')
                                                <div class="remove text-danger">
                                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                                        <i class="flaticon-cross "> </i></button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row pt-120">
                <div class="col-xl-6 col-lg-7 wow fadeInUp  animated"
                     style="visibility: visible; animation-name: fadeInUp;">
                    <div class="cart-total-box">
                        <div class="inner-title">
                            <h3>Cart Totals</h3>
                        </div>
                    </div>
                </div>
            </div>

                    <div class="cart-check-out mt-30">
                        <h3>Check Out</h3>
                        <ul class="cart-check-out-list">
                            <li>
                                <div class="left">
                                    <p>Subtotal</p>
                                </div>
                                <div class="right">
                                    <p>$2500.00</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <p>Shipping</p>
                                </div>
                                <div class="right">
                                    <p><span>Flat rate:</span> $50.00</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <p>Total Price:</p>
                                </div>
                                <div class="right">
                                    <p>$2550.00</p>
                                </div>
                            </li>
                        </ul>
                    </div>
            <button class="btn btn-success"> Оплатить </button>
                </div>
            </div>
        </div>
    </section>
@endsection