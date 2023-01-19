@extends('main.layouts')
@section('Content')
    {{--Начало карточек товара --}}
    <section class="products-grid pt-60 pb-60 mt-5">
    <div class="section-header text-center wow fadeInUp  animated" style="visibility: visible; animation-name: fadeInUp;">
        <h2 class="wow  fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"> Inspire Products </h2>
        <p class="wow  fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;"> Fish fruitful were together don't
            bring replenish dominion so evening. </p>
    </div>
        <div class="row mt-4 text-center">
     @foreach($products as $product)
            <div class="card mt-3 m-lg-3" style="width: 18rem;">
                <img class="card-img-top" src="{{url('storage/' . $product->image)}}" alt="нема">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Бренд :{{$product->brand->title}}</li>
                    <li class="list-group-item">Категория :{{$product->category->title}}</li>
                    <li class="list-group-item">Прайс грн США:{{$product->price}}</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Подробнее</a>
                    <a href="#" class="card-link">В корзину</a>
                </div>
            </div>
        @endforeach
        </div>
    </section>

    {{--конец карточек товара--}}
@endsection