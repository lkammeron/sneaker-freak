<h1>All Sneakers</h1>

<a href="{{route('sneakers.create')}}"><h3>Add new sneaker</h3></a>
<a href="{{route('brands.index')}}"><h3>All brands</h3></a>

<ul>
    @foreach($sneakers as $sneaker)
        <a href="/sneakers/{{$sneaker->id}}"><li>{{ $sneaker->name}}</li></a>
    @endforeach
</ul>

