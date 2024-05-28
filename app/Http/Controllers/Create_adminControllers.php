<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Create_adminController extends Controller
{
    public function createAdmin()
    {
        return view('accounts.create_admin');
    }

    public function storeAdmin(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Buat akun admin baru
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 'admin'; // Asumsikan Anda memiliki kolom 'role' untuk membedakan antara admin dan pekerja
        $user->save();

        return redirect()->route('accounts.index')->with('success', 'Admin account created successfully.');
    }
}
