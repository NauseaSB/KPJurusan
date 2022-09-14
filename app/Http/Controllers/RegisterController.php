<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\support\Facades\Hash;

use App\Models\User;
use App\Models\Mahasiswa;

class RegisterController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('register.index', compact('mahasiswa'));
    }

    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'username' => 'required|min:3|max:255|unique:users',
            'password' => 'required|min:6|max:255'
        ]);

        $dataMahasiswa1 = $request->validate([]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registrasi Berhasil');
    }
}
