
@extends('layouts.layouts')
<!-- Background image -->
    <div class=" text-center bg-image " style="
          background-image: url(https://img.freepik.com/psd-gratuit/modele-maquette-ecran-pour-telephone-mobile-premium_53876-65745.jpg?w=2000);
          height: 810px;">

        <div class="mask " style="background-color: rgba(0, 0, 0, 0.6); ">
            <div class="d-flex justify-content-center align-items-center h-100 ">
                <div class="text-white">
                    <h1 class="mb-3 text-white">Heading</h1>
                    <h4 class="mb-3 text-white">Subheading</h4>
                    <a class="btn btn-outline-light btn-lg" href="#!" role="button">Call to action</a>
                </div>
            </div>
        </div>

    </div>
@section('Content')
    <div>
        <h3 class="text-center"> Топ продажи
        Будет потом
        </h3>
    </div>

    {{--Начало карточек товара --}}
    <section class="products-grid pt-60 pb-60 mt-5">
        <div class="section-header text-center wow fadeInUp  animated" style="visibility: visible; animation-name: fadeInUp;">
            <h2 class="wow  fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"> Фешин телефоны </h2>
            <p class="wow  fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Фешин устройства и прочее, прочее</p>
        </div>
        <div class="row mt-4 text-center m-lg-4">
              @foreach($products as $product)
                <div class="card mt-4 m-lg-1 border" style="width: 18rem;">
                    <img class="card-img-top" src="{{url('storage/' . $product->image)}}" alt="нема">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Бренд :{{$product->brand->title}}</li>
                        <li class="list-group-item">Категория :{{$product->category->title}}</li>
                        <li class="list-group-item">{{$product->price}} $</li>
                    </ul>
                    <div class="card-body  d-flex flex-row">
                        <a href="{{route('main.show',$product->id)}}"> <p class="btn btn-outline-dark" style="margin-right: 7px;"> Просмотреть </p></a>

                        <form action="{{route('addCard',$product->id)}}" method="post">
                            @csrf @method('POST')
                            <button type="submit" class="btn btn-outline-dark "> <i class="fa-solid fa-basket-shopping"> </i></button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{--конец карточек товара--}}
@endsection