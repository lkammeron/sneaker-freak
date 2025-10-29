<a href="{{route('dashboard')}}">Dashboard</a>

<!-- Zoek functie bouwen -->
<input type="text">
<select>
    @foreach($brands as $brand)
        <option>{{$brand->name}}</option>
    @endforeach
</select>
<button href="#">Zoeken</button>
<!-- EndZoekFunctieBouwen -->

<h1>All Sneakers</h1>
    @foreach($sneakers as $sneaker)
        <div class="-mb-px">
            <img src="{{Vite::asset('public/storage/src/' . $sneaker->image)}}" alt="{{$sneaker->name}}" style="height:150px; width:auto;">
            <h3>{{$sneaker->name}}</h3>
        </div>
    @endforeach
