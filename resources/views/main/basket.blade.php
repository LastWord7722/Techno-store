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
                                @if($order->products)

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
                                            <td>{{$product->price}} USD</td>
                                            <td class="qty">
                                                <div class="qtySelector text-center">
                                                    <form action="{{route('minusProduct', $product->id)}}"
                                                          method="post"> @csrf
                                                        <button type="submit">
                                                            <span class="decreaseQty"><i
                                                                        class="flaticon-minus"></i> </span>
                                                        </button>
                                                    </form>

                                                    <input type="number" class="qtyValue"
                                                           value="{{$product->pivot->quantity}}">

                                                    <form action="{{route('addCard',$product->id)}}"
                                                          method="post"> @csrf
                                                        <button type="submit">
                                                            <span class="increaseQty"> <i
                                                                        class="flaticon-plus"></i> </span>
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
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cart-check-out mt-30">
                <h3>Оформить: </h3>
                <ul class="cart-check-out-list">
                    @foreach($order->products as $product)
                        <li>
                            <div class="left">
                                <p><span>Наиминование:</span>{{$product->name}}</p>
                                <p><span>Количество товара:</span>{{$product->pivot->quantity}}</p>
                                <p><span>Цена за единицу:</span> {{$product->price}}</p>
                            </div>
                            <div class="right">
                                <p><span>К оплате </span> {{$product->pivot->quantity * $product->price}}</p>
                            </div>
                        </li>
                    @endforeach

                    <li>
                        <div class="left">
                            <p>Доставка :</p>
                        </div>
                        <div class="right">
                            <p> Бесплатная </p>
                        </div>
                    </li>
                    <li>
                        <div class="left">
                            <p>Итого к оплате :</p>
                        </div>
                        <div class="right">
                            {{--знаю как сделать красиво на vue а вот на blade - нет)--}}
                            @php
                                use App\Models\Oreder;$orderId = session('orderId');
                                $order = Oreder::find($orderId);
                                $totalPrice = 0;

                                foreach ($order->products as $product){
                                $priceProduct = $product->pivot->quantity * $product->price;
                                $totalPrice += $priceProduct;
                                }
                            @endphp
                            <p class="text-success"> {{$totalPrice}} </p>
                        </div>
                    </li>
                    <form action="{{route('basketProcessPayPal')}}">
                        @csrf
                        <button type="submit" class="btn btn-success"> Оплатить</button>
                    </form>
                </ul>
            </div>
        </div>
    </section>
@endsection