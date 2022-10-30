<?php

namespace App\Http\Controllers;

use App\Models\kp2;
use App\Models\BukaTutup;
use Illuminate\Http\Request;

class Kp2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (BukaTutup::first()->kp2 == 0) {
            return view('dashboard.form-tutup', [
                'title' => 'Daftar KP2',
            ]);
        }
        return view('dashboard.daftarkp2', [
            'mahasiswa1' => auth()->user()->kelompok->mahasiswa,
            'mahasiswa2' => auth()->user()->kelompok->mahasiswa2,
            'info_mhs' =>  auth()->user()->kelompok->kp1,
            'datakp2' => auth()->user()->kelompok->kp2,
            'title' => 'Daftar KP2',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kp2  $kp2
     * @return \Illuminate\Http\Response
     */
    public function show(kp2 $kp2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kp2  $kp2
     * @return \Illuminate\Http\Response
     */
    public function edit(kp2 $kp2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kp2  $kp2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kp2 $kp2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kp2  $kp2
     * @return \Illuminate\Http\Response
     */
    public function destroy(kp2 $kp2)
    {
        //
    }
}
