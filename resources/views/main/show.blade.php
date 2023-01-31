@extends('layouts.layouts')
@section('Content')
    <section class="products-grid pt-60 pb-60 mt-5 row">

        <div class="col-md-5 g-lg-5 ">
            <img class="card-img-top" src="{{url('storage/' . $product->image)}}" alt="нема" style="width: 18rem; margin-left: 100px;">
        </div>

        <div class="col-md-7">
            <ul class="list-group list-group-flush col-5 text-center">
                <li class="list-group-item">Бренд :{{$product->brand->title}}</li>
                <li class="list-group-item">Категория :{{$product->category->title}}</li>
                <li class="list-group-item">{{$product->price}} $</li>
                    ОПИСАНИЕ
                <li class="list-group-item"> Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.

                </li>
            </ul>
        </div>
        <div class="col-3 d-flex flex-row">
            <form action="{{route('addCard',$product->id)}}" method="post">
                @csrf @method('POST')
                <button type="submit" class="btn btn-outline-dark "> <i class="fa-solid fa-basket-shopping"> </i></button>
            </form>

        <a href="{{route('main.index')}}" class="btn-primary mt-5 btn btn-primary">Назад</a>
        </div>
        {{--секция комментов--}}

        <div>
            
        </div>
    </section>
@endsection