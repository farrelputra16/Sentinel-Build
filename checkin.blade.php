@extends('app_pekerja')

@section('title', 'Checkin')
@section('NavTitle', 'Absen')
@section('content')
    <div class="container mt-1">
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
            <button type="reset" class="btn btn-secondary">Clear</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @endsection
