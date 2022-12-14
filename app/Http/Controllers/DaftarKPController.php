<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\kelompok;
use App\Models\mahasiswa;
use App\Models\BukaTutup;
use Illuminate\Http\Request;

class DaftarKPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periode_user = auth()->user()->kelompok->Periode;
        $periode_sys = BukaTutup::first()->periode;
        if ($periode_sys == 0) {
            $periode = "GANJIL";
            if ($periode_user == $periode) {
                return view('dashboard.daftarkp', [
                    'dosens' => Dosen::all(),
                    'kelompok' => auth()->user()->kelompok->mahasiswa,
                    'mhs1' => auth()->user()->kelompok->mahasiswa,
                    'mhs2' => auth()->user()->kelompok->mahasiswa2,
                    'title' => 'Daftar Kelompok KP',
                ]);
            } else {
                return view('dashboard.form-tutup', [
                    'title' => 'Daftar Kelompok KP',
                ]);
            }
        } else {
            $periode = "GENAP";
            if ($periode_user == $periode) {
                return view('dashboard.daftarkp', [
                    'dosens' => Dosen::all(),
                    'kelompok' => auth()->user()->kelompok->mahasiswa,
                    'mhs1' => auth()->user()->kelompok->mahasiswa,
                    'mhs2' => auth()->user()->kelompok->mahasiswa2,
                    'title' => 'Daftar Kelompok KP',
                ]);
            } else {
                return view('dashboard.form-tutup', [
                    'title' => 'Daftar Kelompok KP',
                ]);
            }
        }
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
        $user = auth()->user();

        $data = $request->all();
        $m1 = new Mahasiswa;
        $m1->nim = $data['nim1'];
        $m1->angkatan = $data['angkatan1'];
        $m1->nama = $data['nama1'];
        $m1->telp = $data['telp1'];
        $m1->doswal = $data['doswal1'];
        $m1->peminatan = $data['peminatan1'];
        $m1->ipk = $data['ipk1'];
        $m1->t_sks = $data['t_sks1'];
        $m1->semester = $data['semester1'];
        $m1->t_akd = $data['t_akd1'];
        $m1->ket_mahasiswa = $data['ket_mahasiswa1'];
        $m1->save();

        $m2 = new Mahasiswa;
        $m2->nim = $data['nim2'];
        $m2->angkatan = $data['angkatan2'];
        $m2->nama = $data['nama2'];
        $m2->telp = $data['telp2'];
        $m2->doswal = $data['doswal2'];
        $m2->peminatan = $data['peminatan2'];
        $m2->ipk = $data['ipk2'];
        $m2->t_sks = $data['t_sks2'];
        $m2->semester = $data['semester2'];
        $m2->t_akd = $data['t_akd2'];
        $m2->ket_mahasiswa = $data['ket_mahasiswa2'];
        $m2->save();

        $current_mahasiswa_id = $m1->id;
        $current_mahasiswa_id2 = $m2->id;

        Kelompok::where('id', auth()->user()->kelompok->id)->update([
            'mahasiswa_id' => $current_mahasiswa_id,
            'mahasiswa_id2' => $current_mahasiswa_id2
        ]);

        return redirect('/dashboard')->with('success', 'Pendaftaran Kelompok KP Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(mahasiswa $mahasiswa)
    {
        return view('dashboard.editkelompok', [
            'dosens' => Dosen::all(),
            'datakelompok' => auth()->user()->kelompok,
            'title' => 'Edit Daftar Kelompok KP',
            'mhs1' => auth()->user()->kelompok->mahasiswa,
            'mhs2' => auth()->user()->kelompok->mahasiswa2,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        $data = $request->all();
        $m1_nim = $data['nim1'];
        $m1_angkatan = $data['angkatan1'];
        $m1_nama = $data['nama1'];
        $m1_telp = $data['telp1'];
        $m1_doswal = $data['doswal1'];
        $m1_peminatan = $data['peminatan1'];
        $m1_ipk = $data['ipk1'];
        $m1_t_sks = $data['t_sks1'];
        $m1_semester = $data['semester1'];
        $m1_t_akd = $data['t_akd1'];
        $m1_ket_mahasiswa = $data['ket_mahasiswa1'];

        $m2_nim = $data['nim2'];
        $m2_angkatan = $data['angkatan2'];
        $m2_nama = $data['nama2'];
        $m2_telp = $data['telp2'];
        $m2_doswal = $data['doswal2'];
        $m2_peminatan = $data['peminatan2'];
        $m2_ipk = $data['ipk2'];
        $m2_t_sks = $data['t_sks2'];
        $m2_semester = $data['semester2'];
        $m2_t_akd = $data['t_akd2'];
        $m2_ket_mahasiswa = $data['ket_mahasiswa2'];

        $current_mahasiswa_id = auth()->user()->kelompok->mahasiswa->id;
        $current_mahasiswa_id2 = auth()->user()->kelompok->mahasiswa2->id;

        mahasiswa::where('id', $current_mahasiswa_id)->update([
            'nim' => $m1_nim,
            'angkatan' => $m1_angkatan,
            'nama' => $m1_nama,
            'telp' => $m1_telp,
            'doswal' => $m1_doswal,
            'peminatan' => $m1_peminatan,
            'ipk' => $m1_ipk,
            't_sks' => $m1_t_sks,
            'semester' => $m1_semester,
            't_akd' => $m1_t_akd,
            'ket_mahasiswa' => $m1_ket_mahasiswa,
        ]);

        mahasiswa::where('id', $current_mahasiswa_id2)->update([
            'nim' => $m2_nim,
            'angkatan' => $m2_angkatan,
            'nama' => $m2_nama,
            'telp' => $m2_telp,
            'doswal' => $m2_doswal,
            'peminatan' => $m2_peminatan,
            'ipk' => $m2_ipk,
            't_sks' => $m2_t_sks,
            'semester' => $m2_semester,
            't_akd' => $m2_t_akd,
            'ket_mahasiswa' => $m2_ket_mahasiswa,
        ]);

        return redirect('/dashboard')->with('success', 'Perubahan Data Kelompok KP Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        //
    }
}
