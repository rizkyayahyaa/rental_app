@extends('layout.mainlayout_admin')
@section('content')
<div class="main-wrapper">
    <h2>Create Admin</h2>
    <form action="{{ route('admin.admin.store') }}" method="POST">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Create</button>
    </form>
</div>
@endsection
