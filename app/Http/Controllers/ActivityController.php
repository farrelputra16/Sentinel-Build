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
            'title' => 'required',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
        ]);

        Activity::create($request->all());
    }
}
