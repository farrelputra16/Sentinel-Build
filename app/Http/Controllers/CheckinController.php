<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkin; // Jika menggunakan model Checkin

class CheckinController extends Controller
{
    public function showForm()
    {
        return view('checkin');
    }

    public function submitForm(Request $request)
    {
        // Validasi dan simpan data
        $request->validate([
            'nama_aktifitas' => 'required|string|max:255',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_berakhir' => 'required|date_format:H:i|after:jam_mulai',
        ]);

        Checkin::create([
            'nama_aktifitas' => $request->nama_aktifitas,
            'jam_mulai' => $request->jam_mulai,
            'jam_berakhir' => $request->jam_berakhir,
        ]);

        return redirect()->back()->with('success', 'Check-in telah berhasil!');
    }
}
