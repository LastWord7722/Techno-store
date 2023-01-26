@extends('layouts.layouts')

@section('Content')

    <section class="products-grid pt-60 pb-60 mt-5">

        <div class="text-dark text-center">
            <h3>Всё категории </h3>
        </div>

        <div class="d-flex">
            @foreach($categories as $category)
                <div>
                    <a href="{{route('main.show.category',$category->id)}}"> {{$category->title}} </a>
                </div>
            @endforeach
        </div>
    </section>

@endsection