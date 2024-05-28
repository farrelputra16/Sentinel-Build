<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function showForm()
    {
        return view('permission');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'time' => 'required',
            'id' => 'required',
            'name' => 'required',
            'description' => 'nullable',
        ]);

        // Lakukan sesuatu dengan data, seperti menyimpan ke database

        return redirect()->route('permission.form')->with('success', 'Izin berhasil diajukan!');
    }
}
