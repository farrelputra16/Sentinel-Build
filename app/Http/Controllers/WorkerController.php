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

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'worker_name' => 'required',
            'email' => 'required|email',
            'personnel_id' => 'required',
            'gender' => 'required',
            'birthday' => 'required|date',
            'hired' => 'required|date',
            'mobile_phone' => 'required',
            'privilege' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // Maksimum 5 MB
        ]);

        // Simpan data pekerja
        $worker = new Worker();
        $worker->worker_name = $request->worker_name;
        $worker->email = $request->email;
        $worker->personnel_id = $request->personnel_id;
        $worker->gender = $request->gender;
        $worker->birthday = $request->birthday;
        $worker->hired = $request->hired;
        $worker->mobile_phone = $request->mobile_phone;
        $worker->privilege = $request->privilege;

        if ($request->hasFile('photo')) {
            $fileName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('photos'), $fileName);
            $worker->photo = $fileName;
        }

        $worker->save();

        return redirect()->route('workers.create')->with('success', 'Worker added successfully.');
    }
}