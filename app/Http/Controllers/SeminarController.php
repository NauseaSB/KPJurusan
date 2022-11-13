<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use App\Http\Requests\StoreSeminarRequest;
use App\Http\Requests\UpdateSeminarRequest;
use App\Models\BukaTutup;
use App\Models\Dosen;
use App\Models\Kelompok;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (BukaTutup::first()->seminar == 0) {
            return view('dashboard.form-tutup', [
                'title' => 'Daftar Seminar',
            ]);
        }
        return view('dashboard.daftarseminar', [
            'dataseminar' => auth()->user()->kelompok->seminar,
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
     * @param  \App\Http\Requests\StoreSeminarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSeminarRequest $request)
    {
        $data = $request->all();
        $seminar = new Seminar;

        if ($request->file('khs1')) {
            $seminar->khs1 = $request->file('khs1')->store('data-mahasiswa');
        }
        if ($request->file('khs2')) {
            $seminar->khs2 = $request->file('khs2')->store('data-mahasiswa');
        }
        if ($request->file('f_demo_aplikasi')) {
            $seminar->f_demo_aplikasi = $request->file('f_demo_aplikasi')->store('data-mahasiswa');
        }
        if ($request->file('f_surat_kelayakan')) {
            $seminar->f_surat_kelayakan = $request->file('f_surat_kelayakan')->store('data-mahasiswa');
        }
        if ($request->file('f_bimbingan_akademik')) {
            $seminar->f_bimbingan_akademik = $request->file('f_bimbingan_akademik')->store('data-mahasiswa');
        }
        if ($request->file('draft_laporan_kp')) {
            $seminar->draft_laporan_kp = $request->file('draft_laporan_kp')->store('data-mahasiswa');
        }
        //ddd($data);
        $seminar->save();

        $current_seminar_id = $seminar->id;

        Kelompok::where('id', auth()->user()->kelompok->id)->update([
            'seminar_id' => $current_seminar_id,
        ]);

        return redirect('/dashboard')->with('success', 'Pendaftaran Seminar KP Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function show(Seminar $seminar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function edit(Seminar $seminar)
    {
        return view('dashboard.editseminar', [
            'dataseminar' => auth()->user()->kelompok->seminar,
            'title' => 'Edit Data Seminar KP',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSeminarRequest  $request
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeminarRequest $request, Seminar $seminar)
    {
        $data = $request->all();
        $current_seminar_id = auth()->user()->kelompok->seminar->id;
        if ($request->file('khs1')) {
            $khs1 = $request->file('khs1')->store('data-mahasiswa');
            Seminar::where('id', $current_seminar_id)->update([
                'khs1' => $khs1,
            ]);
        }
        if ($request->file('khs2')) {
            $khs2 = $request->file('khs2')->store('data-mahasiswa');
            Seminar::where('id', $current_seminar_id)->update([
                'khs2' => $khs2,
            ]);
        }
        if ($request->file('f_demo_aplikasi')) {
            $f_demo_aplikasi = $request->file('f_demo_aplikasi')->store('data-mahasiswa');
            Seminar::where('id', $current_seminar_id)->update([
                'f_demo_aplikasi' => $f_demo_aplikasi,
            ]);
        }
        if ($request->file('f_surat_kelayakan')) {
            $f_surat_kelayakan = $request->file('f_surat_kelayakan')->store('data-mahasiswa');
            Seminar::where('id', $current_seminar_id)->update([
                'f_surat_kelayakan' => $f_surat_kelayakan,
            ]);
        }
        if ($request->file('f_bimbingan_akademik')) {
            $f_bimbingan_akademik = $request->file('f_bimbingan_akademik')->store('data-mahasiswa');
            Seminar::where('id', $current_seminar_id)->update([
                'f_bimbingan_akademik' => $f_bimbingan_akademik,
            ]);
        }
        if ($request->file('draft_laporan_kp')) {
            $draft_laporan_kp = $request->file('draft_laporan_kp')->store('data-mahasiswa');
            Seminar::where('id', $current_seminar_id)->update([
                'draft_laporan_kp' => $draft_laporan_kp,
            ]);
        }

        return redirect('/dashboard')->with('success', 'Ubah Data Seminar Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seminar $seminar)
    {
        //
    }
}
