<?php

namespace App\Http\Controllers;

use App\Models\BukaTutup;
use App\Models\Kelompok;
use Illuminate\Http\Request;
use illuminate\support\Facades\Hash;

use App\Models\User;
use App\Models\Mahasiswa;

class RegisterController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        $periode = BukaTutup::first();
        return view('register.index', compact('mahasiswa'));
    }

    public function store(Request $request)
    {
        $periode = BukaTutup::first();
        $ganjil = "GANJIL";
        $genap = "GENAP";
        $validatedData =  $request->validate([
            'username' => 'required|min:3|max:255|unique:users',
            'password' => 'required|min:6|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = User::create($validatedData);
        $current_id = $user->id;

        if ($periode->periode == 1) {
            Kelompok::create([
                'user_id' => $current_id,
                'Periode' => $genap
            ]);
        } else {
            Kelompok::create([
                'user_id' => $current_id,
                'Periode' => $ganjil
            ]);
        }


        return redirect('/login')->with('success', 'Registrasi Berhasil');
    }
}
