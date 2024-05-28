<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SIBFormController extends Controller
{
    public function index()
    {
        return view('sib-form');
    }

    public function submit(Request $request)
    {
        // Validasi dan proses data yang diterima dari form
        $validatedData = $request->validate([
            'nama_activities' => 'required|string|max:255',
            'nama_mandor' => 'required|string|max:255',
            'deskripsi_pekerjaan' => 'required|string',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i',
        ]);

        // Lakukan sesuatu dengan data yang valid, misalnya simpan ke database

        return back()->with('success', 'Form submitted successfully!');
    }
}
