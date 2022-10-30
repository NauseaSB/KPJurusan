<?php

namespace App\Http\Controllers;

use App\Models\BukaTutup;
use Illuminate\Http\Request;

class BukaTutupController extends Controller
{
    public function index()
    {
        $bukatutupform = BukaTutup::first();
        return view('dashboard.koordinator.buka-tutup-form', [
            'bukatutupform' => $bukatutupform,
            'title' => 'Buka Tutup Form',
        ]);
    }

    public function lockKP1(Request $request)
    {
        BukaTutup::first()->update([
            'kp1' => $request['kp1']
        ]);
        return redirect()->back()->with('success', 'Status Form KP1 Telah Diubah');
    }

    public function lockKP2(Request $request)
    {
        BukaTutup::first()->update([
            'kp2' => $request['kp2']
        ]);
        return redirect()->back()->with('success', 'Status Form KP2 Telah Diubah');
    }
}
