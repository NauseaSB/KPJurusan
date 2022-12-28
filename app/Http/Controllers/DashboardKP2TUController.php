<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\Status2;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class DashboardKP2TUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kelompok::latest();

        if (request('search')) {
            $data->where('Periode', request('search'));
        };

        return view('dashboard.tatausaha.indexkp2', [
            'datas' => $data->paginate(10),
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kelompok::where('id', $id)->with('materi')->with('kp2')->with('status2')->first();
        // ddd($data->progweb);

        return view('dashboard.tatausaha.set-status-kp2', [
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data =  $request->all();
        $datas = Kelompok::where('id', $id)->with('materi')->with('kp2')->with('status2')->first();
        $current_status_id = $datas->status2->id;

        Status2::where('id', $current_status_id)->update([
            's_mhs1' => $data['s_mhs1'],
            's_mhs2' => $data['s_mhs2'],
        ]);

        return redirect('/data-kp2-tu')->with('success', 'Perubahan Status KP2 Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
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

    public function rpdf()
    {
        $data = Kelompok::all();
        $dompdf = new Dompdf();

        $kertas = view('dashboard.tatausaha.daftarkp2-pdf', [
            'datas' => $data,
        ]);

        $dompdf->loadHtml($kertas);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('rekap.pdf');
    }
}
