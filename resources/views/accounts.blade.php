@extends('app')

@section('title', 'Create Activity')
@section('NavTitle', 'Accounts')

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

    .form-group input, .form-group select {
        width: 65%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .form-group-photo {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 20px;
    }

    .form-group-photo img {
        width: 192px;
        height: 256px;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    .form-group-photo input {
        display: none;
    }

    .form-group-photo label {
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border-radius: 4px;
        cursor: pointer;
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

    .btn-danger {
        background-color: #dc3545;
        color: #fff;
    }
</style>

<div class="container">
    <div class="form-section">
        <h2>Add Worker</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{ route('workers.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="first_name">Worker Name</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="personnel_id">Personnel ID</label>
                <input type="text" id="personnel_id" name="personnel_id" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="birthday">Birthday</label>
                <input type="date" id="birthday" name="birthday" required>
            </div>
            <div class="form-group">
                <label for="hired">Hired Date</label>
                <input type="date" id="hired" name="hired" required>
            </div>
            <div class="form-group">
                <label for="mobile_phone">Mobile Phone</label>
                <input type="text" id="mobile_phone" name="mobile_phone" required>
            </div>
            <div class="form-group">
                <label for="privilege">Privilege</label>
                <select id="privilege" name="privilege" required>
                    <option value="admin">Admin</option>
                    <option value="user">Worker</option>
                </select>
            </div>
            <div class="form-group-photo">
                <img src="{{ asset('photos/default.png') }}" id="photo-preview" alt="Photo Preview">
                <input type="file" id="photo" name="photo" required>
                <label for="photo">Add Photo</label>
            </div>
            <div class="form-buttons">
                <button type="reset" class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-primary">Save & Continue</button>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('photo').addEventListener('change', function(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('photo-preview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    });
</script>
@endsection
