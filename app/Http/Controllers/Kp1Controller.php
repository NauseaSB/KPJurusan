<?php

namespace App\Http\Controllers;

use App\Models\kp1;
use App\Models\Kelompok;
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
        return view('dashboard.daftarkp1');
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
        $kp1->khs1 = $request->file('khs1')->store('data-mahasiswa');
        $kp1->krs1 = $request->file('krs1')->store('data-mahasiswa');
        $kp1->ktm1 = $request->file('ktm1')->store('data-mahasiswa');
        $kp1->p_foto1 = $request->file('p_foto1')->store('data-mahasiswa');

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
        $kp1->khs2 = $request->file('khs2')->store('data-mahasiswa');
        $kp1->krs2 = $request->file('krs2')->store('data-mahasiswa');
        $kp1->ktm2 = $request->file('ktm2')->store('data-mahasiswa');
        $kp1->p_foto2 = $request->file('p_foto2')->store('data-mahasiswa');

        //data kelompok
        $kp1->proposal = $request->file('proposal')->store('data-mahasiswa');
        $kp1->izin_kp = $request->file('izin_kp')->store('data-mahasiswa');

        $kp1->save();

        $current_kp_id = $kp1->id;

        Kelompok::where('id', auth()->user()->kelompok->id)->update([
            'kp_id' => $current_kp_id,
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
        //
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
        //
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
