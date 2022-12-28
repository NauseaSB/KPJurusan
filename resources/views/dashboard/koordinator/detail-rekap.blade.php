@extends('dashboard.koordinator.main')
@section('container')
    <main class="form-signin text-center mt-5 mb-5">
        <h1>Detail Kelompok</h1>

        <div class="row">

            {{-- KP1 --}}
            @if (isset($datakp1))
                <div class="row mt-3 mb-3">
                    <h3>Data KP1</h3>
                    {{-- Mahasiswa 1 --}}
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top" name="nim1" id="nim1"
                                placeholder="NIM Mahasiswa 1" readonly value="{{ $datakp1->nim1 }}">
                            <label for="nim1">NIM Mahasiswa 1</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control" name="nama1" id="nama1"
                                placeholder="Nama Mahasiswa 1" readonly value="{{ $datakp1->nama1 }}">
                            <label for="nama1">Nama Mahasiswa 1</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control" name="doswal1" id="doswal1"
                                placeholder="Nama Mahasiswa 1" readonly value="{{ $datakp1->doswal1 }}">
                            <label for="doswal1">Nama Dosen Wali</label>
                        </div>
                        <div class=" form-floating mb-3">
                            <input type="text" class="form-control" name="peminatan1" id="peminatan1"
                                placeholder="Peminatan" readonly value="{{ $datakp1->peminatan1 }}">
                            <label for="peminatan1">Peminatan</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control {{ $datakp1->ipk1 < 2.8 ? 'is-invalid' : '' }}"
                                name="ipk1" id="ipk1" placeholder="IPK" readonly value="{{ $datakp1->ipk1 }}">
                            <label for="ipk1">IPK</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_ipk1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_ipk1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_ipk1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_ipk1">Status</label>
                                <input class="form-control" type="text" name="s_ipk1" id="s_ipk1"
                                    value="{{ $status1->s_ipk1 }}" readonly>
                            </div>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control {{ $datakp1->t_sks1 < 90 ? 'is-invalid' : '' }}"
                                name="t_sks1" id="t_sks1" placeholder="Total SKS" readonly
                                value="{{ $datakp1->t_sks1 }}">
                            <label for="t_sks1">Total SKS</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_sks1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_sks1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_sks1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_sks1">Status</label>
                                <input class="form-control" type="text" name="s_sks1" id="s_sks1"
                                    value="{{ $status1->s_sks1 }}" readonly>
                            </div>
                        </div>
                        <div class=" form-floating mb-3">
                            <input type="text" class="form-control rounded-bottom" name="semester1" id="semester1"
                                placeholder="Semester" readonly value="{{ $datakp1->semester1 }}">
                            <label for="semester1">Semester</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control {{ $datakp1->jum_d1 > 0 ? 'is-invalid' : '' }}"
                                name="jum_d1" id="jum_d1" readonly value="{{ $datakp1->jum_d1 }}">
                            <label for="jum_d1" class="form-label">Jumlah Nilai D</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_jum_d1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_jum_d1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_jum_d1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_jum_d1">Status</label>
                                <input class="form-control" type="text" name="s_jum_d1" id="s_jum_d1"
                                    value="{{ $status1->s_jum_d1 }}" readonly>
                            </div>
                        </div>
                        <div class=" form-floating mb-3">
                            <input type="text" class="form-control rounded-top" name="mk_d1" id="mk_d1"
                                placeholder="MK Nilai D" readonly value="{{ $datakp1->mk_d1 }}">
                            <label for="mk_d">MK Nilai D</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control {{ $datakp1->jum_e1 > 0 ? 'is-invalid' : '' }}"
                                name="jum_e1" id="jum_e1" readonly value="{{ $datakp1->jum_e1 }}">
                            <label for="jum_e1" class="form-label">Jumlah Nilai E</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_jum_e1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_jum_e1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_jum_e1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_jum_e1">Status</label>
                                <input class="form-control" type="text" name="s_jum_e1" id="s_jum_e1"
                                    value="{{ $status1->s_jum_e1 }}" readonly>
                            </div>
                        </div>
                        <div class=" form-floating mb-3">
                            <input type="text" class="form-control rounded-top" name="mk_e1" id="mk_e1"
                                placeholder="MK Nilai E" readonly value="{{ $datakp1->mk_e1 }}">
                            <label for="mk_e">MK Nilai E</label>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->algoritma1 != 'A' &&
                                $datakp1->algoritma1 != 'AB' &&
                                $datakp1->algoritma1 != 'B' &&
                                $datakp1->algoritma1 != 'BC' &&
                                $datakp1->algoritma1 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="algo" id="algo" readonly value="{{ $datakp1->algoritma1 }}">
                            <label for="algo" class="form-label">Nilai Algoritma dan Pemograman</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_algoritma1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_algoritma1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_algoritma1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_algoritma1">Status</label>
                                <input class="form-control" type="text" name="s_algoritma1" id="s_algoritma1"
                                    value="{{ $status1->s_algoritma1 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->p_algoritma1 != 'A' &&
                                $datakp1->p_algoritma1 != 'AB' &&
                                $datakp1->p_algoritma1 != 'B' &&
                                $datakp1->p_algoritma1 != 'BC' &&
                                $datakp1->p_algoritma1 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="p_algo1" id="p_algo1" readonly value="{{ $datakp1->p_algoritma1 }}">
                            <label for="p_algo1" class="form-label">Nilai Praktikum Algoritma dan Pemograman</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_p_algoritma1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_p_algoritma1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_p_algoritma1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_p_algoritma1">Status</label>
                                <input class="form-control" type="text" name="s_p_algoritma1" id="s_p_algoritma1"
                                    value="{{ $status1->s_p_algoritma1 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->strukdat1 != 'A' &&
                                $datakp1->strukdat1 != 'AB' &&
                                $datakp1->strukdat1 != 'B' &&
                                $datakp1->strukdat1 != 'BC' &&
                                $datakp1->strukdat1 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="strukdat1" id="strukdat1" readonly value="{{ $datakp1->strukdat1 }}">
                            <label for="strukdat1" class="form-label">Nilai Stuktur Data</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_strukdat1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_strukdat1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_strukdat1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_strukdat1">Status</label>
                                <input class="form-control" type="text" name="s_strukdat1" id="s_strukdat1"
                                    value="{{ $status1->s_strukdat1 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->p_strukdat1 != 'A' &&
                                $datakp1->p_strukdat1 != 'AB' &&
                                $datakp1->p_strukdat1 != 'B' &&
                                $datakp1->p_strukdat1 != 'BC' &&
                                $datakp1->p_strukdat1 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="p_strukdat1" id="p_strukdat1" readonly value="{{ $datakp1->p_strukdat1 }}">
                            <label for="p_strukdat1" class="form-label">Nilai Praktikum Stuktur Data</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_p_strukdat1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_p_strukdat1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_p_strukdat1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_p_strukdat1">Status</label>
                                <input class="form-control" type="text" name="s_p_strukdat1" id="s_p_strukdat1"
                                    value="{{ $status1->s_p_strukdat1 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->basdat1 != 'A' &&
                                $datakp1->basdat1 != 'AB' &&
                                $datakp1->basdat1 != 'B' &&
                                $datakp1->basdat1 != 'BC' &&
                                $datakp1->basdat1 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="basdat1" id="basdat1" readonly value="{{ $datakp1->basdat1 }}">
                            <label for="basdat1" class="form-label">Nilai Basis Data</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_basdat1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_basdat1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_basdat1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_basdat1">Status</label>
                                <input class="form-control" type="text" name="s_basdat1" id="s_basdat1"
                                    value="{{ $status1->s_basdat1 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->p_basdat1 != 'A' &&
                                $datakp1->p_basdat1 != 'AB' &&
                                $datakp1->p_basdat1 != 'B' &&
                                $datakp1->p_basdat1 != 'BC' &&
                                $datakp1->p_basdat1 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="p_basdat1" id="p_basdat1" readonly value="{{ $datakp1->p_basdat1 }}">
                            <label for="p_basdat1" class="form-label">Nilai Praktikum Basis Data</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_p_basdat1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_p_basdat1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_p_basdat1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_p_basdat1">Status</label>
                                <input class="form-control" type="text" name="s_p_basdat1" id="s_p_basdat1"
                                    value="{{ $status1->s_p_basdat1 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->rpl1 != 'A' &&
                                $datakp1->rpl1 != 'AB' &&
                                $datakp1->rpl1 != 'B' &&
                                $datakp1->rpl1 != 'BC' &&
                                $datakp1->rpl1 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="rpl1" id="rpl1" readonly value="{{ $datakp1->rpl1 }}">
                            <label for="rpl1" class="form-label">Nilai Rekayasa Perangkat Lunak</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_rpl1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_rpl1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_rpl1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_rpl1">Status</label>
                                <input class="form-control" type="text" name="s_rpl1" id="s_rpl1"
                                    value="{{ $status1->s_rpl1 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->appl1 != 'A' &&
                                $datakp1->appl1 != 'AB' &&
                                $datakp1->appl1 != 'B' &&
                                $datakp1->appl1 != 'BC' &&
                                $datakp1->appl1 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="appl1" id="appl1" readonly value="{{ $datakp1->appl1 }}">
                            <label for="appl1" class="form-label">Nilai Analisis dan Perancangan Perangkat
                                Lunak</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_appl1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_appl1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_appl1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_appl1">Status</label>
                                <input class="form-control" type="text" name="s_appl1" id="s_appl1"
                                    value="{{ $status1->s_appl1 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->progweb1 != 'A' &&
                                $datakp1->progweb1 != 'AB' &&
                                $datakp1->progweb1 != 'B' &&
                                $datakp1->progweb1 != 'BC' &&
                                $datakp1->progweb1 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="progweb1" id="progweb1" readonly value="{{ $datakp1->progweb1 }}">
                            <label for="progweb1" class="form-label">Nilai Pemograman Web</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_progweb1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_progweb1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_progweb1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_progweb1">Status</label>
                                <input class="form-control" type="text" name="s_progweb1" id="s_progweb1"
                                    value="{{ $status1->s_progweb1 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->p_progweb1 != 'A' &&
                                $datakp1->p_progweb1 != 'AB' &&
                                $datakp1->p_progweb1 != 'B' &&
                                $datakp1->p_progweb1 != 'BC' &&
                                $datakp1->p_progweb1 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="p_progweb1" id="p_progweb1" readonly value="{{ $datakp1->p_progweb1 }}">
                            <label for="p_progweb1" class="form-label">Nilai Praktikum Pemograman Web</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_p_progweb1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_p_progweb1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_p_progweb1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_p_progweb1">Status</label>
                                <input class="form-control" type="text" name="s_p_progweb1" id="s_p_progweb1"
                                    value="{{ $status1->s_p_progweb1 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->po1 != 'A' &&
                                $datakp1->po1 != 'AB' &&
                                $datakp1->po1 != 'B' &&
                                $datakp1->po1 != 'BC' &&
                                $datakp1->po1 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="po1" id="po1" readonly value="{{ $datakp1->po1 }}">
                            <label for="po1" class="form-label">Nilai Pemograman Object</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_po1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_po1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_po1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_po1">Status</label>
                                <input class="form-control" type="text" name="s_po1" id="s_po1"
                                    value="{{ $status1->s_po1 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->p_po1 != 'A' &&
                                $datakp1->p_po1 != 'AB' &&
                                $datakp1->p_po1 != 'B' &&
                                $datakp1->p_po1 != 'BC' &&
                                $datakp1->p_po1 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="p_po1" id="p_po1" readonly value="{{ $datakp1->p_po1 }}">
                            <label for="p_po1" class="form-label">Nilai Praktikum Pemograman Object</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_p_po1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_p_po1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_p_po1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_p_po1">Status</label>
                                <input class="form-control" type="text" name="s_p_po1" id="s_p_po1"
                                    value="{{ $status1->s_p_po1 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="input-group">
                                <input class="form-control" type="text" name="khs1" id="khs1"
                                    value="Data KHS">
                                <a href="/storage/{{ $datakp1->khs1 }}" target="_blank" class="btn btn-primary"
                                    @if ($datakp1->khs1 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
                                    Data</a>
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_khs1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_khs1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_khs1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_khs1">Status</label>
                                <input class="form-control" type="text" name="s_khs1" id="s_khs1"
                                    value="{{ $status1->s_khs1 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating mt-2">
                            <div class="input-group">
                                <input class="form-control" type="text" name="krs1" id="krs1"
                                    value="Data KRS">
                                <a href="/storage/{{ $datakp1->krs1 }}" target="_blank" class="btn btn-primary"
                                    @if ($datakp1->krs1 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
                                    Data</a>
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_krs1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_krs1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_krs1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_krs1">Status</label>
                                <input class="form-control" type="text" name="s_krs1" id="s_krs1"
                                    value="{{ $status1->s_krs1 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating mt-2">
                            <div class="input-group">
                                <input class="form-control" type="text" name="ktm1" id="ktm1"
                                    value="Data KTM">
                                <a href="/storage/{{ $datakp1->ktm1 }}" target="_blank" class="btn btn-primary"
                                    @if ($datakp1->ktm1 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
                                    Data</a>
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_ktm1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_ktm1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_ktm1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_ktm1">Status</label>
                                <input class="form-control" type="text" name="s_ktm1" id="s_ktm1"
                                    value="{{ $status1->s_ktm1 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating mt-2">
                            <div class="input-group">
                                <input class="form-control" type="text" name="p_foto1" id="p_foto1"
                                    value="Data Pas Foto">
                                <a href="/storage/{{ $datakp1->p_foto1 }}" target="_blank" class="btn btn-primary"
                                    @if ($datakp1->p_foto1 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
                                    Data</a>
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_foto1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_foto1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_foto1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_foto1">Status</label>
                                <input class="form-control" type="text" name="s_foto1" id="s_foto1"
                                    value="{{ $status1->s_foto1 }}" readonly>
                            </div>
                        </div>
                    </div>

                    {{-- Mahasiswa 2 --}}
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="nim2" id="nim2"
                                placeholder="NIM Mahasiswa 2" readonly value="{{ $datakp1->nim2 }}">
                            <label for="nim2">NIM Mahasiswa 2</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control" name="nama2" id="nama2"
                                placeholder="Nama Mahasiswa 2" readonly value="{{ $datakp1->nama2 }}">
                            <label for="nama2">Nama Mahasiswa 2</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control" name="doswal2" id="doswal2"
                                placeholder="Nama Mahasiswa 1" readonly value="{{ $datakp1->doswal2 }}">
                            <label for="doswal2">Nama Dosen Wali</label>
                        </div>
                        <div class=" form-floating mb-3">
                            <input type="text" class="form-control" name="peminatan2" id="peminatan2"
                                placeholder="Peminatan" readonly value="{{ $datakp1->peminatan2 }}">
                            <label for="peminatan2">Peminatan</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-top {{ $datakp1->ipk2 < 2.8 ? 'is-invalid' : '' }}"
                                name="ipk2" id="ipk2" placeholder="IPK" readonly value="{{ $datakp1->ipk2 }}">
                            <label for="ipk2">IPK</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_ipk2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_ipk2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_ipk2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_ipk2">Status</label>
                                <input class="form-control" type="text" name="s_ipk2" id="s_ipk2"
                                    value="{{ $status1->s_ipk2 }}" readonly>
                            </div>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control {{ $datakp1->t_sks2 < 90 ? 'is-invalid' : '' }}"
                                name="t_sks2" id="t_sks2" placeholder="Total SKS" readonly
                                value="{{ $datakp1->t_sks2 }}">
                            <label for="t_sks2">Total SKS</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_sks2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_sks2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_sks2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_sks2">Status</label>
                                <input class="form-control" type="text" name="s_sks2" id="s_sks2"
                                    value="{{ $status1->s_sks2 }}" readonly>
                            </div>
                        </div>
                        <div class=" form-floating mb-3">
                            <input type="text" class="form-control rounded-bottom" name="semester1" id="semester1"
                                placeholder="Semester" readonly value="{{ $datakp1->semester2 }}">
                            <label for="semester1">Semester</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control {{ $datakp1->jum_d2 > 0 ? 'is-invalid' : '' }}"
                                name="jum_d2" id="jum_d2" readonly value="{{ $datakp1->jum_d2 }}">
                            <label for="jum_d2" class="form-label">Jumlah Nilai D</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_jum_d2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_jum_d2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_jum_d2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_jum_d2">Status</label>
                                <input class="form-control" type="text" name="s_jum_d2" id="s_jum_d2"
                                    value="{{ $status1->s_jum_d2 }}" readonly>
                            </div>
                        </div>
                        <div class=" form-floating mb-3">
                            <input type="text" class="form-control rounded-top" name="mk_d2" id="mk_d2"
                                placeholder="MK Nilai D" readonly value="{{ $datakp1->mk_d2 }}">
                            <label for="mk_d2">MK Nilai D</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control {{ $datakp1->jum_e2 > 0 ? 'is-invalid' : '' }}"
                                name="jum_e2" id="jum_e2" readonly value="{{ $datakp1->jum_e2 }}">
                            <label for="jum_e2" class="form-label">Jumlah Nilai E</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_jum_e2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_jum_e2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_jum_e2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_jum_e2">Status</label>
                                <input class="form-control" type="text" name="s_jum_e2" id="s_jum_e2"
                                    value="{{ $status1->s_jum_e2 }}" readonly>
                            </div>
                        </div>
                        <div class=" form-floating mb-3">
                            <input type="text" class="form-control rounded-top" name="mk_e2" id="mk_e2"
                                placeholder="MK Nilai E" readonly value="{{ $datakp1->mk_e2 }}">
                            <label for="mk_e2">MK Nilai E</label>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->algoritma2 != 'A' &&
                                $datakp1->algoritma2 != 'AB' &&
                                $datakp1->algoritma2 != 'B' &&
                                $datakp1->algoritma2 != 'BC' &&
                                $datakp1->algoritma2 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="algoritma2" id="algoritma2" readonly value="{{ $datakp1->algoritma2 }}">
                            <label for="algoritma2" class="form-label">Nilai Algoritma dan Pemograman</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_algoritma2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_algoritma2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_algoritma2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_algoritma2">Status</label>
                                <input class="form-control" type="text" name="s_algoritma2" id="s_algoritma2"
                                    value="{{ $status1->s_algoritma2 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->p_algoritma2 != 'A' &&
                                $datakp1->p_algoritma2 != 'AB' &&
                                $datakp1->p_algoritma2 != 'B' &&
                                $datakp1->p_algoritma2 != 'BC' &&
                                $datakp1->p_algoritma2 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="p_algoritma2" id="p_algoritma2" readonly value="{{ $datakp1->p_algoritma2 }}">
                            <label for="p_algoritma2" class="form-label">Nilai Praktikum Algoritma dan
                                Pemograman</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_p_algoritma2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_p_algoritma2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_p_algoritma2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_p_algoritma2">Status</label>
                                <input class="form-control" type="text" name="s_p_algoritma2" id="s_p_algoritma2"
                                    value="{{ $status1->s_p_algoritma2 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->strukdat2 != 'A' &&
                                $datakp1->strukdat2 != 'AB' &&
                                $datakp1->strukdat2 != 'B' &&
                                $datakp1->strukdat2 != 'BC' &&
                                $datakp1->strukdat2 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="strukdat2" id="strukdat2" readonly value="{{ $datakp1->strukdat2 }}">
                            <label for="strukdat2" class="form-label">Nilai Stuktur Data</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_strukdat2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_strukdat2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_strukdat2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_strukdat2">Status</label>
                                <input class="form-control" type="text" name="s_strukdat2" id="s_strukdat2"
                                    value="{{ $status1->s_strukdat2 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->p_strukdat2 != 'A' &&
                                $datakp1->p_strukdat2 != 'AB' &&
                                $datakp1->p_strukdat2 != 'B' &&
                                $datakp1->p_strukdat2 != 'BC' &&
                                $datakp1->p_strukdat2 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="p_strukdat2" id="p_strukdat2" readonly value="{{ $datakp1->p_strukdat2 }}">
                            <label for="p_strukdat2" class="form-label">Nilai Praktikum Stuktur Data</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_p_strukdat2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_p_strukdat2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_p_strukdat2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_p_strukdat2">Status</label>
                                <input class="form-control" type="text" name="s_p_strukdat2" id="s_p_strukdat2"
                                    value="{{ $status1->s_p_strukdat2 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->basdat2 != 'A' &&
                                $datakp1->basdat2 != 'AB' &&
                                $datakp1->basdat2 != 'B' &&
                                $datakp1->basdat2 != 'BC' &&
                                $datakp1->basdat2 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="basdat2" id="basdat2" readonly value="{{ $datakp1->basdat2 }}">
                            <label for="basdat2" class="form-label">Nilai Basis Data</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_basdat2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_basdat2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_basdat2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_basdat2">Status</label>
                                <input class="form-control" type="text" name="s_basdat2" id="s_basdat2"
                                    value="{{ $status1->s_basdat2 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->p_basdat2 != 'A' &&
                                $datakp1->p_basdat2 != 'AB' &&
                                $datakp1->p_basdat2 != 'B' &&
                                $datakp1->p_basdat2 != 'BC' &&
                                $datakp1->p_basdat2 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="p_basdat2" id="p_basdat2" readonly value="{{ $datakp1->p_basdat2 }}">
                            <label for="p_basdat2" class="form-label">Nilai Praktikum Basis Data</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_p_basdat2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_p_basdat2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_p_basdat2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_p_basdat2">Status</label>
                                <input class="form-control" type="text" name="s_p_basdat2" id="s_p_basdat2"
                                    value="{{ $status1->s_p_basdat2 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->rpl2 != 'A' &&
                                $datakp1->rpl2 != 'AB' &&
                                $datakp1->rpl2 != 'B' &&
                                $datakp1->rpl2 != 'BC' &&
                                $datakp1->rpl2 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="rpl2" id="rpl2" readonly value="{{ $datakp1->rpl2 }}">
                            <label for="rpl2" class="form-label">Nilai Rekayasa Perangkat Lunak</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_rpl2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_rpl2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_rpl2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_rpl2">Status</label>
                                <input class="form-control" type="text" name="s_rpl2" id="s_rpl2"
                                    value="{{ $status1->s_rpl2 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->appl2 != 'A' &&
                                $datakp1->appl2 != 'AB' &&
                                $datakp1->appl2 != 'B' &&
                                $datakp1->appl2 != 'BC' &&
                                $datakp1->appl2 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="appl2" id="appl2" readonly value="{{ $datakp1->appl2 }}">
                            <label for="appl2" class="form-label">Nilai Analisis dan Perancangan Perangkat
                                Lunak</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_appl2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_appl2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_appl2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_appl2">Status</label>
                                <input class="form-control" type="text" name="s_appl2" id="s_appl2"
                                    value="{{ $status1->s_appl2 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->progweb2 != 'A' &&
                                $datakp1->progweb2 != 'AB' &&
                                $datakp1->progweb2 != 'B' &&
                                $datakp1->progweb2 != 'BC' &&
                                $datakp1->progweb2 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="progweb2" id="progweb2" readonly value="{{ $datakp1->progweb2 }}">
                            <label for="progweb2" class="form-label">Nilai Pemograman Web</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_progweb2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_progweb2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_progweb2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_progweb2">Status</label>
                                <input class="form-control" type="text" name="s_progweb2" id="s_progweb2"
                                    value="{{ $status1->s_progweb2 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->p_progweb2 != 'A' &&
                                $datakp1->p_progweb2 != 'AB' &&
                                $datakp1->p_progweb2 != 'B' &&
                                $datakp1->p_progweb2 != 'BC' &&
                                $datakp1->p_progweb2 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="p_progweb2" id="p_progweb2" readonly value="{{ $datakp1->p_progweb2 }}">
                            <label for="p_progweb2" class="form-label">Nilai Praktikum Pemograman Web</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_p_progweb2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_p_progweb2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_p_progweb2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_p_progweb2">Status</label>
                                <input class="form-control" type="text" name="s_p_progweb2" id="s_p_progweb2"
                                    value="{{ $status1->s_p_progweb2 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->po2 != 'A' &&
                                $datakp1->po2 != 'AB' &&
                                $datakp1->po2 != 'B' &&
                                $datakp1->po2 != 'BC' &&
                                $datakp1->po2 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="po2" id="po2" readonly value="{{ $datakp1->po2 }}">
                            <label for="po2" class="form-label">Nilai Pemograman Object</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_po2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_po2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_po2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_po2">Status</label>
                                <input class="form-control" type="text" name="s_po2" id="s_po2"
                                    value="{{ $status1->s_po2 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating  mt-2">
                            <input type="text"
                                class="form-control {{ $datakp1->p_po2 != 'A' &&
                                $datakp1->p_po2 != 'AB' &&
                                $datakp1->p_po2 != 'B' &&
                                $datakp1->p_po2 != 'BC' &&
                                $datakp1->p_po2 != 'C'
                                    ? 'is-invalid'
                                    : '' }}"
                                name="p_po2" id="p_po2" readonly value="{{ $datakp1->p_po2 }}">
                            <label for="p_po2" class="form-label">Nilai Praktikum Pemograman Object</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_p_po2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_p_po2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_p_po2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_p_po2">Status</label>
                                <input class="form-control" type="text" name="s_po2" id="s_po2"
                                    value="{{ $status1->s_po2 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="input-group">
                                <input class="form-control" type="text" name="khs2" id="khs2"
                                    value="Data KHS">
                                <a href="/storage/{{ $datakp1->khs2 }}" target="_blank" class="btn btn-primary"
                                    @if ($datakp1->khs2 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
                                    Data</a>
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_khs2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_khs2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_khs2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_khs2">Status</label>
                                <input class="form-control" type="text" name="s_khs2" id="s_khs2"
                                    value="{{ $status1->s_khs2 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating mt-2">
                            <div class="input-group">
                                <input class="form-control" type="text" name="krs2" id="krs2"
                                    value="Data KRS">
                                <a href="/storage/{{ $datakp1->krs2 }}" target="_blank" class="btn btn-primary"
                                    @if ($datakp1->krs2 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
                                    Data</a>
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_krs2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_krs2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_krs2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_krs2">Status</label>
                                <input class="form-control" type="text" name="s_krs2" id="s_krs2"
                                    value="{{ $status1->s_krs2 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating mt-2">
                            <div class="input-group">
                                <input class="form-control" type="text" name="ktm2" id="ktm2"
                                    value="Data KTM">
                                <a href="/storage/{{ $datakp1->ktm2 }}" target="_blank" class="btn btn-primary"
                                    @if ($datakp1->ktm2 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
                                    Data</a>
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_ktm2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_ktm2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_ktm2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_ktm2">Status</label>
                                <input class="form-control" type="text" name="s_ktm2" id="s_ktm2"
                                    value="{{ $status1->s_ktm2 }}" readonly>
                            </div>
                        </div>
                        <div class="form-floating mt-2">
                            <div class="input-group">
                                <input class="form-control" type="text" name="p_foto2" id="p_foto2"
                                    value="Data Pas Foto">
                                <a href="/storage/{{ $datakp1->p_foto2 }}" target="_blank" class="btn btn-primary"
                                    @if ($datakp1->p_foto2 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
                                    Data</a>
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status1->s_foto2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_foto2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_foto2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_foto2">Status</label>
                                <input class="form-control" type="text" name="s_foto2" id="s_foto2"
                                    value="{{ $status1->s_foto2 }}" readonly>
                            </div>
                        </div>
                    </div>

                    {{-- Kelompok --}}
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <div class="form-floating mt-2">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="proposal" id="proposal"
                                        value="Data Proposal">
                                    <a href="/storage/{{ $datakp1->proposal }}" target="_blank" class="btn btn-primary"
                                        @if ($datakp1->proposal == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
                                        Data</a>
                                </div>
                            </div>
                            <div class="form-floating">
                                <div class="input-group mb-3">
                                    <label
                                        class="input-group-text 
                                    @if ($status1->s_proposal == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_proposal == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_proposal == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                        for="s_proposal">Status</label>
                                    <input class="form-control" type="text" name="s_proposal" id="s_proposal"
                                        value="{{ $status1->s_proposal }}" readonly>
                                </div>
                            </div>
                            <div class="form-floating mt-2">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="izin_kp" id="izin_kp"
                                        value="Data Izin KP">
                                    <a href="/storage/{{ $datakp1->izin_kp }}" target="_blank" class="btn btn-primary"
                                        @if ($datakp1->izin_kp == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
                                        Data</a>
                                </div>
                            </div>
                            <div class="form-floating">
                                <div class="input-group mb-3">
                                    <label
                                        class="input-group-text 
                                    @if ($status1->s_izin_kp == 'Memenuhi') bg-success text-light
                                    @elseif ($status1->s_izin_kp == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status1->s_izin_kp == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                        for="s_izin_kp">Status</label>
                                    <input class="form-control" type="text" name="s_izin_kp" id="s_izin_kp"
                                        value="{{ $status1->s_izin_kp }}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Materi --}}
            @if (isset($datamateri))
                <div class="row mt-3 mb-3">
                    <h3>Data Materi</h3>
                    <div class="col">
                        <div class="form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('judul_kp') is-invalid rounded @enderror"
                                name="judul_kp" id="judul_kp" placeholder="Judul Kerja Praktik" readonly
                                @if (isset($datamateri->judul_kp)) value="{{ $datamateri->judul_kp }}"
                                @else
                                    value="{{ old('judul_kp') }}" @endif>
                            <label for="judul_kp">Judul Kerja Praktik</label>
                        </div>
                        <div class="form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('tempat_kp_lapangan') is-invalid rounded @enderror"
                                name="tempat_kp_lapangan" id="tempat_kp_lapangan" placeholder="Judul Kerja Praktik"
                                readonly
                                @if (isset($datamateri->tempat_kp_lapangan)) value="{{ $datamateri->tempat_kp_lapangan }}"
                                @else
                                    value="{{ old('tempat_kp_lapangan') }}" @endif>
                            <label for="tempat_kp_lapangan">Tempat Kerja Praktik</label>
                            @error('tempat_kp_lapangan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('alamat') is-invalid rounded @enderror"
                                name="alamat" id="alamat" placeholder="Judul Kerja Praktik" readonly
                                @if (isset($datamateri->alamat)) value="{{ $datamateri->alamat }}"
                                @else
                                    value="{{ old('alamat') }}" @endif>
                            <label for="alamat">Alamat Kerja Praktik</label>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('telp_tempat_kp') is-invalid rounded @enderror"
                                name="telp_tempat_kp" id="telp_tempat_kp" placeholder="Judul Kerja Praktik" readonly
                                @if (isset($datamateri->telp_tempat_kp)) value="{{ $datamateri->telp_tempat_kp }}"
                                @else
                                    value="{{ old('telp_tempat_kp') }}" @endif>
                            <label for="telp_tempat_kp">Nomor Telepon Tempat Kerja Praktik</label>
                            @error('telp_tempat_kp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('nama_pembimbing_lapangan') is-invalid rounded @enderror"
                                name="nama_pembimbing_lapangan" id="nama_pembimbing_lapangan"
                                placeholder="Judul Kerja Praktik" readonly
                                @if (isset($datamateri->nama_pembimbing_lapangan)) value="{{ $datamateri->nama_pembimbing_lapangan }}"
                                @else
                                    value="{{ old('nama_pembimbing_lapangan') }}" @endif>
                            <label for="nama_pembimbing_lapangan">Nama Pembimbing Lapangan</label>
                            @error('nama_pembimbing_lapangan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('nama_penanggung_jawab_lapangan') is-invalid rounded @enderror"
                                name="nama_penanggung_jawab_lapangan" id="nama_penanggung_jawab_lapangan"
                                placeholder="Judul Kerja Praktik" readonly
                                @if (isset($datamateri->nama_penanggung_jawab_lapangan)) value="{{ $datamateri->nama_penanggung_jawab_lapangan }}"
                                @else
                                    value="{{ old('nama_penanggung_jawab_lapangan') }}" @endif>
                            <label for="nama_penanggung_jawab_lapangan">Nama Penanggung Jawab Lapangan</label>
                            @error('nama_penanggung_jawab_lapangan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('dosbim') is-invalid rounded @enderror"
                                name="dosbim" id="dosbim" placeholder="Dosen Pembimbing" readonly
                                @if (isset($datas->dosbim)) value="{{ $datas->dosbim }}" @else value="{{ old('dosbim') }}" @endif>
                            <label for="dosbim">Dosen Pembimbing</label>
                            @error('dosbim')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            @endif

            {{-- KP2 --}}
            @if (isset($datakp2))
                {{-- tampil data mahasiswa --}}
                <div class="row mt-3 mb-3">
                    <h3>Data KP2</h3>
                    {{-- Mahasiswa 1 --}}
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top" name="nim1" id="nim1"
                                placeholder="NIM Mahasiswa 1" readonly value="{{ $datakp2->nim1 }}">
                            <label for="nim1">NIM Mahasiswa 1</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control" name="nama1" id="nama1"
                                placeholder="Nama Mahasiswa 1" readonly value="{{ $datakp2->nama1 }}">
                            <label for="nama1">Nama Mahasiswa 1</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control" name="doswal1" id="doswal1"
                                placeholder="Nama Mahasiswa 1" readonly value="{{ $datakp2->doswal1 }}">
                            <label for="doswal1">Nama Dosen Wali</label>
                        </div>
                        <div class=" form-floating mb-3">
                            <input type="text" class="form-control" name="peminatan1" id="peminatan1"
                                placeholder="Peminatan" readonly value="{{ $datakp2->peminatan1 }}">
                            <label for="peminatan1">Peminatan</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control {{ $datakp2->ipk1 < 2.8 ? 'is-invalid' : '' }}"
                                name="ipk1" id="ipk1" placeholder="IPK" readonly value="{{ $datakp2->ipk1 }}">
                            <label for="ipk1">IPK</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status2->s_ipk1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status2->s_ipk1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status2->s_ipk1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_ipk1">Status</label>
                                <input type="text" class="form-control" name="s_ipk1" id="s_ipk1" readonly
                                    value="{{ $status2->s_ipk1 }}">
                            </div>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control {{ $datakp2->t_sks1 < 90 ? 'is-invalid' : '' }}"
                                name="t_sks1" id="t_sks1" placeholder="Total SKS" readonly
                                value="{{ $datakp2->t_sks1 }}">
                            <label for="t_sks1">Total SKS</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status2->s_sks1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status2->s_sks1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status2->s_sks1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_sks1">Status</label>
                                <input type="text" class="form-control" name="s_sks1" id="s_sks1" readonly
                                    value="{{ $status2->s_sks1 }}">
                            </div>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control {{ $datakp2->jum_d1 > 0 ? 'is-invalid' : '' }}"
                                name="jum_d1" id="jum_d1" readonly value="{{ $datakp2->jum_d1 }}">
                            <label for="jum_d1" class="form-label">Jumlah Nilai D</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group">
                                <label
                                    class="input-group-text 
                                    @if ($status2->s_jum_d1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status2->s_jum_d1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status2->s_jum_d1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_jum_d1">Status</label>
                                <input type="text" class="form-control" name="s_jum_d1" id="s_jum_d1" readonly
                                    value="{{ $status2->s_jum_d1 }}">
                            </div>
                        </div>
                        <div class=" form-floating mb-3">
                            <input type="text" class="form-control rounded-top" name="mk_d1" id="mk_d1"
                                placeholder="MK Nilai D" readonly value="{{ $datakp2->mk_d1 }}">
                            <label for="mk_d">MK Nilai D</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control {{ $datakp2->jum_e1 > 0 ? 'is-invalid' : '' }}"
                                name="jum_e1" id="jum_e1" readonly value="{{ $datakp2->jum_e1 }}">
                            <label for="jum_e1" class="form-label">Jumlah Nilai E</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group">
                                <label
                                    class="input-group-text 
                                    @if ($status2->s_jum_e1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status2->s_jum_e1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status2->s_jum_e1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_jum_e1">Status</label>
                                <input type="text" class="form-control" name="s_jum_e1" id="s_jum_e1" readonly
                                    value="{{ $status2->s_jum_e1 }}">
                            </div>
                        </div>
                        <div class=" form-floating mb-3">
                            <input type="text" class="form-control rounded-top" name="mk_e1" id="mk_e1"
                                placeholder="MK Nilai E" readonly value="{{ $datakp2->mk_e1 }}">
                            <label for="mk_e">MK Nilai E</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group">
                                <input class="form-control" type="text" name="khs1" id="khs1"
                                    value="Data KHS" readonly>
                                <a href="/storage/{{ $datakp2->khs1 }}" target="_blank" class="btn btn-primary"
                                    @if ($datakp2->khs1 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
                                    Data</a>
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status2->s_khs1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status2->s_khs1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status2->s_khs1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_khs1">Status</label>
                                <input type="text" class="form-control" name="s_khs1" id="s_khs1" readonly
                                    value="{{ $status2->s_khs1 }}">
                            </div>
                        </div>
                        <div class="form-floating mt-2">
                            <div class="input-group">
                                <input class="form-control" type="text" name="krs1" id="krs1"
                                    value="Data KRS" readonly>
                                <a href="/storage/{{ $datakp2->krs1 }}" target="_blank" class="btn btn-primary"
                                    @if ($datakp2->krs1 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
                                    Data</a>
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status2->s_krs1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status2->s_krs1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status2->s_krs1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_krs1">Status</label>
                                <input type="text" class="form-control" name="s_krs1" id="s_krs1" readonly
                                    value="{{ $status2->s_krs1 }}">
                            </div>
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control {{ $datakp2->kontrak < 2.8 ? 'is-invalid' : '' }}" name="kontrak"
                                id="kontrak" placeholder="Kontrak" readonly value="{{ $datakp2->kontrak }}">
                            <label for="kontrak">Kontrak</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status2->s_kontrak1 == 'Memenuhi') bg-success text-light
                                    @elseif ($status2->s_kontrak1 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status2->s_kontrak1 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_kontrak1">Status</label>
                                <input type="text" class="form-control" name="s_kontrak1" id="s_kontrak1"
                                    value="{{ $status2->s_kontrak1 }}">
                            </div>
                        </div>
                    </div>

                    {{-- Mahasiswa 2 --}}
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="nim2" id="nim2"
                                placeholder="NIM Mahasiswa 2" readonly value="{{ $datakp2->nim2 }}">
                            <label for="nim2">NIM Mahasiswa 2</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control" name="nama2" id="nama2"
                                placeholder="Nama Mahasiswa 2" readonly value="{{ $datakp2->nama2 }}">
                            <label for="nama2">Nama Mahasiswa 2</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control" name="doswal2" id="doswal2"
                                placeholder="Nama Mahasiswa 1" readonly value="{{ $datakp2->doswal2 }}">
                            <label for="doswal2">Nama Dosen Wali</label>
                        </div>
                        <div class=" form-floating mb-3">
                            <input type="text" class="form-control" name="peminatan2" id="peminatan2"
                                placeholder="Peminatan" readonly value="{{ $datakp2->peminatan2 }}">
                            <label for="peminatan2">Peminatan</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-top {{ $datakp2->ipk2 < 2.8 ? 'is-invalid' : '' }}"
                                name="ipk2" id="ipk2" placeholder="IPK" readonly
                                value="{{ $datakp2->ipk2 }}">
                            <label for="ipk2">IPK</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status2->s_ipk2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status2->s_ipk2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status2->s_ipk2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_ipk2">Status</label>
                                <input type="text" class="form-control" name="s_ipk2" id="s_ipk2" readonly
                                    value="{{ $status2->s_ipk2 }}">
                            </div>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control {{ $datakp2->t_sks2 < 90 ? 'is-invalid' : '' }}"
                                name="t_sks2" id="t_sks2" placeholder="Total SKS" readonly
                                value="{{ $datakp2->t_sks2 }}">
                            <label for="t_sks2">Total SKS</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status2->s_sks2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status2->s_sks2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status2->s_sks2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_sks2">Status</label>
                                <input type="text" class="form-control" name="s_sks2" id="s_sks2" readonly
                                    value="{{ $status2->s_sks2 }}">
                            </div>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control {{ $datakp2->jum_d2 > 0 ? 'is-invalid' : '' }}"
                                name="jum_d2" id="jum_d2" readonly value="{{ $datakp2->jum_d2 }}">
                            <label for="jum_d2" class="form-label">Jumlah Nilai D</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group">
                                <label
                                    class="input-group-text 
                                    @if ($status2->s_jum_d2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status2->s_jum_d2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status2->s_jum_d2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_jum_d2">Status</label>
                                <input type="text" class="form-control" name="s_jum_d2" id="s_jum_d2" readonly
                                    value="{{ $status2->s_jum_d2 }}">
                            </div>
                        </div>
                        <div class=" form-floating mb-3">
                            <input type="text" class="form-control rounded-top" name="mk_d2" id="mk_d2"
                                placeholder="MK Nilai D" readonly value="{{ $datakp2->mk_d2 }}">
                            <label for="mk_d2">MK Nilai D</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control {{ $datakp2->jum_e2 > 0 ? 'is-invalid' : '' }}"
                                name="jum_e2" id="jum_e2" readonly value="{{ $datakp2->jum_e2 }}">
                            <label for="jum_e2" class="form-label">Jumlah Nilai E</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group">
                                <label
                                    class="input-group-text 
                                    @if ($status2->s_jum_e2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status2->s_jum_e2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status2->s_jum_e2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_jum_e2">Status</label>
                                <input type="text" class="form-control" name="s_jum_e2" id="s_jum_e2" readonly
                                    value="{{ $status2->s_jum_e2 }}">
                            </div>
                        </div>
                        <div class=" form-floating mb-3">
                            <input type="text" class="form-control rounded-top" name="mk_e2" id="mk_e2"
                                placeholder="MK Nilai E" readonly value="{{ $datakp2->mk_e2 }}">
                            <label for="mk_e2">MK Nilai E</label>
                        </div>
                        <div class="form-floating">
                            <div class="input-group">
                                <input class="form-control" type="text" name="khs2" id="khs2"
                                    value="Data KHS" readonly>
                                <a href="/storage/{{ $datakp2->khs2 }}" target="_blank" class="btn btn-primary"
                                    @if ($datakp2->khs2 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
                                    Data</a>
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status2->s_khs2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status2->s_khs2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status2->s_khs2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_khs2">Status</label>
                                <input type="text" class="form-control" name="s_khs2" id="s_khs2" readonly
                                    value="{{ $status2->s_khs2 }}">
                            </div>
                            <div class="form-floating mt-2">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="krs2" id="krs2"
                                        value="Data KRS" readonly>
                                    <a href="/storage/{{ $datakp2->krs2 }}" target="_blank" class="btn btn-primary"
                                        @if ($datakp2->krs2 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
                                        Data</a>
                                </div>
                            </div>
                            <div class="form-floating">
                                <div class="input-group mb-3">
                                    <label
                                        class="input-group-text 
                                    @if ($status2->s_krs2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status2->s_krs2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status2->s_krs2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                        for="s_krs2">Status</label>
                                    <input type="text" class="form-control" name="s_krs2" id="s_krs2"
                                        readonly value="{{ $status2->s_krs2 }}">
                                </div>
                            </div>
                            <div class=" form-floating">
                                <input type="text"
                                    class="form-control {{ $datakp2->kontrak2 < 2.8 ? 'is-invalid' : '' }}"
                                    name="kontrak2" id="kontrak2" placeholder="Kontrak" readonly
                                    value="{{ $datakp2->kontrak2 }}">
                                <label for="kontrak2">Kontrak</label>
                            </div>
                            <div class="form-floating">
                                <div class="input-group mb-3">
                                    <label
                                        class="input-group-text 
                                    @if ($status2->s_kontrak2 == 'Memenuhi') bg-success text-light
                                    @elseif ($status2->s_kontrak2 == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status2->s_kontrak2 == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                        for="s_kontrak2">Status</label>
                                    <input type="text" class="form-control" name="s_kontrak2" id="s_kontrak2"
                                        readonly value="{{ $status2->s_kontrak2 }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Bimbingan --}}
                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-floating">
                                <div class="input-group">
                                    <label class="input-group-text" for="jum_b_akademik">Jumlah Bimbingan
                                        Akademik</label>
                                    <input type="text" class="form-control" name="jum_b_akademik"
                                        id="jum_b_akademik" placeholder="Judul Kerja Praktik" readonly
                                        @if (isset($datakp2->jum_b_akademik)) value="{{ $datakp2->jum_b_akademik }}"
                                    @else value="{{ old('jum_b_akademik') }}" @endif>
                                    @if (isset($datakp2->k_b_akademik))
                                        <a href="/storage/{{ $datakp2->k_b_akademik }}" target="_blank"
                                            class="btn btn-primary">Lihat
                                            Data Kartu Bimbingan Akademik</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <div class="input-group">
                                    <label class="input-group-text" for="jum_b_lapangan">Jumlah Bimbingan
                                        Lapangan</label>
                                    <input type="text" class="form-control" name="jum_b_lapangan"
                                        id="jum_b_lapangan" placeholder="Judul Kerja Praktik" readonly
                                        @if (isset($datakp2->jum_b_lapangan)) value="{{ $datakp2->jum_b_lapangan }}"
                                    @else value="{{ old('jum_b_lapangan') }}" @endif>
                                    @if (isset($datakp2->k_b_lapangan))
                                        <a href="/storage/{{ $datakp2->k_b_lapangan }}" target="_blank"
                                            class="btn btn-primary">Lihat
                                            Data Kartu Bimbingan Akademik</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-floating">
                                <div class="input-group mb-3">
                                    <label
                                        class="input-group-text 
                                        @if ($status2->s_b_akademik == 'Memenuhi') bg-success text-light
                                        @elseif ($status2->s_b_akademik == 'Tidak Memenuhi')
                                        bg-danger text-light
                                        @elseif ($status2->s_b_akademik == 'Bersyarat') 
                                        bg-warning text-dark @endif"
                                        for="s_b_akademik">Status Bimbingan Akademik</label>
                                    <input type="text" class="form-control" name="s_b_akademik" id="s_b_akademik"
                                        readonly value="{{ $status2->s_b_akademik }}">
                                </div>
                            </div>
                            <div class="form-floating">
                                <div class="input-group mb-3">
                                    <label
                                        class="input-group-text 
                                    @if ($status2->s_k_akademik == 'Memenuhi') bg-success text-light
                                    @elseif ($status2->s_k_akademik == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status2->s_k_akademik == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                        for="s_k_akademik">Status Kartu Bimbingan Akademik</label>
                                    <input type="text" class="form-control" name="s_k_akademik" id="s_k_akademik"
                                        readonly value="{{ $status2->s_k_akademik }}">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <div class="input-group mb-3">
                                    <label
                                        class="input-group-text 
                                        @if ($status2->s_b_lapangan == 'Memenuhi') bg-success text-light
                                        @elseif ($status2->s_b_lapangan == 'Tidak Memenuhi')
                                        bg-danger text-light
                                        @elseif ($status2->s_b_lapangan == 'Bersyarat') 
                                        bg-warning text-dark @endif"
                                        for="s_b_lapangan">Status Bimbingan Lapangan</label>
                                    <input type="text" class="form-control" name="s_b_lapangan" id="s_b_lapangan"
                                        readonly value="{{ $status2->s_b_lapangan }}">
                                </div>
                            </div>
                            <div class="form-floating">
                                <div class="input-group mb-3">
                                    <label
                                        class="input-group-text 
                                    @if ($status2->s_k_lapangan == 'Memenuhi') bg-success text-light
                                    @elseif ($status2->s_k_lapangan == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status2->s_k_lapangan == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                        for="s_k_lapangan">Status Kartu Bimbingan Lapangan</label>
                                    <input type="text" class="form-control" name="s_k_lapangan" id="s_k_lapangan"
                                        readonly value="{{ $status2->s_k_lapangan }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Kelompok --}}
                <div class="row mt-3">
                    <div class="col">
                        <div class="form-floating mt-2">
                            <div class="input-group">
                                <input class="form-control" type="text" name="surat_kelayakan"
                                    id="surat_kelayakan" value="Data Surat Kelayakan KP" readonly>
                                <a href="/storage/{{ $datakp2->surat_kelayakan }}" target="_blank"
                                    class="btn btn-primary"
                                    @if ($datakp2->surat_kelayakan == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
                                    Data</a>
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status2->s_surat_kelayakan == 'Memenuhi') bg-success text-light
                                    @elseif ($status2->s_surat_kelayakan == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status2->s_surat_kelayakan == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_surat_kelayakan">Status</label>
                                <input type="text" class="form-control" name="s_surat_kelayakan"
                                    id="s_surat_kelayakan" readonly value="{{ $status2->s_surat_kelayakan }}">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mt-2">
                            <div class="input-group">
                                <input class="form-control" type="text" name="form_daftar" id="form_daftar"
                                    value="Data Form Pendaftaran KP" readonly>
                                <a href="/storage/{{ $datakp2->form_daftar }}" target="_blank"
                                    class="btn btn-primary"
                                    @if ($datakp2->form_daftar == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
                                    Data</a>
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="input-group mb-3">
                                <label
                                    class="input-group-text 
                                    @if ($status2->s_form_daftar == 'Memenuhi') bg-success text-light
                                    @elseif ($status2->s_form_daftar == 'Tidak Memenuhi')
                                    bg-danger text-light
                                    @elseif ($status2->s_form_daftar == 'Bersyarat') 
                                    bg-warning text-dark @endif"
                                    for="s_form_daftar">Status</label>
                                <input type="text" class="form-control" name="s_form_daftar" id="s_form_daftar"
                                    readonly value="{{ $status2->s_form_daftar }}">
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Seminar --}}
            @if (isset($dataseminar))
                {{-- mahasiswa --}}
                <div class="row justify-content-evenly mt-3">
                    <h3>Data Seminar</h3>
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text">Data KHS Mahasiswa 1</span>
                            @if (isset($dataseminar->khs1))
                                <span class="input-group-text bg-success text-bg-dark">Status : Data Sudah Diisi</span>
                                <a href="/storage/{{ $dataseminar->khs1 }}" target="_blank"
                                    class="btn btn-primary">Lihat
                                    Data</a>
                            @else
                                <span class="input-group-text bg-danger text-bg-light">Status : Data Belum Diisi</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text">Data KHS Mahasiswa 2</span>
                            @if (isset($dataseminar->khs2))
                                <span class="input-group-text bg-success text-bg-dark">Status : Data Sudah Diisi</span>
                                <a href="/storage/{{ $dataseminar->khs2 }}" target="_blank"
                                    class="btn btn-primary">Lihat
                                    Data</a>
                            @else
                                <span class="input-group-text bg-danger text-bg-light">Status : Data Belum Diisi</span>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- demo & surat kelayakan --}}
                <div class="row justify-content-evenly mt-3">
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text">Data Form Demo Aplikasi</span>
                            @if (isset($dataseminar->f_demo_aplikasi))
                                <span class="input-group-text bg-success text-bg-dark">Status : Data Sudah Diisi</span>
                                <a href="/storage/{{ $dataseminar->f_demo_aplikasi }}" target="_blank"
                                    class="btn btn-primary">Lihat
                                    Data</a>
                            @else
                                <span class="input-group-text bg-danger text-bg-light">Status : Data Belum Diisi</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text">Data Form Surat Kelayakan</span>
                            @if (isset($dataseminar->f_surat_kelayakan))
                                <span class="input-group-text bg-success text-bg-dark">Status : Data Sudah Diisi</span>
                                <a href="/storage/{{ $dataseminar->f_surat_kelayakan }}" target="_blank"
                                    class="btn btn-primary">Lihat
                                    Data</a>
                            @else
                                <span class="input-group-text bg-danger text-bg-light">Status : Data Belum Diisi</span>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- bimbingan & draft laporan --}}
                <div class="row justify-content-evenly mt-3">
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text">Data Form Bimbingan Akademik</span>
                            @if (isset($dataseminar->f_bimbingan_akademik))
                                <span class="input-group-text bg-success text-bg-dark">Status : Data Sudah Diisi</span>
                                <a href="/storage/{{ $dataseminar->f_bimbingan_akademik }}" target="_blank"
                                    class="btn btn-primary">Lihat
                                    Data</a>
                            @else
                                <span class="input-group-text bg-danger text-bg-light">Status : Data Belum Diisi</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text">Data Draft Laporan KP</span>
                            @if (isset($dataseminar->draft_laporan_kp))
                                <span class="input-group-text bg-success text-bg-dark">Status : Data Sudah Diisi</span>
                                <a href="/storage/{{ $dataseminar->draft_laporan_kp }}" target="_blank"
                                    class="btn btn-primary">Lihat
                                    Data</a>
                            @else
                                <span class="input-group-text bg-danger text-bg-light">Status : Data Belum Diisi</span>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-auto">
                <a href="/rekap-kp">
                    <button class="btn btn-lg bg-primary border-0" style="text-decoration: none">
                        <span data-feather="corner-up-left"></span> Kembali
                    </button>
                </a>
            </div>
        </div>
    </main>
@endsection
