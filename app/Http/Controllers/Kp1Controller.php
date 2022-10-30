<?php

namespace App\Http\Controllers;

use App\Models\kp2;
use App\Models\kp1;
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

        //mahasiswa 1
        $data = $request->all();
        $kp1 = new kp1;
        $kp1->nim1 = $data['nim1'];
        $kp1->nama1 = $data['nama1'];
        $kp1->doswal1 = $data['doswal1'];
        $kp1->peminatan1 = $data['peminatan1'];
        $kp1->ipk1 = $data['ipk1'];
        $kp1->t_sks1 = $data['t_sks1'];
        $kp1->semester1 = $data['semester1'];
        $kp1->jum_d1 = $data['jum_d1'];
        $kp1->mk_d1 = $data['mk_d1'];
        $kp1->jum_e1 = $data['jum_e1'];
        $kp1->mk_e1 = $data['mk_e1'];
        $kp1->algoritma1 = $data['algo1'];
        $kp1->p_algoritma1 = $data['p_algo1'];
        $kp1->strukdat1 = $data['strukdat1'];
        $kp1->p_strukdat1 = $data['p_strukdat1'];
        $kp1->basdat1 = $data['basdat1'];
        $kp1->p_basdat1 = $data['p_basdat1'];
        $kp1->rpl1 = $data['rpl1'];
        $kp1->appl1 = $data['appl1'];
        $kp1->progweb1 = $data['progweb1'];
        $kp1->p_progweb1 = $data['p_progweb1'];
        $kp1->po1 = $data['po1'];
        $kp1->p_po1 = $data['p_po1'];

        if ($request->file('khs1')) {
            $kp1->khs1 = $request->file('khs1')->store('data-mahasiswa');
        }
        if ($request->file('krs1')) {
            $kp1->krs1 = $request->file('krs1')->store('data-mahasiswa');
        }
        if ($request->file('ktm1')) {
            $kp1->ktm1 = $request->file('ktm1')->store('data-mahasiswa');
        }
        if ($request->file('p_foto1')) {
            $kp1->p_foto1 = $request->file('p_foto1')->store('data-mahasiswa');
        }

        //mahasiswa 2
        $kp1->nim2 = $data['nim2'];
        $kp1->nama2 = $data['nama2'];
        $kp1->doswal2 = $data['doswal2'];
        $kp1->peminatan2 = $data['peminatan2'];
        $kp1->ipk2 = $data['ipk2'];
        $kp1->t_sks2 = $data['t_sks2'];
        $kp1->semester2 = $data['semester2'];
        $kp1->jum_d2 = $data['jum_d2'];
        $kp1->mk_d2 = $data['mk_d2'];
        $kp1->jum_e2 = $data['jum_e2'];
        $kp1->mk_e2 = $data['mk_e2'];
        $kp1->algoritma2 = $data['algo2'];
        $kp1->p_algoritma2 = $data['p_algo2'];
        $kp1->strukdat2 = $data['strukdat2'];
        $kp1->p_strukdat2 = $data['p_strukdat2'];
        $kp1->basdat2 = $data['basdat2'];
        $kp1->p_basdat2 = $data['p_basdat2'];
        $kp1->rpl2 = $data['rpl2'];
        $kp1->appl2 = $data['appl2'];
        $kp1->progweb2 = $data['progweb2'];
        $kp1->p_progweb2 = $data['p_progweb2'];
        $kp1->po2 = $data['po2'];
        $kp1->p_po2 = $data['p_po2'];

        if ($request->file('khs2')) {
            $kp1->khs2 = $request->file('khs2')->store('data-mahasiswa');
        }
        if ($request->file('krs2')) {
            $kp1->krs2 = $request->file('krs2')->store('data-mahasiswa');
        }
        if ($request->file('ktm2')) {
            $kp1->ktm2 = $request->file('ktm2')->store('data-mahasiswa');
        }
        if ($request->file('p_foto2')) {
            $kp1->p_foto2 = $request->file('p_foto2')->store('data-mahasiswa');
        }

        //data kelompok
        if ($request->file('proposal')) {
            $kp1->proposal = $request->file('proposal')->store('data-mahasiswa');
        }
        if ($request->file('izin_kp')) {
            $kp1->izin_kp = $request->file('izin_kp')->store('data-mahasiswa');
        }

        $kp1->save();

        $current_kp_id = $kp1->id;

        Kelompok::where('id', auth()->user()->kelompok->id)->update([
            'kp_id' => $current_kp_id,
        ]);

        $kp2 = new kp2;
        //Mahasiswa1
        $kp2->nim1 = $data['nim1'];
        $kp2->nama1 = $data['nama1'];
        $kp2->doswal1 = $data['doswal1'];
        $kp2->peminatan1 = $data['peminatan1'];
        $kp2->ipk1 = $data['ipk1'];
        $kp2->t_sks1 = $data['t_sks1'];
        $kp2->semester1 = $data['semester1'];
        $kp2->jum_d1 = $data['jum_d1'];
        $kp2->mk_d1 = $data['mk_d1'];
        $kp2->jum_e1 = $data['jum_e1'];
        $kp2->mk_e1 = $data['mk_e1'];
        $kp2->algoritma1 = $data['algo1'];
        $kp2->p_algoritma1 = $data['p_algo1'];
        $kp2->strukdat1 = $data['strukdat1'];
        $kp2->p_strukdat1 = $data['p_strukdat1'];
        $kp2->basdat1 = $data['basdat1'];
        $kp2->p_basdat1 = $data['p_basdat1'];
        $kp2->rpl1 = $data['rpl1'];
        $kp2->appl1 = $data['appl1'];
        $kp2->progweb1 = $data['progweb1'];
        $kp2->p_progweb1 = $data['p_progweb1'];
        $kp2->po1 = $data['po1'];
        $kp2->p_po1 = $data['p_po1'];
        $kp2->kontrak = null;

        //Mahasiswa2
        $kp2->nim2 = $data['nim2'];
        $kp2->nama2 = $data['nama2'];
        $kp2->doswal2 = $data['doswal2'];
        $kp2->peminatan2 = $data['peminatan2'];
        $kp2->ipk2 = $data['ipk2'];
        $kp2->t_sks2 = $data['t_sks2'];
        $kp2->semester2 = $data['semester2'];
        $kp2->jum_d2 = $data['jum_d2'];
        $kp2->mk_d2 = $data['mk_d2'];
        $kp2->jum_e2 = $data['jum_e2'];
        $kp2->mk_e2 = $data['mk_e2'];
        $kp2->algoritma2 = $data['algo2'];
        $kp2->p_algoritma2 = $data['p_algo2'];
        $kp2->strukdat2 = $data['strukdat2'];
        $kp2->p_strukdat2 = $data['p_strukdat2'];
        $kp2->basdat2 = $data['basdat2'];
        $kp2->p_basdat2 = $data['p_basdat2'];
        $kp2->rpl2 = $data['rpl2'];
        $kp2->appl2 = $data['appl2'];
        $kp2->progweb2 = $data['progweb2'];
        $kp2->p_progweb2 = $data['p_progweb2'];
        $kp2->po2 = $data['po2'];
        $kp2->p_po2 = $data['p_po2'];
        $kp2->kontrak2 = null;

        $kp2->save();

        $current_kp2_id = $kp2->id;

        Kelompok::where('id', auth()->user()->kelompok->id)->update([
            'kp2_id' => $current_kp2_id,
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
        //mahasiswa 1
        $data = $request->all();

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

        $current_kp_id = auth()->user()->kelompok->kp1->id;

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
        ]);

        //data kelompok
        if ($request->file('khs1')) {
            $kp1_khs1 = $request->file('khs1')->store('data-mahasiswa');
            kp1::where('id', $current_kp_id)->update([
                'khs1' => $kp1_khs1,
            ]);
        }
        if ($request->file('krs1')) {
            $kp1_krs1 = $request->file('krs1')->store('data-mahasiswa');
            kp1::where('id', $current_kp_id)->update([
                'krs1' => $kp1_krs1,
            ]);
        }
        if ($request->file('ktm1')) {
            $kp1_ktm1 = $request->file('ktm1')->store('data-mahasiswa');
            kp1::where('id', $current_kp_id)->update([
                'ktm1' => $kp1_ktm1,
            ]);
        }
        if ($request->file('p_foto1')) {
            $kp1_p_foto1 = $request->file('p_foto1')->store('data-mahasiswa');
            kp1::where('id', $current_kp_id)->update([
                'p_foto1' => $kp1_p_foto1,
            ]);
        }
        if ($request->file('khs2')) {
            $kp1_khs2 = $request->file('khs2')->store('data-mahasiswa');
            kp1::where('id', $current_kp_id)->update([
                'khs2' => $kp1_khs2,
            ]);
        }
        if ($request->file('krs2')) {
            $kp1_krs2 = $request->file('krs2')->store('data-mahasiswa');
            kp1::where('id', $current_kp_id)->update([
                'krs2' => $kp1_krs2,
            ]);
        }
        if ($request->file('ktm2')) {
            $kp1_ktm2 = $request->file('ktm2')->store('data-mahasiswa');
            kp1::where('id', $current_kp_id)->update([
                'ktm2' => $kp1_ktm2,
            ]);
        }
        if ($request->file('p_foto2')) {
            $kp1_p_foto2 = $request->file('p_foto2')->store('data-mahasiswa');
            kp1::where('id', $current_kp_id)->update([
                'p_foto2' => $kp1_p_foto2,
            ]);
        }
        if ($request->file('proposal')) {
            $kp1_proposal = $request->file('proposal')->store('data-mahasiswa');
            kp1::where('id', $current_kp_id)->update([
                'proposal' => $kp1_proposal,
            ]);
        }
        if ($request->file('izin_kp')) {
            $kp1_izin_kp = $request->file('izin_kp')->store('data-mahasiswa');
            kp1::where('id', $current_kp_id)->update([
                'izin_kp' => $kp1_izin_kp,
            ]);
        }

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
