<h1>All Brands</h1>

<ul>
    @foreach($brands as $brand)
        <a href="/brands/{{$brand->id}}"><img src="{{Vite::asset('public/storage/src/' . $brand->image)}}" alt="{{$brand->name}}" style="height:150px; width:auto;"/></a>
    @endforeach
</ul>

