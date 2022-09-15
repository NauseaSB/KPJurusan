<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        return view('dashboard.index', compact('mahasiswa'));
    }
}
