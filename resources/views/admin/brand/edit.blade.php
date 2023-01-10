@extends('admin.layouts.layouts')

@section('content_admin')
    <div class="mt-5 m-lg-5">
        редактируем {{$brand->title}}
    </div>

    <input type="text">

    <div class="flex-row  mt-3 m-lg-5">
        <a class="btn btn-info" href="{{route('admin.brand.update', $brand->id)}} "> Обновить</a>
        <a class="btn btn-info" href="{{ route('admin.brand.show', $brand->id) }} "> Назад</a>
    </div>
@endsection