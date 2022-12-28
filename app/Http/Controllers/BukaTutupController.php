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

    public function indexPeriode()
    {
        $periode = BukaTutup::first();
        return view('dashboard.koordinator.ubah-periode', [
            'periode' => $periode,
            'title' => 'Ubah Periode',
        ]);
    }

    public function lockKP1(Request $request)
    {
        BukaTutup::first()->update([
            'kp1' => $request['kp1'],
            'kp2' => $request['kp2']
        ]);
        return redirect()->back()->with('success', 'Status Form KP1 Telah Diubah');
    }

    public function lockKP2(Request $request)
    {
        BukaTutup::first()->update([
            'kp2' => $request['kp2'],
            'kp1' => $request['kp1']
        ]);
        return redirect()->back()->with('success', 'Status Form KP2 Telah Diubah');
    }

    public function lockSeminar(Request $request)
    {
        BukaTutup::first()->update([
            'seminar' => $request['seminar'],
        ]);
        return redirect()->back()->with('success', 'Status Form Seminar Telah Diubah');
    }

    public function lockPeriode(Request $request)
    {
        BukaTutup::first()->update([
            'periode' => $request['periode'],
        ]);
        return redirect()->back()->with('success', 'Periode KP Telah Diubah');
    }
}
