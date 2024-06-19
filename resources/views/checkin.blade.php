@extends('app_pekerja')

@section('title', 'Checkin')

@section('content')
<div class="container mt-5">
    <h2>Check-in</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('checkin.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_aktifitas">Nama Aktifitas</label>
            <input type="text" class="form-control" id="nama_aktifitas" name="nama_aktifitas" required>
        </div>
        <div class="form-group">
            <label for="jam_mulai">Jam Mulai</label>
            <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" required>
        </div>
        <div class="form-group">
            <label for="jam_berakhir">Jam Berakhir</label>
            <input type="time" class="form-control" id="jam_berakhir" name="jam_berakhir" required>
        </div>
        <button type="reset" class="btn btn-secondary">
            <i class="fa fa-times-circle"></i> Clear
        </button>
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-check-circle"></i> Submit
        </button>
    </form>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endpush
