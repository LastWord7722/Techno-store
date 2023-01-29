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
            <div class="row">
                <div class="col-xl-12">
                    <div class="cart-button-box">
                        <div class="apply-coupon wow fadeInUp  animated"
                             style="visibility: visible; animation-name: fadeInUp;">
                            <div class="apply-coupon-input-box mt-30 "><input type="text" name="coupon-code" value=""
                                                                              placeholder="Coupon Code"></div>
                            <div class="apply-coupon-button mt-30">
                                <button class="btn--primary style2" type="submit">Apply Coupon</button>
                            </div>
                        </div>
                        <div class="cart-button-box-right wow fadeInUp  animated"
                             style="visibility: visible; animation-name: fadeInUp;">
                            <button class="btn--primary mt-30" type="submit">Continue Shopping</button>
                            <button class="btn--primary mt-30" type="submit">Update Cart</button>
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
            <div class="row mt--30">
                <div class="col-xl-6 col-lg-7 wow fadeInUp  animated"
                     style="visibility: visible; animation-name: fadeInUp;">
                    <div class="cart-total-box mt-30">
                        <div class="table-outer">
                            <table class="cart-table2">
                                <thead class="cart-header clearfix">
                                <tr>
                                    <th colspan="1" class="shipping-title">Shipping</th>
                                    <th class="price">$2500.00</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="shipping"> Shipping</td>
                                    <td class="selact-box1">
                                        <ul class="shop-select-option-box-1">
                                            <li><input type="checkbox" name="free_shipping" id="option_1" checked="">
                                                <label for="option_1"><span></span>Free
                                                    Shipping</label></li>
                                            <li><input type="checkbox" name="flat_rate" id="option_2"> <label
                                                        for="option_2"><span></span>Flat Rate</label></li>
                                            <li><input type="checkbox" name="local_pickup" id="option_3">
                                                <label for="option_3"><span></span>Local Pickup</label></li>
                                        </ul>
                                        <div class="inner-text">
                                            <p>Shipping options will be updated during checkout</p>
                                        </div>
                                        <h4>Calculate Shipping</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="total">Total</h4>
                                    </td>
                                    <td class="subtotal">$2500.00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 wow fadeInUp  animated"
                     style="visibility: visible; animation-name: fadeInUp;">
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
                </div>
            </div>
        </div>
    </section>
@endsection