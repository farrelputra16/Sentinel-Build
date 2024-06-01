<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class AccountsController extends Controller
{
    public function create()
    {
        return view('accounts');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'personnel_id' => 'required',
            'gender' => 'required',
            'birthday' => 'required|date',
            'hired' => 'required|date',
            'card_number' => 'required',
            'mobile_phone' => 'required',
            'department' => 'required',
            'privilege' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // Maksimum 5 MB
        ]);

        // Simpan data pekerja
        $worker = new Worker();
        $worker->first_name = $request->first_name;
        $worker->last_name = $request->last_name;
        $worker->email = $request->email;
        $worker->personnel_id = $request->personnel_id;
        $worker->gender = $request->gender;
        $worker->birthday = $request->birthday;
        $worker->hired = $request->hired;
        $worker->card_number = $request->card_number;
        $worker->mobile_phone = $request->mobile_phone;
        $worker->department = $request->department;
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
