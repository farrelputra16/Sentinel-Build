@extends('app_pekerja')

@section('title', 'Permission')
@section('NavTitle', 'Permission')

@section('content')
    <style>
        .container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
        }

        .form-section {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-section h2 {
            margin-bottom: 20px;
        }

        .form-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .form-group label {
            width: 30%;
            font-weight: bold;
            margin-right: 10px;
        }

        .form-group input,
        .form-group select {
            width: 65%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-buttons {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .form-buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        .alert-success {
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 4px;
        }
    </style>

    <div class="container">
        <div class="form-section">
            <h2>Perizinan</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('permission.submit') }}" method="POST">
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
                <div class="form-buttons">
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
