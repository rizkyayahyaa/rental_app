@extends('layout.mainlayout_admin')
@section('content')
<div class="main-wrapper">
    <h2>Admin List</h2>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <a href="{{ route('admin.admin.create') }}">Create Admin</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($admins as $admin)
                <tr>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>
                        <a href="{{ route('admin.admin.edit', $admin->id) }}">Edit</a>
                        <form action="{{ route('admin.admin.destroy', $admin->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
