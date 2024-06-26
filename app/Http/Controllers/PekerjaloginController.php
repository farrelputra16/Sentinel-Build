<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class AdminloginController extends Controller
{
// Menampilkan form login pekerja
    public function showLoginPekerjaForm()
    {
        return view('login_pekerja');
    }

    // Menangani login pekerja
    public function loginPekerja(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'id' => 'required|string|max:255',
        ]);

        // Logika autentikasi pekerja
        // Misalnya, jika autentikasi berhasil:
        if ($request->name == 'pekerja' && $request->id == '12345') {
            return redirect()->route('login-coy');
        }

        // Jika autentikasi gagal
        return back()->withErrors(['login' => 'Nama atau ID salah']);
    }

    // Menampilkan halaman indeks
    public function index()
    {
        $workers = Pekerja::all();
        return view('index', compact('workers'));
    }
}