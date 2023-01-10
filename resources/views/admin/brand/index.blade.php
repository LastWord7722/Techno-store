@extends('admin.layouts.layouts')

@section('content_admin')

    <div class="ml-5">

    @foreach($brends as $brend)
            <a href="{{route('admin.brand.show', $brend->id)}}">  <p>{{$brend->id .') '. $brend->title}}</p> </a>
    @endforeach


    </div>

    <div class="m-lg-5">
        <a class="btn btn-info" href={{route('admin.brand.create')}}> Cоздать</a>
    </div>


@endsection