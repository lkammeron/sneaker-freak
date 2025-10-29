<table>
    <a href="{{route('dashboard')}}">Dashboard</a>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Color</th>
        <th>Status</th>
        <th>User</th>
        <th>Brands</th>
        <th>Created</th>
        <th>Updated</th>
    </tr>
    @foreach($sneakers as $sneaker)
        <tr>
            <td>{{$sneaker->id}}</td>
            <td>{{$sneaker->name}}</td>
            <td>{{$sneaker->color}}</td>
            <td>{{'Status'}}</td>
            <td>{{$sneaker->users_id}}</td>
            <td>{{$sneaker->brands_id}}</td>
            <td>{{$sneaker->Created}}</td>
            <td>{{$sneaker->Updated}}</td>
            <td><a href="{{route('admin-dashboard.edit', $sneaker->id)}}">Edit</a></td>
            <td>
                <form action="{{ route('sneakers.destroy', $sneaker->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete: {{$sneaker->name}}');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
