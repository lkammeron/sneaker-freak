<h1>Create a Sneaker Post</h1>
<form method="post" action="{{route('sneakers.store')}}">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}"/>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="color">Color</label>
        <input type="text" id="color" name="color" value="{{ old('color') }}"/>
        @error('color')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="image">image</label>
        <input type="text" id="image" name="image" value="{{ old('image') }}"/>
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Submit</button>
</form>
