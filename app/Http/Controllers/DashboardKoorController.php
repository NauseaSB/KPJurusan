<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
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
        $data = Kelompok::paginate(10);
        return view('dashboard.koordinator.index', [
            'datas' => $data,
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
        $data = Kelompok::where('id', $id)->with('mahasiswa')->with('mahasiswa2')->with('materi')->with('kp1')->with('kp2')->first();
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
            'title' => 'Set Status Mahasiswa',
        ]);
    }

    public static function menghitung_total_tidak_memenuhi($id)
    {
        $data = Kelompok::where('id', $id)->with('mahasiswa')->with('mahasiswa2')->with('materi')->with('kp1')->with('kp2')->first();
        $datas = $data->kp1;
        $angka_mutu = ['A', 'AB', 'B', 'BC', 'C', 'D', 'E', 'Belum Diambil'];
        $angka_mutu_warning = ['D', 'E', 'Belum Diambil'];
        $jumlah = 0;

        //Jumlah data mahasiswa 1
        foreach ($angka_mutu_warning as $item) {
            if ($datas->algoritma1 == $item) {
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item) {
            if ($datas->p_algoritma1 == $item) {
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item) {
            if ($datas->strukdat1 == $item) {
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item) {
            if ($datas->p_strukdat1 == $item) {
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item) {
            if ($datas->basdat1 == $item) {
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item) {
            if ($datas->p_basdat1 == $item) {
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item) {
            if ($datas->rpl1 == $item) {
                $jumlah++;
            }
        }
        if ($datas->jum_d1 > 0) {
            $jumlah++;
        }
        if ($datas->jum_e1 > 0) {
            $jumlah++;
        }
        if ($datas->ipk1 < 2.80) {
            $jumlah++;
        }
        if ($datas->t_sks1 < 90) {
            $jumlah++;
        }

        //jumlah datas mahasiswa 2
        foreach ($angka_mutu_warning as $item) {
            if ($datas->algoritma2 == $item) {
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item) {
            if ($datas->p_algoritma2 == $item) {
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item) {
            if ($datas->strukdat2 == $item) {
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item) {
            if ($datas->p_strukdat2 == $item) {
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item) {
            if ($datas->basdat2 == $item) {
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item) {
            if ($datas->p_basdat2 == $item) {
                $jumlah++;
            }
        }
        if ($datas->jum_d2 > 0) {
            $jumlah++;
        }
        if ($datas->jum_e2 > 0) {
            $jumlah++;
        }
        if ($datas->ipk2 < 2.80) {
            $jumlah++;
        }
        if ($datas->t_sks2 < 90) {
            $jumlah++;
        }

        return $jumlah;
    }
    public static function menghitung_total_bersyarat($id)
    {
        $data = Kelompok::where('id', $id)->with('mahasiswa')->with('mahasiswa2')->with('materi')->with('kp1')->with('kp2')->first();
        $datas = $data->kp1;
        $angka_mutu = ['A', 'AB', 'B', 'BC', 'C', 'D', 'E', 'Belum Diambil'];
        $angka_mutu_warning = ['D', 'E', 'Belum Diambil'];
        $jumlah = 0;

        //Jumlah data mahasiswa 1
        foreach ($angka_mutu_warning as $item) {
            if ($datas->appl1 == $item) {
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item) {
            if ($datas->progweb1 == $item) {
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item) {
            if ($datas->p_progweb1 == $item) {
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item) {
            if ($datas->p_po1 == $item) {
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item) {
            if ($datas->p_po1 == $item) {
                $jumlah++;
            }
        }
        //jumlah datas mahasiswa 2
        foreach ($angka_mutu_warning as $item) {
            if ($datas->appl2 == $item) {
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item) {
            if ($datas->progweb2 == $item) {
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item) {
            if ($datas->p_progweb2 == $item) {
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item) {
            if ($datas->po2 == $item) {
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item) {
            if ($datas->p_po2 == $item) {
                $jumlah++;
            }
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
