<h1>Alle Sneakers</h1>

<a href="{{route('sneakers.create')}}"><h3>Add new sneaker</h3></a>

<ul>
    @foreach($sneakers as $sneaker)
        <a href="/sneakers/{{$sneaker->id}}"><li>{{ $sneaker->name}}</li></a>
    @endforeach
</ul>

