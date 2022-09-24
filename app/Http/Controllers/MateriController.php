<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Http\Requests\StoreMateriRequest;
use App\Http\Requests\UpdateMateriRequest;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.daftarmaterikp');
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
     * @param  \App\Http\Requests\StoreMateriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMateriRequest $request)
    {
        $data = $request->all();
        $m = new Materi;
        $m->judul_kp = $data['judul'];
        $m->tempat_kp_lapangan = $data['tempat'];
        $m->divisi = $data['divisi'];
        $m->alamat = $data['alamat'];
        $m->telp_tempat_kp = $data['telpkp'];
        $m->nama_pembimbing_lapangan = $data['p_lapangan'];
        $m->nama_penanggung_jawab_lapangan = $data['penanggung_jawab'];
        $m->status_judul = $data['status_judul'];
        $m->jenis_kp = $data['jenis_kp'];
        $m->ajuan_pembimbing1 = $data['p_kp1'];
        $m->ajuan_pembimbing2 = $data['p_kp2'];
        $m->save();

        return redirect('/dashboard')->with('success', 'Pendaftaran KP Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi $materi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMateriRequest  $request
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMateriRequest $request, Materi $materi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi)
    {
        //
    }
}
