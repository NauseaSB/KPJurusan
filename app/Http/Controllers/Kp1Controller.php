<?php

namespace App\Http\Controllers;

use App\Models\kp2;
use App\Models\kp1;
use App\Models\Status1;
use App\Models\Kelompok;
use App\Models\BukaTutup;
use App\Http\Requests\Storekp1Request;
use App\Http\Requests\Updatekp1Request;

class Kp1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (BukaTutup::first()->kp1 == 0) {
            return view('dashboard.form-tutup', [
                'title' => 'Daftar KP1',
            ]);
        }
        return view('dashboard.daftarkp1', [
            'datakp1' => auth()->user()->kelompok->kp1,
            'mhs1' => auth()->user()->kelompok->mahasiswa,
            'mhs2' => auth()->user()->kelompok->mahasiswa2,
            'title' => 'Daftar KP1',
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
     * @param  \App\Http\Requests\Storekp1Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storekp1Request $request)
    {
        //ddd($request);
        // return $request->file('khs1')->store('data-mahasiswa');
        $good = ['A', 'B', 'C'];
        $warning = ['Sedang Diambil'];
        $danger = ['D', 'E', 'Belum Diambil'];

        //mahasiswa 1
        $data = $request->all();
        $kp1 = new kp1;
        $status1 = new Status1;

        $kp1->nim1 = $data['nim1'];
        $kp1->nama1 = $data['nama1'];
        $kp1->doswal1 = $data['doswal1'];
        $kp1->peminatan1 = $data['peminatan1'];
        $kp1->ipk1 = $data['ipk1'];
        if ($data['ipk1'] < 2.75) {
            $status1->s_ipk1 = 'Tidak Memenuhi';
        } else {
            $status1->s_ipk1 = 'Memenuhi';
        }
        $kp1->t_sks1 = $data['t_sks1'];
        if ($data['t_sks1'] < 90) {
            $status1->s_sks1 = 'Tidak Memenuhi';
        } else {
            $status1->s_sks1 = 'Memenuhi';
        }
        $kp1->semester1 = $data['semester1'];
        $kp1->jum_d1 = $data['jum_d1'];
        if ($data['jum_d1'] < 4) {
            $status1->s_jum_d1 = 'Memenuhi';
        } else {
            $status1->s_jum_d1 = 'Tidak Memenuhi';
        }
        $kp1->mk_d1 = $data['mk_d1'];
        $kp1->jum_e1 = $data['jum_e1'];
        if ($data['jum_e1'] < 4) {
            $status1->s_jum_e1 = 'Memenuhi';
        } else {
            $status1->s_jum_e1 = 'Tidak Memenuhi';
        }
        $kp1->mk_e1 = $data['mk_e1'];
        $kp1->algoritma1 = $data['algo1'];
        if ($data['algo1'] == 'Sedang Diambil') {
            $status1->s_algoritma1 = 'Bersyarat';
        } elseif ($data['algo1'] == 'Belum Diambil' or $data['algo1'] == 'D' or $data['algo1'] == 'E') {
            $status1->s_algoritma1 = 'Tidak Memenuhi';
        } else {
            $status1->s_algoritma1 = 'Memenuhi';
        }
        $kp1->p_algoritma1 = $data['p_algo1'];
        if ($data['p_algo1'] == 'Sedang Diambil') {
            $status1->s_p_algoritma1 = 'Bersyarat';
        } elseif ($data['p_algo1'] == 'Belum Diambil' or $data['p_algo1'] == 'D' or $data['p_algo1'] == 'E') {
            $status1->s_p_algoritma1 = 'Tidak Memenuhi';
        } else {
            $status1->s_p_algoritma1 = 'Memenuhi';
        }
        $kp1->strukdat1 = $data['strukdat1'];
        if ($data['strukdat1'] == 'Sedang Diambil') {
            $status1->s_strukdat1 = 'Bersyarat';
        } elseif ($data['strukdat1'] == 'Belum Diambil' or $data['strukdat1'] == 'D' or $data['strukdat1'] == 'E') {
            $status1->s_strukdat1 = 'Tidak Memenuhi';
        } else {
            $status1->s_strukdat1 = 'Memenuhi';
        }
        $kp1->p_strukdat1 = $data['p_strukdat1'];
        if ($data['p_strukdat1'] == 'Sedang Diambil') {
            $status1->s_p_strukdat1 = 'Bersyarat';
        } elseif ($data['p_strukdat1'] == 'Belum Diambil' or $data['p_strukdat1'] == 'D' or $data['p_strukdat1'] == 'E') {
            $status1->s_p_strukdat1 = 'Tidak Memenuhi';
        } else {
            $status1->s_p_strukdat1 = 'Memenuhi';
        }
        $kp1->basdat1 = $data['basdat1'];
        if ($data['basdat1'] == 'Sedang Diambil') {
            $status1->s_basdat1 = 'Bersyarat';
        } elseif ($data['basdat1'] == 'Belum Diambil' or $data['basdat1'] == 'D' or $data['basdat1'] == 'E') {
            $status1->s_basdat1 = 'Tidak Memenuhi';
        } else {
            $status1->s_basdat1 = 'Memenuhi';
        }
        $kp1->p_basdat1 = $data['p_basdat1'];
        if ($data['p_basdat1'] == 'Sedang Diambil') {
            $status1->s_p_basdat1 = 'Bersyarat';
        } elseif ($data['p_basdat1'] == 'Belum Diambil' or $data['p_basdat1'] == 'D' or $data['p_basdat1'] == 'E') {
            $status1->s_p_basdat1 = 'Tidak Memenuhi';
        } else {
            $status1->s_p_basdat1 = 'Memenuhi';
        }
        $kp1->rpl1 = $data['rpl1'];
        if ($data['rpl1'] == 'Sedang Diambil') {
            $status1->s_rpl1 = 'Bersyarat';
        } elseif ($data['rpl1'] == 'Belum Diambil' or $data['rpl1'] == 'D' or $data['rpl1'] == 'E') {
            $status1->s_rpl1 = 'Tidak Memenuhi';
        } else {
            $status1->s_rpl1 = 'Memenuhi';
        }
        $kp1->appl1 = $data['appl1'];
        if ($data['appl1'] == 'Sedang Diambil') {
            $status1->s_appl1 = 'Bersyarat';
        } elseif ($data['appl1'] == 'Belum Diambil' or $data['appl1'] == 'D' or $data['appl1'] == 'E') {
            $status1->s_appl1 = 'Tidak Memenuhi';
        } else {
            $status1->s_appl1 = 'Memenuhi';
        }
        $kp1->progweb1 = $data['progweb1'];
        if ($data['progweb1'] == 'Sedang Diambil') {
            $status1->s_progweb1 = 'Bersyarat';
        } elseif ($data['progweb1'] == 'Belum Diambil' or $data['progweb1'] == 'D' or $data['progweb1'] == 'E') {
            $status1->s_progweb1 = 'Tidak Memenuhi';
        } else {
            $status1->s_progweb1 = 'Memenuhi';
        }
        $kp1->p_progweb1 = $data['p_progweb1'];
        if ($data['p_progweb1'] == 'Sedang Diambil') {
            $status1->s_p_progweb1 = 'Bersyarat';
        } elseif ($data['p_progweb1'] == 'Belum Diambil' or $data['p_progweb1'] == 'D' or $data['p_progweb1'] == 'E') {
            $status1->s_p_progweb1 = 'Tidak Memenuhi';
        } else {
            $status1->s_p_progweb1 = 'Memenuhi';
        }
        $kp1->po1 = $data['po1'];
        if ($data['po1'] == 'Sedang Diambil') {
            $status1->s_po1 = 'Bersyarat';
        } elseif ($data['po1'] == 'Belum Diambil' or $data['po1'] == 'D' or $data['po1'] == 'E') {
            $status1->s_po1 = 'Tidak Memenuhi';
        } else {
            $status1->s_po1 = 'Memenuhi';
        }
        $kp1->p_po1 = $data['p_po1'];
        if ($data['p_po1'] == 'Sedang Diambil') {
            $status1->s_p_po1 = 'Bersyarat';
        } elseif ($data['p_po1'] == 'Belum Diambil' or $data['p_po1'] == 'D' or $data['p_po1'] == 'E') {
            $status1->s_p_po1 = 'Tidak Memenuhi';
        } else {
            $status1->s_p_po1 = 'Memenuhi';
        }

        if ($request->file('khs1')) {
            $kp1->khs1 = $request->file('khs1')->store('data-mahasiswa');
            $status1->s_khs1 = 'Memenuhi';
        } else {
            $status1->s_khs1 = 'Tidak Memenuhi';
        }
        if ($request->file('krs1')) {
            $kp1->krs1 = $request->file('krs1')->store('data-mahasiswa');
            $status1->s_krs1 = 'Memenuhi';
        } else {
            $status1->s_krs1 = 'Tidak Memenuhi';
        }
        if ($request->file('ktm1')) {
            $kp1->ktm1 = $request->file('ktm1')->store('data-mahasiswa');
            $status1->s_ktm1 = 'Memenuhi';
        } else {
            $status1->s_ktm1 = 'Tidak Memenuhi';
        }
        if ($request->file('p_foto1')) {
            $kp1->p_foto1 = $request->file('p_foto1')->store('data-mahasiswa');
            $status1->s_foto1 = 'Memenuhi';
        } else {
            $status1->s_foto1 = 'Tidak Memenuhi';
        }

        //mahasiswa 2
        $kp1->nim2 = $data['nim2'];
        $kp1->nama2 = $data['nama2'];
        $kp1->doswal2 = $data['doswal2'];
        $kp1->peminatan2 = $data['peminatan2'];
        $kp1->ipk2 = $data['ipk2'];
        if ($data['ipk2'] < 2.75) {
            $status1->s_ipk2 = 'Tidak Memenuhi';
        } else {
            $status1->s_ipk2 = 'Memenuhi';
        }
        $kp1->t_sks2 = $data['t_sks2'];
        if ($data['t_sks2'] < 90) {
            $status1->s_sks2 = 'Tidak Memenuhi';
        } else {
            $status1->s_sks2 = 'Memenuhi';
        }
        $kp1->semester2 = $data['semester2'];
        $kp1->jum_d2 = $data['jum_d2'];
        if ($data['jum_d2'] < 4) {
            $status1->s_jum_d2 = 'Memenuhi';
        } else {
            $status1->s_jum_d2 = 'Tidak Memenuhi';
        }
        $kp1->mk_d2 = $data['mk_d2'];
        $kp1->jum_e2 = $data['jum_e2'];
        if ($data['jum_e2'] < 4) {
            $status1->s_jum_e2 = 'Memenuhi';
        } else {
            $status1->s_jum_e2 = 'Tidak Memenuhi';
        }
        $kp1->mk_e2 = $data['mk_e2'];
        $kp1->algoritma2 = $data['algo2'];
        if ($data['algo2'] == 'Sedang Diambil') {
            $status1->s_algoritma2 = 'Bersyarat';
        } elseif (
            $data['algo2'] == 'Belum Diambil' or $data['algo2'] == 'D' or $data['algo2'] == 'E'
        ) {
            $status1->s_algoritma2 = 'Tidak Memenuhi';
        } else {
            $status1->s_algoritma2 = 'Memenuhi';
        }
        $kp1->p_algoritma2 = $data['p_algo2'];
        if ($data['p_algo2'] == 'Sedang Diambil') {
            $status1->s_p_algoritma2 = 'Bersyarat';
        } elseif (
            $data['p_algo2'] == 'Belum Diambil' or $data['p_algo2'] == 'D' or $data['p_algo2'] == 'E'
        ) {
            $status1->s_p_algoritma2 = 'Tidak Memenuhi';
        } else {
            $status1->s_p_algoritma2 = 'Memenuhi';
        }
        $kp1->strukdat2 = $data['strukdat2'];
        if ($data['strukdat2'] == 'Sedang Diambil') {
            $status1->s_strukdat2 = 'Bersyarat';
        } elseif ($data['strukdat2'] == 'Belum Diambil' or $data['strukdat2'] == 'D' or $data['strukdat2'] == 'E') {
            $status1->s_strukdat2 = 'Tidak Memenuhi';
        } else {
            $status1->s_strukdat2 = 'Memenuhi';
        }
        $kp1->p_strukdat2 = $data['p_strukdat2'];
        if ($data['p_strukdat2'] == 'Sedang Diambil') {
            $status1->s_p_strukdat2 = 'Bersyarat';
        } elseif ($data['p_strukdat1'] == 'Belum Diambil' or $data['p_strukdat2'] == 'D' or $data['p_strukdat2'] == 'E') {
            $status1->s_p_strukdat2 = 'Tidak Memenuhi';
        } else {
            $status1->s_p_strukdat2 = 'Memenuhi';
        }
        $kp1->basdat2 = $data['basdat2'];
        if ($data['basdat2'] == 'Sedang Diambil') {
            $status1->s_basdat2 = 'Bersyarat';
        } elseif (
            $data['basdat2'] == 'Belum Diambil' or $data['basdat2'] == 'D' or $data['basdat2'] == 'E'
        ) {
            $status1->s_basdat2 = 'Tidak Memenuhi';
        } else {
            $status1->s_basdat2 = 'Memenuhi';
        }
        $kp1->p_basdat2 = $data['p_basdat2'];
        if ($data['p_basdat2'] == 'Sedang Diambil') {
            $status1->s_p_basdat2 = 'Bersyarat';
        } elseif ($data['p_basdat2'] == 'Belum Diambil' or $data['p_basdat2'] == 'D' or $data['p_basdat2'] == 'E') {
            $status1->s_p_basdat2 = 'Tidak Memenuhi';
        } else {
            $status1->s_p_basdat2 = 'Memenuhi';
        }
        $kp1->rpl2 = $data['rpl2'];
        if ($data['rpl2'] == 'Sedang Diambil') {
            $status1->s_rpl2 = 'Bersyarat';
        } elseif ($data['rpl2'] == 'Belum Diambil' or $data['rpl2'] == 'D' or $data['rpl2'] == 'E') {
            $status1->s_rpl2 = 'Tidak Memenuhi';
        } else {
            $status1->s_rpl2 = 'Memenuhi';
        }
        $kp1->appl2 = $data['appl2'];
        if ($data['appl2'] == 'Sedang Diambil') {
            $status1->s_appl2 = 'Bersyarat';
        } elseif ($data['appl2'] == 'Belum Diambil' or $data['appl2'] == 'D' or $data['appl2'] == 'E') {
            $status1->s_appl2 = 'Tidak Memenuhi';
        } else {
            $status1->s_appl2 = 'Memenuhi';
        }
        $kp1->progweb2 = $data['progweb2'];
        if ($data['progweb2'] == 'Sedang Diambil') {
            $status1->s_progweb2 = 'Bersyarat';
        } elseif (
            $data['progweb2'] == 'Belum Diambil' or $data['progweb2'] == 'D' or $data['progweb2'] == 'E'
        ) {
            $status1->s_progweb2 = 'Tidak Memenuhi';
        } else {
            $status1->s_progweb2 = 'Memenuhi';
        }
        $kp1->p_progweb2 = $data['p_progweb2'];
        if ($data['p_progweb2'] == 'Sedang Diambil') {
            $status1->s_p_progweb2 = 'Bersyarat';
        } elseif ($data['p_progweb2'] == 'Belum Diambil' or $data['p_progweb2'] == 'D' or $data['p_progweb2'] == 'E') {
            $status1->s_p_progweb2 = 'Tidak Memenuhi';
        } else {
            $status1->s_p_progweb2 = 'Memenuhi';
        }
        $kp1->po2 = $data['po2'];
        if ($data['po2'] == 'Sedang Diambil') {
            $status1->s_po2 = 'Bersyarat';
        } elseif ($data['po2'] == 'Belum Diambil' or $data['po2'] == 'D' or $data['po2'] == 'E') {
            $status1->s_po2 = 'Tidak Memenuhi';
        } else {
            $status1->s_po2 = 'Memenuhi';
        }
        $kp1->p_po2 = $data['p_po2'];
        if ($data['p_po2'] == 'Sedang Diambil') {
            $status1->s_p_po2 = 'Bersyarat';
        } elseif ($data['p_po2'] == 'Belum Diambil' or $data['p_po2'] == 'D' or $data['p_po2'] == 'E') {
            $status1->s_p_po2 = 'Tidak Memenuhi';
        } else {
            $status1->s_p_po2 = 'Memenuhi';
        }

        if ($request->file('khs2')) {
            $kp1->khs2 = $request->file('khs2')->store('data-mahasiswa');
            $status1->s_khs2 = 'Memenuhi';
        } else {
            $status1->s_khs2 = 'Tidak Memenuhi';
        }
        if ($request->file('krs2')) {
            $kp1->krs2 = $request->file('krs2')->store('data-mahasiswa');
            $status1->s_krs2 = 'Memenuhi';
        } else {
            $status1->s_krs2 = 'Tidak Memenuhi';
        }
        if ($request->file('ktm2')) {
            $kp1->ktm2 = $request->file('ktm2')->store('data-mahasiswa');
            $status1->s_ktm2 = 'Memenuhi';
        } else {
            $status1->s_ktm2 = 'Tidak Memenuhi';
        }
        if ($request->file('p_foto2')) {
            $kp1->p_foto2 = $request->file('p_foto2')->store('data-mahasiswa');
            $status1->s_foto2 = 'Memenuhi';
        } else {
            $status1->s_foto2 = 'Tidak Memenuhi';
        }

        //data kelompok
        if ($request->file('proposal')) {
            $kp1->proposal = $request->file('proposal')->store('data-mahasiswa');
            $status1->s_proposal = 'Memenuhi';
        } else {
            $status1->s_proposal = 'Tidak Memenuhi';
        }
        if ($request->file('izin_kp')) {
            $kp1->izin_kp = $request->file('izin_kp')->store('data-mahasiswa');
            $status1->s_izin_kp = 'Memenuhi';
        } else {
            $status1->s_izin_kp = 'Tidak Memenuhi';
        }

        $kp1->save();
        $status1->save();

        $current_kp_id = $kp1->id;
        $current_status_id = $status1->id;

        Kelompok::where('id', auth()->user()->kelompok->id)->update([
            'kp_id' => $current_kp_id,
            's_kp1' => $current_status_id,
        ]);

        return redirect('/dashboard')->with('success', 'Pendaftaran KP1 Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kp1  $kp1
     * @return \Illuminate\Http\Response
     */
    public function show(kp1 $kp1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kp1  $kp1
     * @return \Illuminate\Http\Response
     */
    public function edit(kp1 $kp1)
    {
        // ddd(auth()->user()->kelompok->kp1->jum_d1);
        return view('dashboard.editkp1', [
            'datakp1' => auth()->user()->kelompok->kp1,
            'mhs1' => auth()->user()->kelompok->mahasiswa,
            'mhs2' => auth()->user()->kelompok->mahasiswa2,
            'title' => 'Edit Daftar KP1',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatekp1Request  $request
     * @param  \App\Models\kp1  $kp1
     * @return \Illuminate\Http\Response
     */
    public function update(Updatekp1Request $request, kp1 $kp1)
    {
        // ddd(auth()->user()->kelompok->kp1->id);
        $data = $request->all();
        $status1 = new Status1;
        $current_kp_id = auth()->user()->kelompok->kp1->id;
        $current_status1_id = auth()->user()->kelompok->status1->id;

        //mahasiswa 1
        $kp1_nim1 = $data['nim1'];
        $kp1_nama1 = $data['nama1'];
        $kp1_doswal1 = $data['doswal1'];
        $kp1_peminatan1 = $data['peminatan1'];
        $kp1_ipk1 = $data['ipk1'];
        $kp1_t_sks1 = $data['t_sks1'];
        $kp1_semester1 = $data['semester1'];
        $kp1_jum_d1 = $data['jum_d1'];
        $kp1_mk_d1 = $data['mk_d1'];
        $kp1_jum_e1 = $data['jum_e1'];
        $kp1_mk_e1 = $data['mk_e1'];
        $kp1_algoritma1 = $data['algo1'];
        $kp1_p_algoritma1 = $data['p_algo1'];
        $kp1_strukdat1 = $data['strukdat1'];
        $kp1_p_strukdat1 = $data['p_strukdat1'];
        $kp1_basdat1 = $data['basdat1'];
        $kp1_p_basdat1 = $data['p_basdat1'];
        $kp1_rpl1 = $data['rpl1'];
        $kp1_appl1 = $data['appl1'];
        $kp1_progweb1 = $data['progweb1'];
        $kp1_p_progweb1 = $data['p_progweb1'];
        $kp1_po1 = $data['po1'];
        $kp1_p_po1 = $data['p_po1'];

        if ($data['ipk1'] < 2.75) {
            $s_ipk1 = 'Tidak Memenuhi';
        } else {
            $s_ipk1 = 'Memenuhi';
        }
        if ($data['t_sks1'] < 90) {
            $s_sks1 = 'Tidak Memenuhi';
        } else {
            $s_sks1 = 'Memenuhi';
        }
        if ($data['jum_d1'] < 4) {
            $s_jum_d1 = 'Memenuhi';
        } else {
            $s_jum_d1 = 'Tidak Memenuhi';
        }
        if ($data['jum_e1'] < 4) {
            $s_jum_e1 = 'Memenuhi';
        } else {
            $s_jum_e1 = 'Tidak Memenuhi';
        }
        if ($data['algo1'] == 'Sedang Diambil') {
            $s_algoritma1 = 'Bersyarat';
        } elseif ($data['algo1'] == 'Belum Diambil' or $data['algo1'] == 'D' or $data['algo1'] == 'E') {
            $s_algoritma1 = 'Tidak Memenuhi';
        } else {
            $s_algoritma1 = 'Memenuhi';
        }
        if ($data['p_algo1'] == 'Sedang Diambil') {
            $s_p_algoritma1 = 'Bersyarat';
        } elseif ($data['p_algo1'] == 'Belum Diambil' or $data['p_algo1'] == 'D' or $data['p_algo1'] == 'E') {
            $s_p_algoritma1 = 'Tidak Memenuhi';
        } else {
            $s_p_algoritma1 = 'Memenuhi';
        }
        if ($data['strukdat1'] == 'Sedang Diambil') {
            $s_strukdat1 = 'Bersyarat';
        } elseif ($data['strukdat1'] == 'Belum Diambil' or $data['strukdat1'] == 'D' or $data['strukdat1'] == 'E') {
            $s_strukdat1 = 'Tidak Memenuhi';
        } else {
            $s_strukdat1 = 'Memenuhi';
        }
        if ($data['p_strukdat1'] == 'Sedang Diambil') {
            $s_p_strukdat1 = 'Bersyarat';
        } elseif ($data['p_strukdat1'] == 'Belum Diambil' or $data['p_strukdat1'] == 'D' or $data['p_strukdat1'] == 'E') {
            $s_p_strukdat1 = 'Tidak Memenuhi';
        } else {
            $s_p_strukdat1 = 'Memenuhi';
        }
        if ($data['basdat1'] == 'Sedang Diambil') {
            $s_basdat1 = 'Bersyarat';
        } elseif ($data['basdat1'] == 'Belum Diambil' or $data['basdat1'] == 'D' or $data['basdat1'] == 'E') {
            $s_basdat1 = 'Tidak Memenuhi';
        } else {
            $s_basdat1 = 'Memenuhi';
        }
        if ($data['p_basdat1'] == 'Sedang Diambil') {
            $s_p_basdat1 = 'Bersyarat';
        } elseif ($data['p_basdat1'] == 'Belum Diambil' or $data['p_basdat1'] == 'D' or $data['p_basdat1'] == 'E') {
            $s_p_basdat1 = 'Tidak Memenuhi';
        } else {
            $s_p_basdat1 = 'Memenuhi';
        }
        if ($data['rpl1'] == 'Sedang Diambil') {
            $s_rpl1 = 'Bersyarat';
        } elseif ($data['rpl1'] == 'Belum Diambil' or $data['rpl1'] == 'D' or $data['rpl1'] == 'E') {
            $s_rpl1 = 'Tidak Memenuhi';
        } else {
            $s_rpl1 = 'Memenuhi';
        }
        if ($data['appl1'] == 'Sedang Diambil') {
            $s_appl1 = 'Bersyarat';
        } elseif ($data['appl1'] == 'Belum Diambil' or $data['appl1'] == 'D' or $data['appl1'] == 'E') {
            $s_appl1 = 'Tidak Memenuhi';
        } else {
            $s_appl1 = 'Memenuhi';
        }
        if ($data['progweb1'] == 'Sedang Diambil') {
            $s_progweb1 = 'Bersyarat';
        } elseif ($data['progweb1'] == 'Belum Diambil' or $data['progweb1'] == 'D' or $data['progweb1'] == 'E') {
            $s_progweb1 = 'Tidak Memenuhi';
        } else {
            $s_progweb1 = 'Memenuhi';
        }
        if ($data['p_progweb1'] == 'Sedang Diambil') {
            $s_p_progweb1 = 'Bersyarat';
        } elseif ($data['p_progweb1'] == 'Belum Diambil' or $data['p_progweb1'] == 'D' or $data['p_progweb1'] == 'E') {
            $s_p_progweb1 = 'Tidak Memenuhi';
        } else {
            $s_p_progweb1 = 'Memenuhi';
        }
        if ($data['po1'] == 'Sedang Diambil') {
            $s_po1 = 'Bersyarat';
        } elseif ($data['po1'] == 'Belum Diambil' or $data['po1'] == 'D' or $data['po1'] == 'E') {
            $s_po1 = 'Tidak Memenuhi';
        } else {
            $s_po1 = 'Memenuhi';
        }
        if ($data['p_po1'] == 'Sedang Diambil') {
            $s_p_po1 = 'Bersyarat';
        } elseif ($data['p_po1'] == 'Belum Diambil' or $data['p_po1'] == 'D' or $data['p_po1'] == 'E') {
            $s_p_po1 = 'Tidak Memenuhi';
        } else {
            $s_p_po1 = 'Memenuhi';
        }

        //mahasiswa 2
        $kp1_nim2 = $data['nim2'];
        $kp1_nama2 = $data['nama2'];
        $kp1_doswal2 = $data['doswal2'];
        $kp1_peminatan2 = $data['peminatan2'];
        $kp1_ipk2 = $data['ipk2'];
        $kp1_t_sks2 = $data['t_sks2'];
        $kp1_semester2 = $data['semester2'];
        $kp1_jum_d2 = $data['jum_d2'];
        $kp1_mk_d2 = $data['mk_d2'];
        $kp1_jum_e2 = $data['jum_e2'];
        $kp1_mk_e2 = $data['mk_e2'];
        $kp1_algoritma2 = $data['algo2'];
        $kp1_p_algoritma2 = $data['p_algo2'];
        $kp1_strukdat2 = $data['strukdat2'];
        $kp1_p_strukdat2 = $data['p_strukdat2'];
        $kp1_basdat2 = $data['basdat2'];
        $kp1_p_basdat2 = $data['p_basdat2'];
        $kp1_rpl2 = $data['rpl2'];
        $kp1_appl2 = $data['appl2'];
        $kp1_progweb2 = $data['progweb2'];
        $kp1_p_progweb2 = $data['p_progweb2'];
        $kp1_po2 = $data['po1'];
        $kp1_p_po2 = $data['p_po1'];

        if ($data['ipk2'] < 2.75) {
            $s_ipk2 = 'Tidak Memenuhi';
        } else {
            $s_ipk2 = 'Memenuhi';
        }
        if ($data['t_sks2'] < 90) {
            $s_sks2 = 'Tidak Memenuhi';
        } else {
            $s_sks2 = 'Memenuhi';
        }
        if ($data['jum_d2'] < 4) {
            $s_jum_d2 = 'Memenuhi';
        } else {
            $s_jum_d2 = 'Tidak Memenuhi';
        }
        if ($data['jum_e2'] < 4) {
            $s_jum_e2 = 'Memenuhi';
        } else {
            $s_jum_e2 = 'Tidak Memenuhi';
        }
        if ($data['algo2'] == 'Sedang Diambil') {
            $s_algoritma2 = 'Bersyarat';
        } elseif ($data['algo2'] == 'Belum Diambil' or $data['algo2'] == 'D' or $data['algo2'] == 'E') {
            $s_algoritma2 = 'Tidak Memenuhi';
        } else {
            $s_algoritma2 = 'Memenuhi';
        }
        if ($data['p_algo2'] == 'Sedang Diambil') {
            $s_p_algoritma2 = 'Bersyarat';
        } elseif ($data['p_algo2'] == 'Belum Diambil' or $data['p_algo2'] == 'D' or $data['p_algo2'] == 'E') {
            $s_p_algoritma2 = 'Tidak Memenuhi';
        } else {
            $s_p_algoritma2 = 'Memenuhi';
        }
        if ($data['strukdat2'] == 'Sedang Diambil') {
            $s_strukdat2 = 'Bersyarat';
        } elseif ($data['strukdat2'] == 'Belum Diambil' or $data['strukdat2'] == 'D' or $data['strukdat2'] == 'E') {
            $s_strukdat2 = 'Tidak Memenuhi';
        } else {
            $s_strukdat2 = 'Memenuhi';
        }
        if ($data['p_strukdat2'] == 'Sedang Diambil') {
            $s_p_strukdat2 = 'Bersyarat';
        } elseif (
            $data['p_strukdat2'] == 'Belum Diambil' or $data['p_strukdat2'] == 'D' or $data['p_strukdat2'] == 'E'
        ) {
            $s_p_strukdat2 = 'Tidak Memenuhi';
        } else {
            $s_p_strukdat2 = 'Memenuhi';
        }
        if ($data['basdat2'] == 'Sedang Diambil') {
            $s_basdat2 = 'Bersyarat';
        } elseif ($data['basdat2'] == 'Belum Diambil' or $data['basdat2'] == 'D' or $data['basdat2'] == 'E') {
            $s_basdat2 = 'Tidak Memenuhi';
        } else {
            $s_basdat2 = 'Memenuhi';
        }
        if ($data['p_basdat2'] == 'Sedang Diambil') {
            $s_p_basdat2 = 'Bersyarat';
        } elseif ($data['p_basdat2'] == 'Belum Diambil' or $data['p_basdat2'] == 'D' or $data['p_basdat2'] == 'E') {
            $s_p_basdat2 = 'Tidak Memenuhi';
        } else {
            $s_p_basdat2 = 'Memenuhi';
        }
        if ($data['rpl2'] == 'Sedang Diambil') {
            $s_rpl2 = 'Bersyarat';
        } elseif ($data['rpl2'] == 'Belum Diambil' or $data['rpl2'] == 'D' or $data['rpl2'] == 'E') {
            $s_rpl2 = 'Tidak Memenuhi';
        } else {
            $s_rpl2 = 'Memenuhi';
        }
        if ($data['appl2'] == 'Sedang Diambil') {
            $s_appl2 = 'Bersyarat';
        } elseif ($data['appl2'] == 'Belum Diambil' or $data['appl2'] == 'D' or $data['appl2'] == 'E') {
            $s_appl2 = 'Tidak Memenuhi';
        } else {
            $s_appl2 = 'Memenuhi';
        }
        if ($data['progweb2'] == 'Sedang Diambil') {
            $s_progweb2 = 'Bersyarat';
        } elseif ($data['progweb2'] == 'Belum Diambil' or $data['progweb2'] == 'D' or $data['progweb2'] == 'E') {
            $s_progweb2 = 'Tidak Memenuhi';
        } else {
            $s_progweb2 = 'Memenuhi';
        }
        if ($data['p_progweb2'] == 'Sedang Diambil') {
            $s_p_progweb2 = 'Bersyarat';
        } elseif ($data['p_progweb2'] == 'Belum Diambil' or $data['p_progweb2'] == 'D' or $data['p_progweb2'] == 'E') {
            $s_p_progweb2 = 'Tidak Memenuhi';
        } else {
            $s_p_progweb2 = 'Memenuhi';
        }
        if ($data['po2'] == 'Sedang Diambil') {
            $s_po2 = 'Bersyarat';
        } elseif ($data['po2'] == 'Belum Diambil' or $data['po2'] == 'D' or $data['po2'] == 'E') {
            $s_po2 = 'Tidak Memenuhi';
        } else {
            $s_po2 = 'Memenuhi';
        }
        if ($data['p_po2'] == 'Sedang Diambil') {
            $s_p_po2 = 'Bersyarat';
        } elseif ($data['p_po2'] == 'Belum Diambil' or $data['p_po2'] == 'D' or $data['p_po2'] == 'E') {
            $s_p_po2 = 'Tidak Memenuhi';
        } else {
            $s_p_po2 = 'Memenuhi';
        }

        kp1::where('id', $current_kp_id)->update([
            //mahasiswa 1
            'nim1' => $kp1_nim1,
            'nama1' => $kp1_nama1,
            'doswal1' => $kp1_doswal1,
            'peminatan1' => $kp1_peminatan1,
            'ipk1' => $kp1_ipk1,
            't_sks1' => $kp1_t_sks1,
            'semester1' => $kp1_semester1,
            'jum_d1' => $kp1_jum_d1,
            'mk_d1' => $kp1_mk_d1,
            'jum_e1' => $kp1_jum_e1,
            'mk_e1' => $kp1_mk_e1,
            'algoritma1' => $kp1_algoritma1,
            'p_algoritma1' => $kp1_p_algoritma1,
            'strukdat1' => $kp1_strukdat1,
            'p_strukdat1' => $kp1_p_strukdat1,
            'basdat1' => $kp1_basdat1,
            'p_basdat1' => $kp1_p_basdat1,
            'rpl1' => $kp1_rpl1,
            'appl1' => $kp1_appl1,
            'progweb1' => $kp1_progweb1,
            'p_progweb1' => $kp1_p_progweb1,
            'po1' => $kp1_po1,
            'p_po1' => $kp1_p_po1,

            //mahasiswa 2
            'nim2' => $kp1_nim2,
            'nama2' => $kp1_nama2,
            'doswal2' => $kp1_doswal2,
            'peminatan2' => $kp1_peminatan2,
            'ipk2' => $kp1_ipk2,
            't_sks2' => $kp1_t_sks2,
            'semester2' => $kp1_semester2,
            'jum_d2' => $kp1_jum_d2,
            'mk_d2' => $kp1_mk_d2,
            'jum_e2' => $kp1_jum_e2,
            'mk_e2' => $kp1_mk_e2,
            'algoritma2' => $kp1_algoritma2,
            'p_algoritma2' => $kp1_p_algoritma2,
            'strukdat2' => $kp1_strukdat2,
            'p_strukdat2' => $kp1_p_strukdat2,
            'basdat2' => $kp1_basdat2,
            'p_basdat2' => $kp1_p_basdat2,
            'rpl2' => $kp1_rpl2,
            'appl2' => $kp1_appl2,
            'progweb2' => $kp1_progweb2,
            'p_progweb2' => $kp1_p_progweb2,
            'po2' => $kp1_po2,
            'p_po2' => $kp1_p_po2,
        ]);

        //data kelompok
        if ($request->file('khs1')) {
            $kp1_khs1 = $request->file('khs1')->store('data-mahasiswa');
            $s_khs1 = 'Memenuhi';
            kp1::where('id', $current_kp_id)->update([
                'khs1' => $kp1_khs1,
            ]);
            Status1::where('id', $current_status1_id)->update([
                's_khs1' => $s_khs1,
            ]);
        }
        if ($request->file('krs1')) {
            $kp1_krs1 = $request->file('krs1')->store('data-mahasiswa');
            $s_krs1 = 'Memenuhi';
            kp1::where('id', $current_kp_id)->update([
                'krs1' => $kp1_krs1,
            ]);
            Status1::where('id', $current_status1_id)->update([
                's_krs1' => $s_krs1,
            ]);
        }
        if ($request->file('ktm1')) {
            $kp1_ktm1 = $request->file('ktm1')->store('data-mahasiswa');
            $s_ktm1 = 'Memenuhi';
            kp1::where('id', $current_kp_id)->update([
                'ktm1' => $kp1_ktm1,
            ]);
            Status1::where('id', $current_status1_id)->update([
                's_ktm1' => $s_ktm1,
            ]);
        }
        if ($request->file('p_foto1')) {
            $kp1_p_foto1 = $request->file('p_foto1')->store('data-mahasiswa');
            $s_foto1 = 'Memenuhi';
            kp1::where('id', $current_kp_id)->update([
                'p_foto1' => $kp1_p_foto1,
            ]);
            Status1::where('id', $current_status1_id)->update([
                's_foto1' => $s_foto1,
            ]);
        }
        if ($request->file('khs2')) {
            $kp1_khs2 = $request->file('khs2')->store('data-mahasiswa');
            $s_khs2 = 'Memenuhi';
            kp1::where('id', $current_kp_id)->update([
                'khs2' => $kp1_khs2,
            ]);
            Status1::where('id', $current_status1_id)->update([
                's_khs2' => $s_khs2,
            ]);
        }
        if ($request->file('krs2')) {
            $kp1_krs2 = $request->file('krs2')->store('data-mahasiswa');
            $s_krs2 = 'Memenuhi';
            kp1::where('id', $current_kp_id)->update([
                'krs2' => $kp1_krs2,
            ]);
            Status1::where('id', $current_status1_id)->update([
                's_krs2' => $s_krs2,
            ]);
        }
        if ($request->file('ktm2')) {
            $kp1_ktm2 = $request->file('ktm2')->store('data-mahasiswa');
            $s_ktm2 = 'Memenuhi';
            kp1::where('id', $current_kp_id)->update([
                'ktm2' => $kp1_ktm2,
            ]);
            Status1::where('id', $current_status1_id)->update([
                's_ktm2' => $s_ktm2,
            ]);
        }
        if ($request->file('p_foto2')) {
            $kp1_p_foto2 = $request->file('p_foto2')->store('data-mahasiswa');
            $s_foto2 = 'Memenuhi';
            kp1::where('id', $current_kp_id)->update([
                'p_foto2' => $kp1_p_foto2,
            ]);
            Status1::where('id', $current_status1_id)->update([
                's_foto2' => $s_foto2,
            ]);
        }
        if ($request->file('proposal')) {
            $kp1_proposal = $request->file('proposal')->store('data-mahasiswa');
            $s_proposal = 'Memenuhi';
            kp1::where('id', $current_kp_id)->update([
                'proposal' => $kp1_proposal,
            ]);
            Status1::where('id', $current_status1_id)->update([
                's_proposal' => $s_proposal,
            ]);
        }
        if ($request->file('izin_kp')) {
            $kp1_izin_kp = $request->file('izin_kp')->store('data-mahasiswa');
            $s_izin_kp = 'Memenuhi';
            kp1::where('id', $current_kp_id)->update([
                'izin_kp' => $kp1_izin_kp,
            ]);
            Status1::where('id', $current_status1_id)->update([
                's_izin_kp' => $s_izin_kp,
            ]);
        }

        Status1::where('id', $current_status1_id)->update([
            // Mahasiswa 1
            's_ipk1' => $s_ipk1,
            's_sks1' => $s_sks1,
            's_jum_d1' => $s_jum_d1,
            's_jum_e1' => $s_jum_e1,
            's_algoritma1' => $s_algoritma1,
            's_p_algoritma1' => $s_p_algoritma1,
            's_strukdat1' => $s_strukdat1,
            's_p_strukdat1' => $s_p_strukdat1,
            's_basdat1' => $s_basdat1,
            's_p_basdat1' => $s_p_basdat1,
            's_rpl1' => $s_rpl1,
            's_appl1' => $s_appl1,
            's_progweb1' => $s_progweb1,
            's_p_progweb1' => $s_p_progweb1,
            's_po1' => $s_po1,
            's_p_po1' => $s_p_po1,

            //Mahasiswa 2
            's_ipk2' => $s_ipk2,
            's_sks2' => $s_sks2,
            's_jum_d2' => $s_jum_d2,
            's_jum_e2' => $s_jum_e2,
            's_algoritma2' => $s_algoritma2,
            's_p_algoritma2' => $s_p_algoritma2,
            's_strukdat2' => $s_strukdat2,
            's_p_strukdat2' => $s_p_strukdat2,
            's_basdat2' => $s_basdat2,
            's_p_basdat2' => $s_p_basdat2,
            's_rpl2' => $s_rpl2,
            's_appl2' => $s_appl2,
            's_progweb2' => $s_progweb2,
            's_p_progweb2' => $s_p_progweb2,
            's_po1' => $s_po2,
            's_p_po2' => $s_p_po2,
        ]);

        return redirect('/dashboard')->with('success', 'Ubah Data KP1 Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kp1  $kp1
     * @return \Illuminate\Http\Response
     */
    public function destroy(kp1 $kp1)
    {
        //
    }
}
