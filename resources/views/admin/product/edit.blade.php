@extends('admin.layouts.layouts')

@section('content_admin')

    <form method="post" action="{{route('admin.product.update', $product->id)}}" enctype="multipart/form-data" class="d-flex flex-row ">
        @csrf
        @method('PATCH')
        <div class="col-md-5 mt-0 m-lg-5">
            <div class="card card-primary">
                <div class="card-header ">
                    <h3 class="card-title">Обновление товара</h3>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Название товара</label>
                        <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="Введите название бренда">
                    </div>

                    <div class="form-group">
                        <label for="'exampleFromConrolSelect1">Выберите бренд</label>
                        <select class="form-control" id="brand_id" name="brand_id">
                            <!--не забываем дать имя, чтоб передать в функцию store -->
                            @foreach($brands as $brand )

                                <option value="{{$brand->id}}"
                                        {{ $brand->id == old('brand_id') ? 'selected' : '' }} >
                                    <!--выше, происходит условия, для выбора в случае не заполнения полей, с выбором ид, делать в откр теги -->
                                    {{$brand->id}} ) {{$brand->title}}</option>
                            @endforeach
                        </select>

                        <div class="form-group">
                            <label for="'exampleFromConrolSelect1">Выберите категорию</label>
                            <select class="form-control" id="'category" name="category_id">
                                <!--не забываем дать имя, чтоб передать в функцию store -->
                                @foreach($categories as $category )

                                    <option value="{{$category->id}}"
                                            {{ $category->id == old('category_id') ? 'selected' : '' }} >
                                        <!--выше, происходит условия, для выбора в случае не заполнения полей, с выбором ид, делать в откр теги -->
                                        {{$category->id}} ) {{$category->title}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </div>
            </div>
        </div>
            <div class="col-3 mt-2 " >
                <img class="img text-center" style="width: 340px; height: 440px;"
                     src="{{url('storage/' . $product->image )}}">
                <input type="file" name="image" class=" btn btn-primary btn-block mt-3">
            </div>
    </form>

@endsection