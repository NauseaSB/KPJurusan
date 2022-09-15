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
        // $validatedData =  $request->validate([
        //     'nim1' => 'required',
        //     'angkatan1' => 'required',
        //     'nama1' => 'required',
        //     'telp1' => 'required',
        //     'doswal1' => 'required',
        //     'peminatan1' => 'required',
        //     'ipk1' => 'required',
        //     't_sks1' => 'required',
        //     'semester1' => 'required',
        //     't_akd1' => 'required',
        //     'ket_mahasiswa1' => 'required',
        // ]);
        // $validatedData2 =  $request->validate([
        //     'nim2' => 'required',
        //     'angkatan2' => 'required',
        //     'nama2' => 'required',
        //     'telp2' => 'required',
        //     'doswal2' => 'required',
        //     'peminatan2' => 'required',
        //     'ipk2' => 'required',
        //     't_sks2' => 'required',
        //     'semester2' => 'required',
        //     't_akd2' => 'required',
        //     'ket_mahasiswa2' => 'required',
        // ]);

        // mahasiswa::create($validatedData);
        // mahasiswa::create($validatedData2);

        $data = $request->all();
        $m1 = new Mahasiswa;
        $m1->nim = $data['nim1'];
        $m1->angkatan = $data['angkatan1'];
        $m1->nama = $data['nama1'];
        $m1->telp = $data['telp1'];
        $m1->doswal = $data['doswal1'];
        $m1->peminatan = $data['peminatan1'];
        $m1->ipk = $data['ipk1'];
        $m1->t_sks = $data['t_sks1'];
        $m1->semester = $data['semester1'];
        $m1->t_akd = $data['t_akd1'];
        $m1->ket_mahasiswa = $data['ket_mahasiswa1'];
        $m1->save();

        $m2 = new Mahasiswa;
        $m2->nim = $data['nim2'];
        $m2->angkatan = $data['angkatan2'];
        $m2->nama = $data['nama2'];
        $m2->telp = $data['telp2'];
        $m2->doswal = $data['doswal2'];
        $m2->peminatan = $data['peminatan2'];
        $m2->ipk = $data['ipk2'];
        $m2->t_sks = $data['t_sks2'];
        $m2->semester = $data['semester2'];
        $m2->t_akd = $data['t_akd2'];
        $m2->ket_mahasiswa = $data['ket_mahasiswa2'];
        $m2->save();

        // dd($data);

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
