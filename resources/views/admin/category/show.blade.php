@extends('admin.layouts.layouts')

@section('content_admin')

    <div class=" mt-5 ml-5 col-md-12">
        {{$category->id .')'. $category->title}}
    </div>

    <div class="flex-row  mt-3 m-lg-5">
        <a class="btn btn-info" href="{{route('admin.category.edit', $category->id)}} "> Редактировать </a>
        <a class="btn btn-info" href="{{ route('admin.category.index') }} "> Назад</a>

        <form method="post" action="{{route('admin.category.destroy', $category->id)}}">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
    </div>
@endsection