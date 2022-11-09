<?php

namespace App\Http\Controllers;

use App\Models\kp1;
use App\Models\kp2;
use App\Models\BukaTutup;
use App\Models\Kelompok;
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
            'datakp1' => auth()->user()->kelompok->kp1,
            'datakp2' => auth()->user()->kelompok->kp2,
            'mhs1' => auth()->user()->kelompok->mahasiswa,
            'mhs2' => auth()->user()->kelompok->mahasiswa2,
            'materi' => auth()->user()->kelompok->materi,
            'kelompok' => auth()->user()->kelompok,
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
        $data = $request->all();
        $kp2 = new kp2;
        // $status1 = new Status1;

        //Mahasiswa 1
        $kp2->nim1 = $data['nim1'];
        $kp2->nama1 = $data['nama1'];
        $kp2->doswal1 = $data['doswal1'];
        $kp2->peminatan1 = $data['peminatan1'];
        $kp2->ipk1 = $data['ipk1'];
        $kp2->t_sks1 = $data['t_sks1'];
        $kp2->jum_d1 = $data['jum_d1'];
        $kp2->mk_d1 = $data['mk_d1'];
        $kp2->jum_e1 = $data['jum_e1'];
        $kp2->mk_e1 = $data['mk_e1'];
        if ($request->file('khs1')) {
            $kp2->khs1 = $request->file('khs1')->store('data-mahasiswa');
        }
        if ($request->file('krs1')) {
            $kp2->krs1 = $request->file('krs1')->store('data-mahasiswa');
        }

        //Mahasiswa 2
        $kp2->nim2 = $data['nim2'];
        $kp2->nama2 = $data['nama2'];
        $kp2->doswal2 = $data['doswal2'];
        $kp2->peminatan2 = $data['peminatan2'];
        $kp2->ipk2 = $data['ipk2'];
        $kp2->t_sks2 = $data['t_sks2'];
        $kp2->jum_d2 = $data['jum_d2'];
        $kp2->mk_d2 = $data['mk_d2'];
        $kp2->jum_e2 = $data['jum_e2'];
        $kp2->mk_e2 = $data['mk_e2'];
        if ($request->file('khs2')) {
            $kp2->khs2 = $request->file('khs2')->store('data-mahasiswa');
        }
        if ($request->file('krs2')) {
            $kp2->krs2 = $request->file('krs2')->store('data-mahasiswa');
        }

        //materi
        $kp2->judul_kp = $data['judul_kp'];
        $kp2->tempat_kp_lapangan = $data['tempat_kp_lapangan'];
        $kp2->alamat = $data['alamat'];
        $kp2->telp_tempat_kp = $data['telp_tempat_kp'];
        $kp2->nama_pembimbing_lapangan = $data['nama_pembimbing_lapangan'];
        $kp2->nama_penanggung_jawab_lapangan = $data['nama_penanggung_jawab_lapangan'];
        $kp2->dosbim = $data['dosbim'];

        //bimbingan akademik
        $kp2->jum_b_akademik = $data['jum_b_akademik'];
        if ($request->file('k_b_akademik')) {
            $kp2->k_b_akademik = $request->file('k_b_akademik')->store('data-mahasiswa');
        }

        //bimbingan lapangan
        $kp2->jum_b_lapangan = $data['jum_b_lapangan'];
        if ($request->file('k_b_lapangan')) {
            $kp2->k_b_lapangan = $request->file('k_b_lapangan')->store('data-mahasiswa');
        }

        //kp2
        if ($request->file('surat_kelayakan')) {
            $kp2->surat_kelayakan = $request->file('surat_kelayakan')->store('data-mahasiswa');
        }
        if ($request->file('form_daftar')) {
            $kp2->form_daftar = $request->file('form_daftar')->store('data-mahasiswa');
        }

        $kp2->save();

        $current_kp_id = $kp2->id;
        // $current_status_id = $status2->id;

        Kelompok::where('id', auth()->user()->kelompok->id)->update([
            'kp2_id' => $current_kp_id,
            // 's_kp1' => $current_status_id,
        ]);

        return redirect('/dashboard')->with('success', 'Pendaftaran KP2 Berhasil');
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
