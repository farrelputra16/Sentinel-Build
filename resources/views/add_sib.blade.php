@extends('app')

@section('title', 'Authorization')
@section('NavTitle', 'Authorization')

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

        .form-group input, .form-group select, .form-group textarea {
            width: 65%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-group-textarea {
            display: flex;
            flex-direction: column;
        }

        .form-check {
            display: inline-block;
            margin-right: 10px;
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

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }
    </style>

    <div class="container">
        <div class="form-section">
            <h2>Detail Dokumen</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form method="POST" action="{{ route('sib.store') }}">
                @csrf
                <div class="form-group">
                    <label for="tipe_dokumen">Tipe Dokumen</label>
                    <select id="tipe_dokumen" name="tipe_dokumen" required>
                        <option value="">Pilih Tipe Dokumen</option>
                        <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" required>
                </div>
                <div class="form-group">
                    <label for="penanggung_jawab">Penanggung Jawab</label>
                    <input type="text" id="penanggung_jawab" name="penanggung_jawab" required>
                </div>
                <div class="form-group">
                    <label for="no">No</label>
                    <input type="text" id="no" name="no" required>
                </div>
                <div class="form-group">
                    <label for="perusahaan">Perusahaan</label>
                    <input type="text" id="perusahaan" name="perusahaan" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_orang">Jumlah Orang yang Bekerja</label>
                    <input type="number" id="jumlah_orang" name="jumlah_orang" required>
                </div>
                <div class="form-group">
                    <label for="area_kerja">Area Kerja</label>
                    <input type="text" id="area_kerja" name="area_kerja" required>
                </div>
                <div class="form-group form-group-textarea">
                    <label for="deskripsi_pekerjaan">Deskripsi Pekerjaan</label>
                    <textarea id="deskripsi_pekerjaan" name="deskripsi_pekerjaan" required></textarea>
                </div>
                <div class="form-group">
                    <label>Peralatan yang Digunakan</label>
                    <div id="peralatan-list">
                        <div class="form-group">
                            <input type="text" name="peralatan[]" placeholder="Nama Alat">
                            <input type="number" name="jumlah_peralatan[]" placeholder="Jumlah">
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="addEquipment()">Tambah Alat</button>
                </div>
                <div class="form-group">
                    <label>Pengendalian Bahaya</label><br>
                    <div class="form-check">
                        <input type="checkbox" id="apd" name="pengendalian_bahaya[]" value="APD">
                        <label for="apd">APD</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="life_jacket" name="pengendalian_bahaya[]" value="Life Jacket">
                        <label for="life_jacket">Helem</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="full_body_harness" name="pengendalian_bahaya[]" value="Full Body Harness">
                        <label for="full_body_harness">Sepatu</label>
                    </div>
                    <!-- Tambahkan checkbox lainnya sesuai kebutuhan -->
                </div>
                <div class="form-buttons">
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save & Continue</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function addEquipment() {
            const peralatanList = document.getElementById('peralatan-list');
            const newEquipment = document.createElement('div');
            newEquipment.classList.add('form-group');
            newEquipment.innerHTML = `
                <input type="text" name="peralatan[]" placeholder="Nama Alat">
                <input type="number" name="jumlah_peralatan[]" placeholder="Jumlah">
            `;
            peralatanList.appendChild(newEquipment);
        }
    </script>
@endsection
