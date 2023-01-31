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
        @auth()
            <section class="comment-section">
                <h2 class="section-title mb-5" data-aos="fade-up">Leave a Comment</h2>
                <form action="{{route('comment.main.store',$product)}}" method="post">
                    @csrf @method('post')
                    <div class="row">
                        <div class="form-group col-12" data-aos="fade-up">
                            <label for="comment" class="sr-only">Comment</label>
                            <textarea name="message" id="massage" class="form-control" placeholder="Comment"
                                      rows="10">Comment</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12" data-aos="fade-up">
                            <input type="submit" value="Send Message" class="btn btn-warning">
                        </div>
                    </div>
                </form>
            </section>
        @endauth
        @guest()
            <div class="text-center mb-5">
                <h5>Для того чтоб оставить коментарий, зайдите в аккаунт </h5>
                <a href="{{route('login')}}" class="h4 btn btn-success text-white "> Войти </a>
            </div>
        @endguest
        <div class="widget-user-header bg-secondary   text-white text-center mb-4 h-7">
            <h4>All comments: {{$product->comment_user->count()}} </h4>
            <p></p>
        </div>

        @foreach($product->comment_user as  $comment)
            <div class="card card-primary card-outline border border-dark mt-2">
                <div class="card-header">
                    <h6 class="card-title m-0 text-dark "> {{$comment->name}}</h6>
                    <p class="blog-post-category"> {{$comment -> DataAsCarbon->diffForHumans()}} </p>
                    <div class="d-flex justify-content-end">
                        @auth()
                            @if($comment->user_id == auth()->user()->id)
                                <div class="d-flex justify-content-end">
                                    <form action="{{route('comment.main.destroy',$comment->id)}}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <button type="submit" class="text-white btn btn-danger"> Delete</button>
                                    </form>
                                </div>
                            @endif
                        @endauth()
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="card-title">{{$comment->message}}</h6>
                </div>
            </div>
        @endforeach
    </section>
@endsection