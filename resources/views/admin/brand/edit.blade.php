@extends('admin.layouts.layouts')

@section('content_admin')

    <form method="post" action="{{route('admin.brand.update', $brand->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="d-flex flex-row">
            <div class="col-7 mt-0 m-lg-5 ">
                <div class="card card-primary ">
                    <div class="card-header">
                        <h3 class="card-title">Редактируем {{$brand->title}}</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название бренда</label>
                            <input type="text" name="title" class="form-control" value="{{$brand->title}}" placeholder="Введите название бренда">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3 mt-2 " >
                <img class="img" style="width: 16rem; height: 16rem;"
                     src="{{url ('storage/' . $brand->image ) }}">
                <input type="file" name="image" class=" btn btn-primary btn-block mt-3">
            </div>
        </div>

        <div class="card-footer flex-row ">
            <button type="submit" class="btn btn-primary">Обновить</button>
            <a class="btn btn-info m-lg-2" href="{{ route('admin.brand.show', $brand->id) }} "> Назад </a>
        </div>
    </form>

@endsection