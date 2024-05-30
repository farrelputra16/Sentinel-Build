<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pekerja;

class IndexController extends Controller
{
    public function index()
    {
        $worker = Pekerja::all();
        return view('index', compact('worker'));
    }

    public function show(Pekerja $worker)
    {
        return view('show', compact('worker'));
    }
}