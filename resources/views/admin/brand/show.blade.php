@extends('admin.layouts.layouts')

@section('content_admin')

    <div class=" mt-5 ml-5 col-md-12">
        {{$brand->id .')'. $brand->title}}
    </div>

    <div class="flex-row  mt-3 m-lg-5">
        <a class="btn btn-info" href="{{route('admin.brand.edit', $brand->id)}} "> Редактировать </a>
        <a class="btn btn-info" href="{{ route('admin.brand.index') }} "> Назад</a>
    </div>
@endsection