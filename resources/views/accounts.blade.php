@extends('app')


@section('title', 'Create Activity')
@section('NavTitle', 'Accounts')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Add Worker
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('workers.create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" id="first_name" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" id="last_name" name="last_name" required>
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
                            <label for="card_number">Card Number</label>
                            <input type="text" id="card_number" name="card_number" required>
                        </div>
                        <div class="form-group">
                            <label for="mobile_phone">Mobile Phone</label>
                            <input type="text" id="mobile_phone" name="mobile_phone" required>
                        </div>
                        <div class="form-group">
                            <label for="department">Department</label>
                            <input type="text" id="department" name="department" required>
                        </div>
                        <div class="form-group">
                            <label for="privilege">Privilege</label>
                            <select id="privilege" name="privilege" required>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                        <div class="form-group-photo">
                            <img src="{{ asset('photos/default.png') }}" id="photo-preview" alt="Photo Preview">
                            <input type="file" id="photo" name="photo" required>
                            <label for="photo">Add Photo</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save & Continue</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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