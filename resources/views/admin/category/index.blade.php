@extends('admin.layouts.layouts')


@section('content_admin')
    всё категори11
<div class=" mt-5 ml-5 row col-md-12">
    @foreach($categories as $category)
        <p>{{$category->id .') '. $category->title}}</p>
    @endforeach
</div>
@endsection