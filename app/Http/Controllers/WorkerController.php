<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all(); // Mengambil semua data pekerja

        return view('index', compact('workers')); // Mengirimkan data pekerja ke tampilan
    }
}