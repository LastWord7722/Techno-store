@extends('admin.layouts.layouts')


@section('content_admin')

    <div class="m-lg-5">
        <a class="btn btn-info" href={{route('admin.category.create')}}> Cоздать</a>
    </div>

    всё категори
<div class=" mt-5 ml-5 col-md-12">
    @foreach($categories as $category)
        <a href="{{route('admin.category.show', $category->id)}}">{{$category->id .') '. $category->title}}</a>
    @endforeach
</div>
@endsection