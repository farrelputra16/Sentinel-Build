@extends('app')

@section('title', 'Permission')
@section('NavTitle', 'Permission')

@section('content')
    <div class="container">
        <h2 class="mb-1">SIB Form</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('sib-form.submit') }}" method="POST" class="w-50">
            @csrf
            <div class="mb-3">
                <label for="nama_activities" class="form-label">Nama Activities</label>
                <input type="text" class="form-control" id="nama_activities" name="nama_activities" required>
            </div>
            <div class="mb-3">
                <label for="nama_mandor" class="form-label">Nama Mandor</label>
                <input type="text" class="form-control" id="nama_mandor" name="nama_mandor" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_pekerjaan" class="form-label">Deskripsi Pekerjaan</label>
                <textarea class="form-control" id="deskripsi_pekerjaan" name="deskripsi_pekerjaan" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="jam_mulai" class="form-label">Jam Mulai</label>
                <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" required>
            </div>
            <div class="mb-3">
                <label for="jam_selesai" class="form-label">Jam Selesai</label>
                <input type="time" class="form-control" id="jam_selesai" name="jam_selesai" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
            <button type="button" class="btn btn-secondary" onclick="window.print()">Print</button>
        </form>
    </div>

    @endsection
