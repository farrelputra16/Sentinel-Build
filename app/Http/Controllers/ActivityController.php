<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    //
    public function index()
    {
        $activities = Activity::all();
        return view('workhour', compact('activities'));
    }

    public function show(Activity $activities)
    {
        return view('show', compact('activities'));
    }

    public function create()
    {
        return view('add_activity');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_activites' => 'required',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_berakhir' => 'required|date_format:H:i',
        ]);

        Activity::create($request->all());

        return redirect()->route('workhour.index');
    }
}
