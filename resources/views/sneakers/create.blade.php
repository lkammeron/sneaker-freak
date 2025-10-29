<h1>Create a Sneaker Post</h1>
<form method="post" action="{{route('sneakers.store')}}" enctype="multipart/form-data">
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
        <label for="brands_id">Brand</label>
        <select name="brands_id" id="brands_id">
            @foreach($brands as $brand)
            <option value="{{$brand->id}}">{{$brand->name}}</option>
            @endforeach
        </select>
        @error('brands')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="image">Choose a sneaker image</label>
        <input type="file" id="image" name="image" value="{{ old('image') }}" accept="image/png, image/jpeg, image/webp"/>
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Submit</button>
</form>
