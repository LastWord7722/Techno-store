@extends('admin.layouts.layouts')

@section('content_admin')
    <div class="card-body table-responsive mt-lg-5">
        <table  class="table table-hover text-nowrap ">
            <thead >
                <tr>
                    <th> Уникальный номер</th>
                    <th> Название бренда</th>
                    <th> Фото</th>
                </tr>
            </thead>

        <tbody>
            <tr>
                <td>#{{$brand->id}}</td>
                <td>{{$brand->title}}</td>
                <td> <img alt="Иконки бренда нет" src="{{url('storage/' . $brand->image)}}"> </td>
            </tr>
        </tbody>
        </table>
    </div>

    <div class="mt-3 " >
            <div class="d-flex flex-row">
                <a class="btn btn-info m-lg-1"  href="{{route('admin.brand.edit', $brand->id)}}"> Редактировать </a>
                <a class="btn btn-info m-lg-1" href="{{ route('admin.brand.index')}}"> Назад </a>
                <div class="m-lg-1" >
                    <form method="post" action="{{route('admin.brand.destroy', $brand->id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </div>
            </div>
    </div>
@endsection