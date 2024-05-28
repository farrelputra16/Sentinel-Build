<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Create_pekerjaController extends Controller
{
    public function createPekerja()
    {
        return view('accounts.create_pekerja');
    }

    public function storePekerja(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'id_number' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan data pekerja dan upload gambar ke direktori
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        // Simpan data ke database (tambahkan logika penyimpanan data sesuai dengan model Anda)

        return redirect()->route('accounts.index')->with('success', 'Pekerja created successfully.');
    }
}
