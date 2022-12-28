<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use Illuminate\Http\Request;

class DashboardTUController extends Controller
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

        return view('dashboard.tatausaha.index', [
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
    public function edit($id)
    {
        $data = Kelompok::where('id', $id)->with('mahasiswa')->with('mahasiswa2')->with('materi')->with('kp1')->with('kp2')->with('status1')->first();
        return view('dashboard.tatausaha.set-status', [
            'datas' => $data,
            'title' => 'Set Status Mahasiswa',
            'mahasiswa1' => $data->mahasiswa,
            'mahasiswa2' => $data->mahasiswa2,
            'info_mhs' =>  $data->kp1,
            'status1' => $data->status1,
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
        $data = $request->all();
        Kelompok::where('id', $id)->update([
            'status_mhsw1' => $data['status_mhsw1'],
            'status_mhsw2' => $data['status_mhsw2'],
        ]);

        return redirect('/TU')->with('success', 'Perubahan Status Kelompok KP Berhasil');
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
