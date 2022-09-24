<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use App\Models\kelompok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user()->id;
        $kelompok = kelompok::all()->where('user_id', $user);
        $kelompok1 = $kelompok[$user - 1]->mahasiswa_id;
        $kelompok2 = $kelompok[$user - 1]->mahasiswa_id2;
        $mahasiswa = mahasiswa::all()->where('id', $kelompok1);
        $mahasiswa1 = mahasiswa::all()->where('id', $kelompok2);

        // dd($user);
        return view('dashboard.index', compact('user', 'mahasiswa', 'mahasiswa1', 'kelompok', 'kelompok1', 'kelompok2'));
    }
}
