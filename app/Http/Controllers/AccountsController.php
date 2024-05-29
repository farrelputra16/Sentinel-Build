<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function index()
    {
        return view('accounts');
    }

    public function createAdmin()
    {
        return view('create_admin');
    }
    public function createPekerja()
    {
        return view('create_pekerja');
    }
}
