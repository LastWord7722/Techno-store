@extends('admin.layouts.layouts')

@section('content_admin')

    <form method="post" action="{{route('admin.product.store')}}" enctype="multipart/form-data">
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
                        <label for="'exampleFromConrolSelect1">Выберите бренд</label>
                        <select class="form-control" id="brand_id" name="category_id">
                            <!--не забываем дать имя, чтоб передать в функцию store -->
                            @foreach($brands as $category )

                                <option value="{{$category->id}}"
                                        {{ $category->id == old('category_id') ? 'selected' : '' }} >
                                    <!--выше, происходит условия, для выбора в случае не заполнения полей, с выбором ид, делать в откр теги -->
                                    {{$category->id}} ) {{$category->title_category}}</option>
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
                                        {{$category->id}} ) {{$category->title_category}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Cоздать</button>
                </div>
    </form>

@endsection