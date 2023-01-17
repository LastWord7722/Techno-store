@extends('admin.layouts.layouts')


@section('content_admin')
    всё продукты

    <div class="m-lg-5">
        <a class="btn btn-info" href={{route('admin.product.create')}}> Cоздать</a>
    </div>

    <div class=" mt-5 ml-5 row col-md-12 flex-column">
    @foreach($products as $product)
        <a href="{{route('admin.product.show',$product->id)}}">{{$product->id .') '. $product->name}}</a>
    @endforeach
    </div>
@endsection