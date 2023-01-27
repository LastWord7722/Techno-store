@extends('layouts.layouts')

@section('Content')

    <section class="products-grid pt-60 pb-60 mt-5">

        <div class="text-dark text-center">
            <h3>Всё категории </h3>
        </div>

        <div class="col-12 row text-center m-lg-5 ">
            @foreach($categories as $category)
                <div class="card mt-4 m-lg-1 border " style="width: 23rem;">
                    <a href="{{route('main.show.category',$category->id)}}">
                        <img class="card-img-top" src="{{url('storage/' . $category->image)}}" alt="нема"> </a>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$category->title}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item center">Количество товара:{{$category->product_count}}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </section>

@endsection