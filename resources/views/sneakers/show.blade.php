@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<h1>{{ $sneaker->name}}</h1>
<p>{{ $sneaker->color }}</p>

<a href="{{route('sneakers.edit', $sneaker->id)}}">Edit</a>

<form action="{{ route('sneakers.destroy', $sneaker->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je deze sneaker wilt verwijderen?');">
    @csrf
    @method('DELETE')
    <button type="submit">Verwijderen</button>
</form>

