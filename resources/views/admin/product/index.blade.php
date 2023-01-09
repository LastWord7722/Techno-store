@extends('admin.layouts.layouts')


@section('content_admin')
    всё продукты

    <div class=" mt-5 ml-5 row col-md-12 flex-column">
    @foreach($products as $product)
        <p>{{$product->id .') '. $product->name}}</p>
    @endforeach
    </div>
@endsection