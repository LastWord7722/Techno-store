@extends('admin.layouts.layouts')

@section('content_admin')

    <form method="post" action="{{route('admin.brand.store')}}">
        @csrf
        @method('POST')
        <div class="col-md-5 mt-0 m-lg-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Добавление бренда</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название бренда</label>
                        <input type="text" name="title" class="form-control" placeholder="Введите название бренда">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cоздать</button>
        </div>
    </form>

@endsection