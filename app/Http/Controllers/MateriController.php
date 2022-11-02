<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Kelompok;
use App\Models\Dosen;
use App\Models\BukaTutup;
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
        $dosen = Dosen::all();
        if (BukaTutup::first()->kp1 == 0) {
            return view('dashboard.form-tutup', [
                'title' => 'Daftar KP1',
            ]);
        }
        return view('dashboard.daftarmaterikp', [
            'materi' => auth()->user()->kelompok->materi,
            'dosens' => $dosen,
            'title' => 'Daftar Materi KP',
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

        $current_materi_id = $m->id;

        kelompok::where('id', auth()->user()->kelompok->id)->update([
            'materi_id' => $current_materi_id,
        ]);

        return redirect('/dashboard')->with('success', 'Pendaftaran materi KP Berhasil');
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
        $dosen = Dosen::all();
        return view('dashboard.editmateri', [
            'materi' => auth()->user()->kelompok->materi,
            'dosens' => $dosen,
            'title' => 'Edit Daftar Materi KP',
        ]);
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
        $data = $request->all();
        $current_materi_id = auth()->user()->kelompok->materi->id;

        // $judul = $data['judul'];
        // $tempat = $data['tempat'];
        // $divisi = $data['divisi'];
        // $alamat = $data['alamat'];
        // $telp = $data['telpkp'];
        // $pem_lapangan = $data['p_lapangan'];
        // $pen_lapangan = $data['penanggung_jawab'];
        // $status = $data['status_judul'];
        // $jenis = $data['jenis_kp'];
        // $p1 = $data['p_kp1'];
        // $p2 = $data['p_kp2'];

        materi::where('id', $current_materi_id)->update([
            'judul_kp' => $data['judul'],
            'tempat_kp_lapangan' => $data['tempat'],
            'divisi' => $data['divisi'],
            'alamat' => $data['alamat'],
            'telp_tempat_kp' => $data['telpkp'],
            'nama_pembimbing_lapangan' => $data['p_lapangan'],
            'nama_penanggung_jawab_lapangan' => $data['penanggung_jawab'],
            'status_judul' => $data['status_judul'],
            'jenis_kp' => $data['jenis_kp'],
            'ajuan_pembimbing1' => $data['p_kp1'],
            'ajuan_pembimbing2' => $data['p_kp2'],
        ]);

        return redirect('/dashboard')->with('success', 'Ubah Data Materi Berhasil');
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
