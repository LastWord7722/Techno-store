@extends('admin.layouts.layouts')

@section('content_admin')
    <form action="{{route('admin.brand.store')}}">
        <input type="text" name="title">
    </form>
    <button class="btn-outline-info"> Cоздать </button>
@endsection