@extends('layout.mainlayout_admin')

@section('content')
<div class="page-wrapper page-settings">
    <div class="content">
        @component('admin.components.pageheader')
            @slot('title') Add New Car @endslot
        @endcomponent
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="model">Model</label>
                        <input type="text" name="model" id="model" class="form-control" value="{{ old('model') }}">
                        @error('model')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input type="number" name="year" id="year" class="form-control" value="{{ old('year') }}">
                        @error('year')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}" step="0.01">
                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" name="photo" id="photo" class="form-control">
                        @error('photo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('photo').addEventListener('change', function(event) {
            var reader = new FileReader();
            var preview = document.createElement('img');
            preview.id = 'photo-preview';
            preview.style.width = '100px';
            preview.style.marginTop = '10px';

            reader.onload = function() {
                preview.src = reader.result;
            };

            if (event.target.files[0]) {
                reader.readAsDataURL(event.target.files[0]);
                document.querySelector('form').appendChild(preview);
            } else {
                if (document.getElementById('photo-preview')) {
                    document.getElementById('photo-preview').remove();
                }
            }
        });
    });

</script>
