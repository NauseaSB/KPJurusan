<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\kp2;
use Illuminate\Http\Request;

class DashboardKP2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kelompok::paginate(10);
        // $datas = Kelompok::where('id', '1')->first();
        // ddd($datas->status2->s_mhs1);
        return view('dashboard.koordinator.indexkp2', [
            'datas' => $data,
            'title' => 'Data Pendaftaran KP2',
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
        //
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
    public function edit($id)
    {
        $data = Kelompok::where('id', $id)->with('materi')->with('kp2')->with('status2')->first();
        // ddd($data->progweb);

        return view('dashboard.koordinator.set-status-kp2', [
            'id' => $id,
            'datas' => $data,
            'datakp2' => $data->kp2,
            'status2' => $data->status2,
            'title' => 'Set Status KP 2 Mahasiswa',
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

    public static function total_tidak_memenuhi($id)
    {
        $data = Kelompok::where('id', $id)->with('kp2')->with('status2')->first();
        $datas = $data->status2;
        $jumlah = 0;

        //Jumlah data mahasiswa 1
        if ($datas->s_ipk1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_sks1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_jum_d1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_jum_e1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_kontrak1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_khs1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_krs1 == 'Tidak Memenuhi') {
            $jumlah++;
        }

        //jumlah datas mahasiswa 2
        if ($datas->s_ipk2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_sks2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_jum_d2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_jum_e2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_kontrak2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_khs2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_krs2 == 'Tidak Memenuhi') {
            $jumlah++;
        }

        //akademik
        if ($datas->s_b_akademik == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_k_akademik == 'Tidak Memenuhi') {
            $jumlah++;
        }

        //lapangan
        if ($datas->s_b_lapangan == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_k_lapangan == 'Tidak Memenuhi') {
            $jumlah++;
        }

        //Kelompok
        if ($datas->s_surat_kelayakan == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_form_daftar == 'Tidak Memenuhi') {
            $jumlah++;
        }

        return $jumlah;
    }

    public static function total_bersyarat($id)
    {
        $data = Kelompok::where('id', $id)->with('kp2')->with('status2')->first();
        $datas = $data->status2;
        $jumlah = 0;

        //Jumlah data mahasiswa 1
        if ($datas->s_ipk1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_sks1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_jum_d1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_jum_e1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_kontrak1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_khs1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_krs1 == 'Bersyarat') {
            $jumlah++;
        }

        //jumlah datas mahasiswa 2
        if ($datas->s_ipk2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_sks2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_jum_d2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_jum_e2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_kontrak2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_khs2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_krs2 == 'Bersyarat') {
            $jumlah++;
        }

        //akademik
        if ($datas->s_b_akademik == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_k_akademik == 'Bersyarat') {
            $jumlah++;
        }

        //lapangan
        if ($datas->s_b_lapangan == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_k_lapangan == 'Bersyarat') {
            $jumlah++;
        }

        //Kelompok
        if ($datas->s_surat_kelayakan == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_form_daftar == 'Bersyarat') {
            $jumlah++;
        }

        return $jumlah;
    }
}
