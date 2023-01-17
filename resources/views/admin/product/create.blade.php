@extends('admin.layouts.layouts')

@section('content_admin')

    <form method="post" action="{{route('admin.product.store')}}">
        @csrf
        @method('POST')
        <div class="col-md-5 mt-0 m-lg-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Добавление товара</h3>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Название товара</label>
                        <input type="text" name="name" class="form-control" placeholder="Введите название бренда">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Выберите бренд продукта</label>
                        <input type="" name="сategory_id" class="form-control" placeholder="Введите название бренда">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Название товара</label>
                        <input type="text" name="name" class="form-control" placeholder="Введите название бренда">
                    </div>

                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cоздать</button>
        </div>
    </form>

@endsection