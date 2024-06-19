@extends('app')

@section('title', 'Activity')
@section('NavTitle', 'Dashboard')

@section('content')
<div class="d-flex">
    <div class="main-content flex-grow-1">
        <div class="container mt-3">
            <div class="table-wrapper">
                <div class="d-flex justify-content-between mb-3">
                    <input type="text" class="form-control w-25" placeholder="Cari Nama Karyawan">
                    <button class="btn btn-primary">Add New Employee</button>
                </div>
                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Karyawan</th>
                            <th>Hired</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($workers as $worker)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $worker->worker_name }}</td>
                            <td>{{ $worker->id_worker }}</td>
                            <td>{{ $worker->hired_date }}</td>
                            <td>{{ $worker->email }}</td>
                            <td class="action-icons">
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <form action="#" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-between align-items-center">
                    <div>{{ $workers->links() }}</div>
                    <div>
                        <select class="form-control">
                            <option value="10">10/Page</option>
                            <option value="20">20/Page</option>
                            <option value="50">50/Page</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
<<<<<<< HEAD
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
=======
    body {
        font-family: Arial, sans-serif;
    }
    .main-content {
        padding: 20px;
    }
    .table-wrapper {
        background: #fff;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        border-radius: 8px;
    }
    .table th, .table td {
        vertical-align: middle;
    }
    .action-icons a {
        margin-right: 10px;
    }
</style>
>>>>>>> 27471b97b515ce42a8c2f883cd88c74339680780
@endsection
