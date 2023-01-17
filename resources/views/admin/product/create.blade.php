@extends('admin.layouts.layouts')

@section('content_admin')

    <form method="post" action="{{route('admin.product.store')}}" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="col-md-5 mt-0 m-lg-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Добавление карточки товара</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Наиминование</label>
                        <input type="text" name="name" class="form-control" placeholder="Введите название бренда">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Цена</label>
                        <input type="number" name="price" class="form-control" placeholder="Цена за товар">
                    </div>

                    <div class="form-group">
                        <label for="'exampleFromConrolSelect1">Выберите бренд</label>
                        <select class="form-control" id="brand" name="brand_id">
                            <!--не забываем дать имя, чтоб передать в функцию store -->
                            @foreach($brands as $brand )

                                <option value="{{$brand->id}}">
                                    {{$brand->id}} ) {{$brand->title}}</option>
                            @endforeach
                        </select>

                        <div class="form-group">
                            <label for="'exampleFromConrolSelect1">Выберите категорию</label>
                            <select class="form-control" id="category" name="category_id">
                                <!--не забываем дать имя, чтоб передать в функцию store -->
                                @foreach($categories as $category )

                                    <option value="{{$category->id}}">
                                        {{$category->id}} ) {{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <label> Выберите изображение товара</label>
                    <div class="card-body img-fluid">
                        <input type="file" name="image">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Cоздать</button>
                </div>
    </form>

@endsection