<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pekerja</title>
</head>
<body>
    <h1>Tambah Pekerja</h1>

    <form action="{{ route('pekerjas.store') }}" method="POST">
        @csrf

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="id">ID:</label>
        <input type="text" name="id" id="id" required>

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('pekerjas.index') }}">Kembali</a>
</body>
</html>