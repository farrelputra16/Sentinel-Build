<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pekerja;

class AdminloginController extends Controller
{
    // Menampilkan form login admin
    public function showLoginAdminForm()
    {
        return view('index');
    }


    // Menangani login admin
    public function loginAdmin(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6',
        ]);

        // Logika autentikasi admin
        // Misalnya, jika autentikasi berhasil:
        if ($request->name == 'admin' && $request->password == 'password') {
            return redirect()->route('admin.index');
        }

        // Jika autentikasi gagal
        return back()->withErrors(['login' => 'ID atau password salah']);
    }
    public function index()
    {
        $workers = Pekerja::all();
        return view('index', compact('workers'));
    }

}
