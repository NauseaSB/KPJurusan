<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class DaftarKPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.daftarkp');
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
        $validatedData =  $request->validate([
            'nim1' => 'required',
            'angkatan1' => 'required',
            'nama1' => 'required',
            'telp1' => 'required',
            'doswal1' => 'required',
            'peminatan1' => 'required',
            'ipk1' => 'required',
            't_sks1' => 'required',
            'semester1' => 'required',
            't_akd1' => 'required',
            'ket_mahasiswa1' => 'required',
        ]);
        $validatedData2 =  $request->validate([
            'nim2' => 'required',
            'angkatan2' => 'required',
            'nama2' => 'required',
            'telp2' => 'required',
            'doswal2' => 'required',
            'peminatan2' => 'required',
            'ipk2' => 'required',
            't_sks2' => 'required',
            'semester2' => 'required',
            't_akd2' => 'required',
            'ket_mahasiswa2' => 'required',
        ]);

        mahasiswa::create($validatedData);
        mahasiswa::create($validatedData2);

        return redirect('/dashboard')->with('success', 'Pendaftaran KP Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        //
    }
}
