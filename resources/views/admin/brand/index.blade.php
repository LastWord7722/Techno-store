@extends('admin.layouts.layouts')

@section('content_admin')
    всё бренды
    <div class=" mt-5 ml-5 row col-md-12">
    @foreach($brends as $brend)
        <p>{{$brend->id .') '. $brend->title}}</p>
    @endforeach
    </div>
@endsection