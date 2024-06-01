<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SIB;

class SIBController extends Controller
{
    public function create()
    {
        return view('sib.create');
    }

    public function store(Request $request)
    {
        $sib = new SIB($request->all());
        $sib->save();

        return redirect()->route('sib.create')->with('success', 'SIB berhasil ditambahkan.');
    }
}