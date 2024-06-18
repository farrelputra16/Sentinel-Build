@extends('app')

@section('title', 'Authorization')
@section('NavTitle', 'Authorization')

@section('content')
<style>
        
        
        .container {
            margin: 20px;
            flex-grow: 1;
        }
        .activities-list {
            margin-top: 20px;
        }
        .card {
            margin-bottom: 10px;
        }
        .card-title {
            font-size: 1rem;
        }
        .card-text {
            font-size: 0.875rem;
        }
    </style>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <input type="text" class="form-control" placeholder="Cari Nomor Document">
            <button class="btn btn-primary ml-3">Add New</button>
        </div>
        <div class="activities-list">
            @foreach($sibs as $sib)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Nomor Document : {{ $activity['document_number'] }} <br>
                            No Revisi: {{ $activity['revision_number'] }}
                        </h5>
                        <p class="card-text">
                            Tanggal: {{ $activity['date'] }} <br>
                            Penanggung Jawab: {{ $activity['responsible_person'] }} <br>
                            Perusahaan: {{ $activity['company'] }}
                        </p>
                        <p class="card-text">
                            Tanggal Efektif: {{ $activity['effective_date'] }}<br>
                            Type: <span style="color: {{ $activity['type'] == 'Hot Work Permit' ? 'red' : 'blue' }}">{{ $activity['type'] }}</span> <br>
                            No: {{ $activity['number'] }}
                        </p>
                        <a href="#" class="btn btn-outline-secondary"><i class="fas fa-edit"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endsection
