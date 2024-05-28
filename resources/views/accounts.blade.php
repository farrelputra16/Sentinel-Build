@extends('app')


@section('title', 'Create Activity')
@section('NavTitle', 'Accounts')

@section('content')
<div class="container mt-1" >
    <h2>Accounts</h2>
    <div class="card mt-2 p-3 w-50 ">
        <h4 class="card-title">Add New Account</h4>
        <div class="d-flex justify-content-around mt-3">
            <button class="btn btn-primary" onclick="window.location='{{ route('accounts.create.admin') }}'">Admin</button>
            <button class="btn btn-primary" onclick="window.location='{{ route('accounts.create.pekerja') }}'">Pekerja</button>
        </div>
    </div>
</div>
@endsection