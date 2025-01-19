@extends('layout.mainlayout_admin')

@section('content')
<div class="page-wrapper page-settings">
    <div class="content">
        @component('admin.components.pageheader')
            @slot('title') Edit Car @endslot
        @endcomponent
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $car->name }}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="model">Model</label>
                        <input type="text" name="model" id="model" class="form-control" value="{{ $car->model }}">
                        @error('model')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input type="number" name="year" id="year" class="form-control" value="{{ $car->year }}">
                        @error('year')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control" value="{{ $car->price }}" step="0.01">
                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" name="photo" id="photo" class="form-control">
                        @if($car->photo)
                            <img src="{{ asset('storage/' . $car->photo) }}" alt="{{ $car->name }}" width="100">
                        @endif
                        @error('photo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
