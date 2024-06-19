<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class IndexController extends Controller
{
    public function index()
    {
        // Paginate the workers
        $workers = Worker::paginate(10);
        
        // Pass the paginated workers to the view
        return view('index', compact('workers'));
    }

    public function show(Worker $worker)
    {
        return view('index', compact('workers'));
    }
}