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
        $user = auth()->user()->kelompok;
        // dd(auth()->user()->kelompok->mahasiswa2);
        return view('dashboard.index', [
            'kelompok' => $user,
            'title' => 'Dashboard',
        ]);
    }
}
