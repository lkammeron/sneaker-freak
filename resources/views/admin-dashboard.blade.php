<table>
    <a href="{{route('dashboard')}}">Dashboard</a>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
        <th>Posts</th>
        <th>Created</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <button type="submit">change:status:</button>
            </td>
            <td>{{$user->sneakers_count}}</td>
            <td>{{$user->created_at}}</td>
            <td></td>
            <td><a href="{{route('admin-dashboard.edit', $user->id)}}">Edit</a></td>
            <td>
                <form action="{{ route('admin-dashboard.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete: {{$user->name}}');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
