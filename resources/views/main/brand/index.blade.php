@extends('layouts.layouts')

@section('Content')

    <section class="products-grid pt-60 pb-60 mt-5">

        <div class="text-dark text-center">
            <h3>Всё бренды </h3>
        </div>

    <div class="d-flex">
    @foreach($brands as $brand)
        <div>
        <a href="{{route('main.show.brand',$brand->id)}}"> {{$brand->title}} </a>
        </div>
    @endforeach
    </div>
    </section>

@endsection