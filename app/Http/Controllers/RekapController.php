<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class RekapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kelompok::paginate(10);
        return view('dashboard.koordinator.rekap', [
            'datas' => $data,
            'title' => 'Rekapitulasi KP',
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
        $data = Kelompok::where('id', $id)->with('kp1')->with('materi')->with('kp2')->with('status1')->with('status2')->with('seminar')->first();
        // ddd($data->kp1->nim1);

        return view('dashboard.koordinator.detail-rekap', [
            'id' => $id,
            'datas' => $data,
            'datakp1' => $data->kp1,
            'datakp2' => $data->kp2,
            'status1' => $data->status1,
            'status2' => $data->status2,
            'dataseminar' => $data->seminar,
            'datamateri' => $data->materi,
            'title' => 'Set Status KP 2 Mahasiswa',
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
        //
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

        $kertas = view('dashboard.koordinator.rekap-pdf', [
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
