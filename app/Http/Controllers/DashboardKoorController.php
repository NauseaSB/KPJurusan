<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
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
        $data = Kelompok::all();
        return view('dashboard.koordinator.index', [
            'datas' => $data
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
        $angka_mutu = ['A','AB','B','BC','C','D','E','Belum Diambil'];
        $angka_mutu_warning = ['D','E','Belum Diambil'];
        $data = Kelompok::where('id', $id)->with('mahasiswa')->with('mahasiswa2')->with('materi')->with('kp1')->with('kp2')->first();
        return view('dashboard.koordinator.set-status', [
            'id' => $id,
            'datas' => $data,
            'angka_mutu' => $angka_mutu,
            'angka_mutu_warning'=>  $angka_mutu_warning,
            'mahasiswa1' => $data->mahasiswa,
            'mahasiswa2' => $data->mahasiswa2,
            'info_mhs' =>  $data->kp1,
            'datakp2' => $data->kp2
        ]);
    }
    public static function menghitung_total_tidak_memenuhi($id) {
        $data = Kelompok::where('id', $id)->with('mahasiswa')->with('mahasiswa2')->with('materi')->with('kp1')->with('kp2')->first()->kp1;
        $angka_mutu = ['A','AB','B','BC','C','D','E','Belum Diambil'];
        $angka_mutu_warning = ['D','E','Belum Diambil'];
        $jumlah = 0;
        foreach ($angka_mutu_warning as $item){
            if ($data->algoritma1 == $item){
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item){
            if ($data->p_algoritma1 == $item){
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item){
            if ($data->strukdat1 == $item){
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item){
            if ($data->p_strukdat1 == $item){
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item){
            if ($data->basdat1 == $item){
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item){
            if ($data->p_basdat1 == $item){
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item){
            if ($data->rpl1 == $item){
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item){
            if ($data->appl1 == $item){
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item){
            if ($data->progweb1 == $item){
                $jumlah++;
            }
        }
        foreach ($angka_mutu_warning as $item){
            if ($data->p_progweb1 == $item){
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
}
