@extends('admin.layouts.layouts')

@section('content_admin')

    <form method="post" action="{{route('admin.category.update', $category->id)}}">
        @csrf
        @method('PATCH')
        <div class="col-md-5 mt-0 m-lg-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Редактируем {{$category->title}}</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название бренда</label>
                        <input type="text" name="title" class="form-control" value="{{$category->title}}" placeholder="Введите название бренда">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer flex-row ">
            <button type="submit" class="btn btn-primary">Обновить</button>
            <a class="btn btn-info m-lg-2" href="{{ route('admin.category.show', $category->id) }} "> Назад</a>
        </div>
    </form>

@endsection