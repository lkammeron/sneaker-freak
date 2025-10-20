<h1>All Brands</h1>

<ul>
    @foreach($brands as $brand)
        <a href="/sneakers/{{$brand->id}}"><li>{{$brand->name}}</li></a>
    @endforeach
</ul>

