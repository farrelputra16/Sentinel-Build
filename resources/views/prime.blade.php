<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Calculator</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1>Prime Number Calculator</h1>
        <form action="/calculate" method="POST">
            @csrf
            <div class="form-group">
                <label for="start_number">Bilangan Awal</label>
                <input type="number" class="form-control" id="start_number" name="start_number" required>
            </div>
            <div class="form-group">
                <label for="end_number">Bilangan Akhir</label>
                <input type="number" class="form-control" id="end_number" name="end_number" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @if(isset($primes))
            <h2>Bilangan Prima antara {{ $start_number }} dan {{ $end_number }}:</h2>
            <ul>
                @foreach($primes as $prime)
                    <li>{{ $prime }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>
