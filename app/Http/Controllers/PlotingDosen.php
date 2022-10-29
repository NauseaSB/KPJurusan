<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use App\Models\Dosen;
use App\Models\Materi;

use Illuminate\Http\Request;

class PlotingDosen extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kelompok::paginate(10);
        return view('dashboard.koordinator.ploting', [
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
        $data = Kelompok::find($id);
        $dosen = Dosen::all();
        $jumlah_ajuan_dosbim1 = Kelompok::where('dosbim', $data->materi->ajuan_pembimbing1)->count();
        $jumlah_ajuan_dosbim2 = Kelompok::where('dosbim', $data->materi->ajuan_pembimbing2)->count();
        return view('dashboard.koordinator.create-dosbim', [
            'datas' => $data,
            'dosens' => $dosen,
            'jumlah_ajuan_dosbim1' => $jumlah_ajuan_dosbim1,
            'jumlah_ajuan_dosbim2' => $jumlah_ajuan_dosbim2
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = Kelompok::find($id)->update([
            'dosbim' => $request['dosbim']
        ]);
        return redirect()->intended(route('ploting-dosen.index'));
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
