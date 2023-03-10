@extends('layouts.layouts')
@section('Content')

    {{--Начало карточек товара --}}

    <section class="products-grid pt-60 pb-60 mt-5">
        <div>
            <h3 class="text-center"> Всё продукты от бренда {{$brands->title}}
            </h3>
        </div>


        <div class="row mt-4 text-center m-lg-4">
            @foreach($brands->get_product as $product)
                <div class="card mt-4 m-lg-1 border" style="width: 18rem;">
                    <img class="card-img-top" src="{{url('storage/' . $product->image)}}" alt="нема">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Бренд :{{$product->brand->title}}</li>
                        <li class="list-group-item">Категория :{{$product->category->title}}</li>
                        <li class="list-group-item">{{$product->price}} $</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{route('main.show',$product->id)}}" class="btn btn-primary">Подробнее</a>
                        <a href="#" class="btn btn-primary">В корзину</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{--конец карточек товара--}}
@endsection