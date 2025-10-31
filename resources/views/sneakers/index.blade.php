<a href="{{route('dashboard')}}">Dashboard</a>

<!-- Zoek functie bouwen -->
<form action="{{ route('sneakers.index') }}" method="GET" class="mb-4 flex gap-2">
    <input
        type="text"
        name="search"
        placeholder="Zoek sneakers..."
        value="{{ request('search') }}"
        class="border rounded p-2"
    >

    <select name="brand" class="border rounded p-2">
        <option value="">Alle merken</option>
        @foreach ($brands as $brand)
            <option
                value="{{ $brand->id }}"
                {{ request('brand') == $brand->id ? 'selected' : '' }}
            >
                {{ $brand->name }}
            </option>
        @endforeach
    </select>

    <button type="submit" class="bg-blue-500 text-white rounded px-4 py-2">
        Zoeken
    </button>
</form>
<!-- EndZoekFunctieBouwen -->

@if($sneakers->isEmpty())
    <p>Geen sneakers gevonden die overeenkomen met je zoekopdracht.</p>
@else
    <div class="grid grid-cols-3 gap-4">
        @foreach ($sneakers as $sneaker)
            <div class="border rounded p-4">
                <img src="{{ asset('storage/' . $sneaker->image) }}" alt="{{ $sneaker->name }}" class="w-full h-48 object-cover mb-2">
                <h3 class="font-bold">{{ $sneaker->name }}</h3>
                <p class="text-gray-600">{{ $sneaker->color }}</p>
            </div>
        @endforeach
    </div>
@endif
