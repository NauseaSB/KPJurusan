<?php

namespace App\Http\Controllers;

use App\Models\BukaTutup;
use Illuminate\Http\Request;

class BukaTutupController extends Controller
{
    public function index()
    {
        $bukatutupform = BukaTutup::first();
        return view('dashboard.koordinator.buka-tutup-form',[
            'bukatutupform' => $bukatutupform
        ]);
    }
    public function lockKP1(Request $request)
    {
        BukaTutup::first()->update([
            'kp1' => $request['kp1']
        ]);
        return redirect()->back()->with('success', 'Pendaftaran KP1 telah dikunci!');
    }

    public function unlockKP1(Request $request)
    {
        BukaTutup::first()->update([
            'kp1' => $request['kp1']
        ]);
        return redirect()->back()->with('success', 'Pendaftaran KPi telah dibuka!');
    }

    public function lockKP2(Request $request)
    {
        BukaTutup::first()->update([
            'kp2' => $request['kp2']
        ]);
        return redirect()->back()->with('success', 'Pendaftaran KP2 telah dikunci!');
    }

    public function unlockKP2(Request $request)
    {
        BukaTutup::first()->update([
            'kp2' => $request['kp2']
        ]);
        return redirect()->back()->with('success', 'Pendaftaran KP2 telah dibuka!');
    }
}

