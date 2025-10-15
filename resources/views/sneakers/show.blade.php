<h1>{{ $sneaker->name}}</h1>
<p>{{ $sneaker->color }}</p>

<a href="{{route('sneakers.edit', $sneaker->id)}}">Edit this</a>
