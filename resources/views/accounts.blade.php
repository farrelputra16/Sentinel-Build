@extends('app')


@section('title', 'Create Activity')
@section('NavTitle', 'Accounts')

@section('content')
@extends('app')

@section('title', 'Create Pekerja Account')

@section('content')
<div class="container mt-1">
    <h2>Add New Pekerja</h2>
    <div class="card mt-2 p-4 w-50">
        <form action="{{ route('create_pekerja') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nama Pekerja</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="id_number">ID</label>
                <input type="text" class="form-control" id="id_number" name="id_number" required>
            </div>
            <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
            </div>
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-secondary" onclick="window.history.back();">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection