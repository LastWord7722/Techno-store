@extends('main.layouts')
@section('Content')
    <section class="products-grid pt-60 pb-60 mt-5 row">
        <div class=" col-md-4">
            <img class="card-img-top" src="{{url('storage/' . $product->image)}}" alt="нема" style="width: 18rem;">

        </div>

        <div class="col-8">
            <ul class="list-group list-group-flush col-5 text-center">
                <li class="list-group-item">Бренд :{{$product->brand->title}}</li>
                <li class="list-group-item">Категория :{{$product->category->title}}</li>
                <li class="list-group-item">{{$product->price}} $</li>
            </ul>
        </div>
        <button class=" mt-5 btn btn-danger"> В корзину</button>
    </section>
@endsection