<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pekerja;

class IndexController extends Controller
{
    public function index(Pekerja $workers)
    {
        $workers = Pekerja::all();
        return view('index', compact('workers'));
    }

    public function show(Pekerja $worker)
    {
        return view('show', compact('workers'));
    }
}