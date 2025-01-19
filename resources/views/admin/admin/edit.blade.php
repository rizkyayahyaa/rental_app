@extends('layout.mainlayout_admin')
@section('content')
<div class="main-wrapper">
    <h2>Edit Admin</h2>
    <form action="{{ route('admin.admin.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ $admin->name }}" required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ $admin->email }}" required>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password">
            <small>Leave blank if you don't want to change the password</small>
        </div>
        <button type="submit">Update</button>
    </form>
</div>
@endsection
