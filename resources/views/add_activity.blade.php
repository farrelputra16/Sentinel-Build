@extends('app')


@section('title', 'Create Activity')
@section('NavTitle', 'Add Activity')

@section('content')
<div class="container">
    <h2>Add Activity</h2>

    <form action="{{ route('workhour.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Activity Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="start_time">Start Time</label>
            <input type="time" name="start_time" id="start_time" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="end_time">End Time</label>
            <input type="time" name="end_time" id="end_time" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Activity</button>
    </form>
</div>
@endsection