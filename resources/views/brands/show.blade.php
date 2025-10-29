@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<h1>{{ $brand->name}}</h1>
<p>{{ $brand-> description}}</p>

<img src="{{Vite::asset('public/storage/src/' . $brand->image)}}" alt="{{$brand->name}}" style="height:150px; width:auto;">




