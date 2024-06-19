<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SIB;

class SIBController extends Controller
{
    public function index()
    {
        $sibs = SIB::all();
        return view('sib', compact('sibs'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $sibs = new SIB($request->all());
        $sibs->save();

        return redirect()->route('sib.create')->with('success', 'SIB berhasil ditambahkan.');
    }
}