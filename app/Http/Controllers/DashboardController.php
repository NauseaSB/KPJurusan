<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        // dd($mahasiswa->toArray());
        return view('dashboard.index', compact('mahasiswa'));
    }
}
