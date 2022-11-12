<?php

namespace App\Http\Controllers;

use App\Models\kp1;
use App\Models\kp2;
use App\Models\BukaTutup;
use App\Models\Kelompok;
use App\Models\Status2;
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
        $status2 = new Status2;

        //Mahasiswa 1
        $kp2->nim1 = $data['nim1'];
        $kp2->nama1 = $data['nama1'];
        $kp2->doswal1 = $data['doswal1'];
        $kp2->peminatan1 = $data['peminatan1'];
        $kp2->ipk1 = $data['ipk1'];
        if ($data['ipk1'] < 2.80) {
            $status2->s_ipk1 = 'Tidak Memenuhi';
        } else {
            $status2->s_ipk1 = 'Memenuhi';
        }
        $kp2->t_sks1 = $data['t_sks1'];
        if ($data['t_sks1'] < 120) {
            $status2->s_sks1 = 'Tidak Memenuhi';
        } else {
            $status2->s_sks1 = 'Memenuhi';
        }
        $kp2->jum_d1 = $data['jum_d1'];
        if ($data['jum_d1'] > 3) {
            $status2->s_jum_d1 = 'Tidak Memenuhi';
        } else {
            $status2->s_jum_d1 = 'Memenuhi';
        }
        $kp2->mk_d1 = $data['mk_d1'];
        $kp2->jum_e1 = $data['jum_e1'];
        if ($data['jum_e1'] > 0) {
            $status2->s_jum_e1 = 'Tidak Memenuhi';
        } else {
            $status2->s_jum_e1 = 'Memenuhi';
        }
        $kp2->mk_e1 = $data['mk_e1'];
        $kp2->kontrak = $data['kontrak1'];
        if ($data['kontrak1'] == 'Sedang Kontrak') {
            $status2->s_kontrak1 = 'Memenuhi';
        } else {
            $status2->s_kontrak1 = 'Tidak Memenuhi';
        }
        if ($request->file('khs1')) {
            $kp2->khs1 = $request->file('khs1')->store('data-mahasiswa');
            $status2->s_khs1 = 'Memenuhi';
        } else {
            $status2->s_khs1 = 'Tidak Memenuhi';
        }
        if ($request->file('krs1')) {
            $kp2->krs1 = $request->file('krs1')->store('data-mahasiswa');
            $status2->s_krs1 = 'Memenuhi';
        } else {
            $status2->s_krs1 = 'Tidak Memenuhi';
        }

        //Mahasiswa 2
        $kp2->nim2 = $data['nim2'];
        $kp2->nama2 = $data['nama2'];
        $kp2->doswal2 = $data['doswal2'];
        $kp2->peminatan2 = $data['peminatan2'];
        $kp2->ipk2 = $data['ipk2'];
        if ($data['ipk2'] < 2.80) {
            $status2->s_ipk2 = 'Tidak Memenuhi';
        } else {
            $status2->s_ipk2 = 'Memenuhi';
        }
        $kp2->t_sks2 = $data['t_sks2'];
        if ($data['t_sks2'] < 120) {
            $status2->s_sks2 = 'Tidak Memenuhi';
        } else {
            $status2->s_sks2 = 'Memenuhi';
        }
        $kp2->jum_d2 = $data['jum_d2'];
        $kp2->jum_d1 = $data['jum_d1'];
        if ($data['jum_d2'] > 3) {
            $status2->s_jum_d2 = 'Tidak Memenuhi';
        } else {
            $status2->s_jum_d2 = 'Memenuhi';
        }
        $kp2->mk_d2 = $data['mk_d2'];
        $kp2->jum_e2 = $data['jum_e2'];
        if ($data['jum_e2'] > 0) {
            $status2->s_jum_e2 = 'Tidak Memenuhi';
        } else {
            $status2->s_jum_e2 = 'Memenuhi';
        }
        $kp2->mk_e2 = $data['mk_e2'];
        $kp2->kontrak2 = $data['kontrak2'];
        if ($data['kontrak2'] == 'Sedang Kontrak') {
            $status2->s_kontrak2 = 'Memenuhi';
        } else {
            $status2->s_kontrak2 = 'Tidak Memenuhi';
        }
        if ($request->file('khs2')) {
            $kp2->khs2 = $request->file('khs2')->store('data-mahasiswa');
            $status2->s_khs2 = 'Memenuhi';
        } else {
            $status2->s_khs2 = 'Tidak Memenuhi';
        }
        if ($request->file('krs2')) {
            $kp2->krs2 = $request->file('krs2')->store('data-mahasiswa');
            $status2->s_krs2 = 'Memenuhi';
        } else {
            $status2->s_krs2 = 'Tidak Memenuhi';
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
        if ($data['jum_b_akademik'] < 6) {
            $status2->s_b_akademik = 'Tidak Memenuhi';
        } else {
            $status2->s_b_akademik = 'Memenuhi';
        }
        if ($request->file('k_b_akademik')) {
            $kp2->k_b_akademik = $request->file('k_b_akademik')->store('data-mahasiswa');
            $status2->s_k_akademik = 'Memenuhi';
        } else {
            $status2->s_k_akademik = 'Tidak Memenuhi';
        }

        //bimbingan lapangan
        $kp2->jum_b_lapangan = $data['jum_b_lapangan'];
        if ($data['jum_b_lapangan'] < 8) {
            $status2->s_b_lapangan = 'Tidak Memenuhi';
        } else {
            $status2->s_b_lapangan = 'Memenuhi';
        }
        if ($request->file('k_b_lapangan')) {
            $kp2->k_b_lapangan = $request->file('k_b_lapangan')->store('data-mahasiswa');
            $status2->s_k_lapangan = 'Memenuhi';
        } else {
            $status2->s_k_lapangan = 'Tidak Memenuhi';
        }

        //kp2
        if ($request->file('surat_kelayakan')) {
            $kp2->surat_kelayakan = $request->file('surat_kelayakan')->store('data-mahasiswa');
            $status2->s_surat_kelayakan = 'Memenuhi';
        } else {
            $status2->s_surat_kelayakan = 'Tidak Memenuhi';
        }
        if ($request->file('form_daftar')) {
            $kp2->form_daftar = $request->file('form_daftar')->store('data-mahasiswa');
            $status2->s_form_daftar = 'Memenuhi';
        } else {
            $status2->s_form_daftar = 'Tidak Memenuhi';
        }

        $kp2->save();
        $status2->save();

        $current_kp_id = $kp2->id;
        $current_status_id = $status2->id;

        Kelompok::where('id', auth()->user()->kelompok->id)->update([
            'kp2_id' => $current_kp_id,
            's_kp2' => $current_status_id,
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
        return view('dashboard.editkp2', [
            'datakp2' => auth()->user()->kelompok->kp2,
            'datakp1' => auth()->user()->kelompok->kp1,
            'mhs1' => auth()->user()->kelompok->mahasiswa,
            'mhs2' => auth()->user()->kelompok->mahasiswa2,
            'title' => 'Edit Daftar KP2',
        ]);
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
        $data = $request->all();
        $current_kp_id = auth()->user()->kelompok->kp2->id;
        $current_status_id = auth()->user()->kelompok->status2->id;

        //mahasiswa
        kp2::where('id', $current_kp_id)->update([
            //mahasiswa1
            'nim1' => $data['nim1'],
            'nama1' => $data['nama1'],
            'doswal1' => $data['doswal1'],
            'peminatan1' => $data['peminatan1'],
            'ipk1' => $data['ipk1'],
            't_sks1' => $data['t_sks1'],
            'jum_d1' => $data['jum_d1'],
            'mk_d1' => $data['mk_d1'],
            'jum_e1' => $data['jum_e1'],
            'mk_e1' => $data['mk_e1'],
            'kontrak' => $data['kontrak1'],

            //mahasiswa2
            'nim2' => $data['nim2'],
            'nama2' => $data['nama2'],
            'doswal2' => $data['doswal2'],
            'peminatan2' => $data['peminatan2'],
            'ipk2' => $data['ipk2'],
            't_sks2' => $data['t_sks2'],
            'jum_d2' => $data['jum_d2'],
            'mk_d2' => $data['mk_d2'],
            'jum_e2' => $data['jum_e2'],
            'mk_e2' => $data['mk_e2'],
            'kontrak2' => $data['kontrak2'],

            //materi
            'judul_kp' => $data['judul_kp'],
            'tempat_kp_lapangan' => $data['tempat_kp_lapangan'],
            'alamat' => $data['alamat'],
            'telp_tempat_kp' => $data['telp_tempat_kp'],
            'nama_pembimbing_lapangan' => $data['nama_pembimbing_lapangan'],
            'nama_penanggung_jawab_lapangan' => $data['nama_penanggung_jawab_lapangan'],
            'dosbim' => $data['dosbim'],

        ]);

        //mahasiswa input
        if ($request->file('khs1')) {
            $khs1 = $request->file('khs1')->store('data-mahasiswa');
            $s_khs1 = 'Memenuhi';
            kp2::where('id', $current_kp_id)->update([
                'khs1' => $khs1,
            ]);
            Status2::where('id', $current_status_id)->update([
                's_khs1' => $s_khs1,
            ]);
        }
        if ($request->file('krs1')) {
            $krs1 = $request->file('krs1')->store('data-mahasiswa');
            $s_krs1 = 'Memenuhi';
            kp2::where('id', $current_kp_id)->update([
                'krs1' => $krs1,
            ]);
            Status2::where('id', $current_status_id)->update([
                's_krs1' => $s_krs1,
            ]);
        }
        if ($request->file('khs2')) {
            $khs2 = $request->file('khs2')->store('data-mahasiswa');
            $s_khs2 = 'Memenuhi';
            kp2::where('id', $current_kp_id)->update([
                'khs2' => $khs2,
            ]);
            Status2::where('id', $current_status_id)->update([
                's_khs2' => $s_khs2,
            ]);
        }
        if ($request->file('krs2')) {
            $krs2 = $request->file('krs2')->store('data-mahasiswa');
            $s_krs2 = 'Memenuhi';
            kp2::where('id', $current_kp_id)->update([
                'krs2' => $krs2,
            ]);
            Status2::where('id', $current_status_id)->update([
                's_krs2' => $s_krs2,
            ]);
        }

        //kelompok input
        if ($request->file('k_b_akademik')) {
            $k_b_akademik = $request->file('k_b_akademik')->store('data-mahasiswa');
            $s_k_b_akademik = 'Memenuhi';
            kp2::where('id', $current_kp_id)->update([
                'k_b_akademik' => $k_b_akademik,
            ]);
            Status2::where('id', $current_status_id)->update([
                's_k_akademik' => $s_k_b_akademik,
            ]);
        }
        if ($request->file('k_b_lapangan')) {
            $k_b_lapangan = $request->file('k_b_lapangan')->store('data-mahasiswa');
            $s_k_b_lapangan = 'Memenuhi';
            kp2::where('id', $current_kp_id)->update([
                'k_b_lapangan' => $k_b_lapangan,
            ]);
            Status2::where('id', $current_status_id)->update([
                's_k_lapangan' => $s_k_b_lapangan,
            ]);
        }
        if ($request->file('surat_kelayakan')) {
            $surat_kelayakan = $request->file('surat_kelayakan')->store('data-mahasiswa');
            $s_surat_kelayakan = 'Memenuhi';
            kp2::where('id', $current_kp_id)->update([
                'surat_kelayakan' => $surat_kelayakan,
            ]);
            Status2::where('id', $current_status_id)->update([
                's_surat_kelayakan' => $s_surat_kelayakan,
            ]);
        }
        if ($request->file('form_daftar')) {
            $form_daftar = $request->file('form_daftar')->store('data-mahasiswa');
            $s_form_daftar = 'Memenuhi';
            kp2::where('id', $current_kp_id)->update([
                'form_daftar' => $form_daftar,
            ]);
            Status2::where('id', $current_status_id)->update([
                's_form_daftar' => $s_form_daftar,
            ]);
        }

        //status
        if ($data['ipk1'] < 2.80) {
            $s_ipk1 = 'Tidak Memenuhi';
        } else {
            $s_ipk1 = 'Memenuhi';
        }
        if ($data['t_sks1'] < 120) {
            $s_sks1 = 'Tidak Memenuhi';
        } else {
            $s_sks1 = 'Memenuhi';
        }
        if ($data['jum_d1'] > 3) {
            $s_jum_d1 = 'Tidak Memenuhi';
        } else {
            $s_jum_d1 = 'Memenuhi';
        }
        if ($data['jum_e1'] > 0) {
            $s_jum_e1 = 'Tidak Memenuhi';
        } else {
            $s_jum_e1 = 'Memenuhi';
        }
        if ($data['kontrak1'] == 'Sedang Kontrak') {
            $s_kontrak1 = 'Memenuhi';
        } else {
            $s_kontrak1 = 'Tidak Memenuhi';
        }
        if ($data['ipk2'] < 2.80) {
            $s_ipk2 = 'Tidak Memenuhi';
        } else {
            $s_ipk2 = 'Memenuhi';
        }
        if ($data['t_sks2'] < 120) {
            $s_sks2 = 'Tidak Memenuhi';
        } else {
            $s_sks2 = 'Memenuhi';
        }
        if ($data['jum_d2'] > 3) {
            $s_jum_d2 = 'Tidak Memenuhi';
        } else {
            $s_jum_d2 = 'Memenuhi';
        }
        if ($data['jum_e2'] > 0) {
            $s_jum_e2 = 'Tidak Memenuhi';
        } else {
            $s_jum_e2 = 'Memenuhi';
        }
        if ($data['kontrak2'] == 'Sedang Kontrak') {
            $s_kontrak2 = 'Memenuhi';
        } else {
            $s_kontrak2 = 'Tidak Memenuhi';
        }
        if ($data['jum_b_akademik'] < 6) {
            $s_b_akademik = 'Tidak Memenuhi';
        } else {
            $s_b_akademik = 'Memenuhi';
        }
        if ($data['jum_b_lapangan'] < 8) {
            $s_b_lapangan = 'Tidak Memenuhi';
        } else {
            $s_b_lapangan = 'Memenuhi';
        }

        Status2::where('id', $current_status_id)->update([
            's_ipk1' => $s_ipk1,
            's_sks1' => $s_sks1,
            's_jum_d1' => $s_jum_d1,
            's_jum_e1' => $s_jum_e1,
            's_kontrak1' => $s_kontrak1,
            's_ipk2' => $s_ipk2,
            's_sks2' => $s_sks2,
            's_jum_d2' => $s_jum_d2,
            's_jum_e2' => $s_jum_e2,
            's_kontrak2' => $s_kontrak2,
            's_b_akademik' => $s_b_akademik,
            's_b_lapangan' => $s_b_lapangan,
        ]);

        return redirect('/dashboard')->with('success', 'Ubah Data KP2 Berhasil');
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
