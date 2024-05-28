@extends('app')

@section('title', 'Permission')
@section('NavTitle', 'Permission')

@section('content')

<div class="container mt-1  ">
    <h2>Perizinan</h2>
        @if(session('success'))
            <div class="alert alert-success ">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('permission.submit') }}" method="POST" class="w-25">
            @csrf
            <div class="form-group">
                <label for="time">Jam</label>
                <select class="form-control" id="time" name="time" required>
                    <option value="07:00 - 12:00">07:00 - 12:00</option>
                    <option value="12:00 - 17:00">12:00 - 17:00</option>
                </select>
            </div>
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="name">Nama Pekerja</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Keterangan</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
    </form>
</div>
@endsection
