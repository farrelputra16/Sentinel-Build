@extends('app')

@section('title', 'Activity')
@section('NavTitle', 'Workhour')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <button class="btn btn-primary" onclick="window.location='{{ route('workhour.create') }}'">+ Add Activities</button>
    <div id="current-time" class="btn btn-primary"></div>
</div>

<div class="activities-list">
    @foreach($activities as $activity)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $activity->title }}</h5>
                <p class="card-text">{{ $activity->start_time }} - {{ $activity->end_time }}</p>
            </div>
        </div>
    @endforeach
</div>

<script>
    function updateTime() {
        const now = new Date();
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');
        document.getElementById('current-time').textContent = `${hours}:${minutes}:${seconds}`;
    }
    setInterval(updateTime, 1000);
    updateTime();
</script>
@endsection