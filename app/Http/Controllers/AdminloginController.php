<?php
// app/Http/Controllers/Auth/AdminLoginController.php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        // Validate the input
        $this->validate($request, [
            'name' => 'required',
            'id' => 'required',
        ]);

        // Authenticate the admin
        $admin = \App\Admin::where('name', $request->input('name'))
            ->where('id', $request->input('id'))
            ->first();

        if ($admin) {
            // Login the admin
            auth()->guard('admin')->login($admin);

            // Redirect to the admin dashboard
            return redirect()->route('admin.dashboard');
        } else {
            // Display an error message
            return back()->withErrors(['Invalid credentials']);
        }
    }
}