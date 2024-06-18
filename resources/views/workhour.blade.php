@extends('app')

@section('title', 'Activity')
@section('NavTitle', 'Workhour')

@section('content')

<style>
        .check-in-time {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }
        .time-slot {
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 5px;
            font-size: 1.5rem;
        }
        
        .card-title {
            font-size: 1.25rem;
        }
        .time-text {
            display: inline-block;
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 5px;
            font-size: 1.25rem;
            margin-right: 50px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <button class="btn btn-primary" onclick="window.location='{{ route('workhour.create') }}'">+ Add Activities</button>
        <div id="current-time" class="btn btn-primary"></div>
    </div>
    <div class="activities-list">
        @foreach($activities as $activity)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $activity->nama_activites }}</h5>
                    <p class="card-text">
                        <span class="time-text">{{ $activity->jam_mulai }}</span>
                        <span class="time-text">{{ $activity->jam_berakhir }}</span>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
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