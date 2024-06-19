@extends('app')

@section('title', 'Authorization')
@section('NavTitle', 'Authorization')

@section('content')
<style>
        
        
        .container {
            margin: 20px;
            flex-grow: 1;
        }
        .sib-list {
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
            <button class="btn btn-primary ml-3" onclick="window.location='{{ route('sib.create') }}'">Add New</button>
        </div>
        <div class="sib-list">
            @foreach($sibs as $sib)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Nomor Document : {{ $sib['document_number'] }} <br>
                            No Revisi: {{ $sib['revision_number'] }}
                        </h5>
                        <p class="card-text">
                            Tanggal: {{ $sib['date'] }} <br>
                            Penanggung Jawab: {{ $sib['responsible_person'] }} <br>
                            Perusahaan: {{ $sib['company'] }}
                        </p>
                        <p class="card-text">
                            Tanggal Efektif: {{ $sib['effective_date'] }}<br>
                            Type: <span style="color: {{ $activity['type'] == 'Hot Work Permit' ? 'red' : 'blue' }}">{{ $activity['type'] }}</span> <br>
                            No: {{ $sib['number'] }}
                        </p>
                        <a href="#" class="btn btn-outline-secondary"><i class="fas fa-edit"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endsection
