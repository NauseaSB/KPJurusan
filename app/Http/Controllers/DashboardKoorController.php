<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\Status1;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class DashboardKoorController extends Controller
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
        }

        return view('dashboard.koordinator.index', [
            'datas' => $data->paginate(10),
            'title' => 'Data Pendaftaran KP',
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
    // public $angka_mutu = ['A','AB','B','BC','C','D','E','Belum Diambil'];

    public function edit($id)
    {
        $angka_mutu = ['A', 'AB', 'B', 'BC', 'C', 'D', 'E', 'Belum Diambil'];
        $angka_mutu_warning = ['D', 'E', 'Belum Diambil'];
        $data = Kelompok::where('id', $id)->with('mahasiswa')->with('mahasiswa2')->with('materi')->with('kp1')->with('kp2')->with('status1')->first();
        // ddd($data->progweb);

        return view('dashboard.koordinator.set-status', [
            'id' => $id,
            'datas' => $data,
            'angka_mutu' => $angka_mutu,
            'angka_mutu_warning' =>  $angka_mutu_warning,
            'mahasiswa1' => $data->mahasiswa,
            'mahasiswa2' => $data->mahasiswa2,
            'info_mhs' =>  $data->kp1,
            'datakp2' => $data->kp2,
            'status1' => $data->status1,
            'title' => 'Set Status Mahasiswa',
        ]);
    }

    public static function total_tidak_memenuhi($id)
    {
        $data = Kelompok::where('id', $id)->with('mahasiswa')->with('mahasiswa2')->with('materi')->with('kp1')->with('kp2')->with('status1')->first();
        $datas = $data->status1;
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
        if ($datas->s_algoritma1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_p_algoritma1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_strukdat1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_p_strukdat1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_basdat1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_p_basdat1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_rpl1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_appl1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_progweb1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_po1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_p_po1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_khs1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_krs1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_ktm1 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_foto1 == 'Tidak Memenuhi') {
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
        if ($datas->s_algoritma2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_p_algoritma2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_strukdat2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_p_strukdat2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_basdat2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_p_basdat2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_rpl2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_appl2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_progweb2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_po2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_p_po2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_khs2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_krs2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_ktm2 == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_foto2 == 'Tidak Memenuhi') {
            $jumlah++;
        }

        //Kelompok
        if ($datas->s_proposal == 'Tidak Memenuhi') {
            $jumlah++;
        }
        if ($datas->s_izin_kp == 'Tidak Memenuhi') {
            $jumlah++;
        }

        return $jumlah;
    }

    public static function total_bersyarat($id)
    {
        $data = Kelompok::where('id', $id)->with('mahasiswa')->with('mahasiswa2')->with('materi')->with('kp1')->with('kp2')->with('status1')->first();
        $datas = $data->status1;
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
        if ($datas->s_algoritma1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_p_algoritma1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_strukdat1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_p_strukdat1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_basdat1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_p_basdat1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_rpl1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_appl1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_progweb1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_po1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_p_po1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_khs1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_krs1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_ktm1 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_foto1 == 'Bersyarat') {
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
        if ($datas->s_algoritma2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_p_algoritma2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_strukdat2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_p_strukdat2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_basdat2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_p_basdat2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_rpl2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_appl2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_progweb2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_po2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_p_po2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_khs2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_krs2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_ktm2 == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_foto2 == 'Bersyarat') {
            $jumlah++;
        }

        //Kelompok
        if ($datas->s_proposal == 'Bersyarat') {
            $jumlah++;
        }
        if ($datas->s_izin_kp == 'Bersyarat') {
            $jumlah++;
        }

        return $jumlah;
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
        $data = $request->all();
        $datas = Kelompok::where('id', $id)->with('mahasiswa')->with('mahasiswa2')->with('materi')->with('kp1')->with('kp2')->with('status1')->first();
        $current_status1_id = $datas->status1->id;

        Status1::where('id', $current_status1_id)->update([
            // Mahasiswa 1
            's_ipk1' => $data['s_ipk1'],
            's_sks1' => $data['s_sks1'],
            's_jum_d1' => $data['s_jum_d1'],
            's_jum_e1' => $data['s_jum_e1'],
            's_algoritma1' => $data['s_algoritma1'],
            's_p_algoritma1' => $data['s_p_algoritma1'],
            's_strukdat1' => $data['s_strukdat1'],
            's_p_strukdat1' => $data['s_p_strukdat1'],
            's_basdat1' => $data['s_basdat1'],
            's_p_basdat1' => $data['s_p_basdat1'],
            's_rpl1' => $data['s_rpl1'],
            's_appl1' => $data['s_appl1'],
            's_progweb1' => $data['s_progweb1'],
            's_p_progweb1' => $data['s_p_progweb1'],
            's_po1' => $data['s_po1'],
            's_p_po1' => $data['s_p_po1'],
            's_khs1' => $data['s_khs1'],
            's_krs1' => $data['s_krs1'],
            's_ktm1' => $data['s_ktm1'],
            's_foto1' => $data['s_foto1'],

            //Mahasiswa 
            's_ipk2' => $data['s_ipk2'],
            's_sks2' => $data['s_sks2'],
            's_jum_d2' => $data['s_jum_d2'],
            's_jum_e2' => $data['s_jum_e2'],
            's_algoritma2' => $data['s_algoritma2'],
            's_p_algoritma2' => $data['s_p_algoritma2'],
            's_strukdat2' => $data['s_strukdat2'],
            's_p_strukdat2' => $data['s_p_strukdat2'],
            's_basdat2' => $data['s_basdat2'],
            's_p_basdat2' => $data['s_p_basdat2'],
            's_rpl2' => $data['s_rpl2'],
            's_appl2' => $data['s_appl2'],
            's_progweb2' => $data['s_progweb2'],
            's_p_progweb2' => $data['s_p_progweb2'],
            's_po2' => $data['s_po2'],
            's_p_po2' => $data['s_p_po2'],
            's_khs2' => $data['s_khs2'],
            's_krs2' => $data['s_krs2'],
            's_ktm2' => $data['s_ktm2'],
            's_foto2' => $data['s_foto2'],

            //Kelompok
            's_proposal' => $data['s_proposal'],
            's_izin_kp' => $data['s_izin_kp'],

        ]);

        Kelompok::where('id', $id)->update([
            'status_mhsw1' => $data['status_mhsw1'],
            'status_mhsw2' => $data['status_mhsw2'],
            'status_klmpk' => $data['status_klmpk'],
            'status_akhir' => $data['status_akhir'],
        ]);

        return redirect('/koorkp')->with('success', 'Perubahan Status Kelompok KP Berhasil');
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

    public function rpdf()
    {
        $data = Kelompok::all();
        $dompdf = new Dompdf();

        $kertas = view('dashboard.koordinator.daftar-pdf', [
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
