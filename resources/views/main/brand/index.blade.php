
<div class="d-flex flex-row">
@foreach($brands as $brand)
    <div>
    <a href="{{route('main.filter.brand',$brand->id)}}"> {{$brand->title}} </a>
    </div>
@endforeach
</div>