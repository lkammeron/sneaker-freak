<h1>Edit: {{$user->name}}</h1>
<form method="post" action="{{route('admin-dashboard.update', $user->id)}}">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}"/>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="{{ $user->email }}"/>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Update</button>
</form>
