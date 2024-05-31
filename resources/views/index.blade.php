@extends('app')

@section('title', 'Pekerja')

@section('content')

<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn {
            padding: 5px 10px;
            margin-right: 5px;
            text-decoration: none;
            border-radius: 3px;
        }

        .btn-warning {
            background-color: #007bff;
            color: #fff;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }
    </style>

<h2>Pekerja</h2>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nama</th>
            <th>ID</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($worker as $pekerja)
            <tr>
                <td>{{ $pekerja->nama }}</td>
                <td>{{ $pekerja->id }}</td>
                <td>
                    <a href="#" class="btn btn-danger">Hapus</a>
                    <a href="#" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
