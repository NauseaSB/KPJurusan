@extends('dashboard.tatausaha.main')
@section('container')
    <main class="form-signin text-center mt-5 mb-5">
        <h1>Set Status</h1>

        @if (isset($mahasiswa1, $mahasiswa2, $info_mhs))
            <div class="row">

                {{-- Mahasiswa 1 --}}
                <div class="col">
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top" name="nim1" id="nim1"
                            placeholder="NIM Mahasiswa 1" readonly value="{{ $info_mhs->nim1 }}">
                        <label for="nim1">NIM Mahasiswa 1</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control" name="nama1" id="nama1"
                            placeholder="Nama Mahasiswa 1" readonly value="{{ $info_mhs->nama1 }}">
                        <label for="nama1">Nama Mahasiswa 1</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control" name="doswal1" id="doswal1"
                            placeholder="Nama Mahasiswa 1" readonly value="{{ $info_mhs->doswal1 }}">
                        <label for="doswal1">Nama Dosen Wali</label>
                    </div>
                    <div class=" form-floating mb-3">
                        <input type="text" class="form-control" name="peminatan1" id="peminatan1" placeholder="Peminatan"
                            readonly value="{{ $info_mhs->peminatan1 }}">
                        <label for="peminatan1">Peminatan</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control {{ $info_mhs->ipk1 < 2.8 ? 'is-invalid' : '' }}"
                            name="ipk1" id="ipk1" placeholder="IPK" readonly value="{{ $info_mhs->ipk1 }}">
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
                        <input type="text" class="form-control {{ $info_mhs->t_sks1 < 90 ? 'is-invalid' : '' }}"
                            name="t_sks1" id="t_sks1" placeholder="Total SKS" readonly value="{{ $info_mhs->t_sks1 }}">
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
                            placeholder="Semester" readonly value="{{ $info_mhs->semester1 }}">
                        <label for="semester1">Semester</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control {{ $info_mhs->jum_d1 > 0 ? 'is-invalid' : '' }}"
                            name="jum_d1" id="jum_d1" readonly value="{{ $info_mhs->jum_d1 }}">
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
                            placeholder="MK Nilai D" readonly value="{{ $info_mhs->mk_d1 }}">
                        <label for="mk_d">MK Nilai D</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control {{ $info_mhs->jum_e1 > 0 ? 'is-invalid' : '' }}"
                            name="jum_e1" id="jum_e1" readonly value="{{ $info_mhs->jum_e1 }}">
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
                            placeholder="MK Nilai E" readonly value="{{ $info_mhs->mk_e1 }}">
                        <label for="mk_e">MK Nilai E</label>
                    </div>
                    <div class="form-floating  mt-2">
                        <input type="text"
                            class="form-control {{ $info_mhs->algoritma1 != 'A' &&
                            $info_mhs->algoritma1 != 'AB' &&
                            $info_mhs->algoritma1 != 'B' &&
                            $info_mhs->algoritma1 != 'BC' &&
                            $info_mhs->algoritma1 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="algo" id="algo" readonly value="{{ $info_mhs->algoritma1 }}">
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
                            class="form-control {{ $info_mhs->p_algoritma1 != 'A' &&
                            $info_mhs->p_algoritma1 != 'AB' &&
                            $info_mhs->p_algoritma1 != 'B' &&
                            $info_mhs->p_algoritma1 != 'BC' &&
                            $info_mhs->p_algoritma1 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="p_algo1" id="p_algo1" readonly value="{{ $info_mhs->p_algoritma1 }}">
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
                            class="form-control {{ $info_mhs->strukdat1 != 'A' &&
                            $info_mhs->strukdat1 != 'AB' &&
                            $info_mhs->strukdat1 != 'B' &&
                            $info_mhs->strukdat1 != 'BC' &&
                            $info_mhs->strukdat1 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="strukdat1" id="strukdat1" readonly value="{{ $info_mhs->strukdat1 }}">
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
                            class="form-control {{ $info_mhs->p_strukdat1 != 'A' &&
                            $info_mhs->p_strukdat1 != 'AB' &&
                            $info_mhs->p_strukdat1 != 'B' &&
                            $info_mhs->p_strukdat1 != 'BC' &&
                            $info_mhs->p_strukdat1 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="p_strukdat1" id="p_strukdat1" readonly value="{{ $info_mhs->p_strukdat1 }}">
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
                            class="form-control {{ $info_mhs->basdat1 != 'A' &&
                            $info_mhs->basdat1 != 'AB' &&
                            $info_mhs->basdat1 != 'B' &&
                            $info_mhs->basdat1 != 'BC' &&
                            $info_mhs->basdat1 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="basdat1" id="basdat1" readonly value="{{ $info_mhs->basdat1 }}">
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
                            class="form-control {{ $info_mhs->p_basdat1 != 'A' &&
                            $info_mhs->p_basdat1 != 'AB' &&
                            $info_mhs->p_basdat1 != 'B' &&
                            $info_mhs->p_basdat1 != 'BC' &&
                            $info_mhs->p_basdat1 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="p_basdat1" id="p_basdat1" readonly value="{{ $info_mhs->p_basdat1 }}">
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
                            class="form-control {{ $info_mhs->rpl1 != 'A' &&
                            $info_mhs->rpl1 != 'AB' &&
                            $info_mhs->rpl1 != 'B' &&
                            $info_mhs->rpl1 != 'BC' &&
                            $info_mhs->rpl1 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="rpl1" id="rpl1" readonly value="{{ $info_mhs->rpl1 }}">
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
                            class="form-control {{ $info_mhs->appl1 != 'A' &&
                            $info_mhs->appl1 != 'AB' &&
                            $info_mhs->appl1 != 'B' &&
                            $info_mhs->appl1 != 'BC' &&
                            $info_mhs->appl1 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="appl1" id="appl1" readonly value="{{ $info_mhs->appl1 }}">
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
                            class="form-control {{ $info_mhs->progweb1 != 'A' &&
                            $info_mhs->progweb1 != 'AB' &&
                            $info_mhs->progweb1 != 'B' &&
                            $info_mhs->progweb1 != 'BC' &&
                            $info_mhs->progweb1 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="progweb1" id="progweb1" readonly value="{{ $info_mhs->progweb1 }}">
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
                            class="form-control {{ $info_mhs->p_progweb1 != 'A' &&
                            $info_mhs->p_progweb1 != 'AB' &&
                            $info_mhs->p_progweb1 != 'B' &&
                            $info_mhs->p_progweb1 != 'BC' &&
                            $info_mhs->p_progweb1 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="p_progweb1" id="p_progweb1" readonly value="{{ $info_mhs->p_progweb1 }}">
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
                            class="form-control {{ $info_mhs->po1 != 'A' &&
                            $info_mhs->po1 != 'AB' &&
                            $info_mhs->po1 != 'B' &&
                            $info_mhs->po1 != 'BC' &&
                            $info_mhs->po1 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="po1" id="po1" readonly value="{{ $info_mhs->po1 }}">
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
                            class="form-control {{ $info_mhs->p_po1 != 'A' &&
                            $info_mhs->p_po1 != 'AB' &&
                            $info_mhs->p_po1 != 'B' &&
                            $info_mhs->p_po1 != 'BC' &&
                            $info_mhs->p_po1 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="p_po1" id="p_po1" readonly value="{{ $info_mhs->p_po1 }}">
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
                            <input class="form-control" type="text" name="khs1" id="khs1" value="Data KHS">
                            <a href="/storage/{{ $info_mhs->khs1 }}" target="_blank" class="btn btn-primary"
                                @if ($info_mhs->khs1 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
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
                            <input class="form-control" type="text" name="krs1" id="krs1" value="Data KRS">
                            <a href="/storage/{{ $info_mhs->krs1 }}" target="_blank" class="btn btn-primary"
                                @if ($info_mhs->krs1 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
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
                            <input class="form-control" type="text" name="ktm1" id="ktm1" value="Data KTM">
                            <a href="/storage/{{ $info_mhs->ktm1 }}" target="_blank" class="btn btn-primary"
                                @if ($info_mhs->ktm1 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
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
                            <a href="/storage/{{ $info_mhs->p_foto1 }}" target="_blank" class="btn btn-primary"
                                @if ($info_mhs->p_foto1 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
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
                            placeholder="NIM Mahasiswa 2" readonly value="{{ $info_mhs->nim2 }}">
                        <label for="nim2">NIM Mahasiswa 2</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control" name="nama2" id="nama2"
                            placeholder="Nama Mahasiswa 2" readonly value="{{ $info_mhs->nama2 }}">
                        <label for="nama2">Nama Mahasiswa 2</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control" name="doswal2" id="doswal2"
                            placeholder="Nama Mahasiswa 1" readonly value="{{ $info_mhs->doswal2 }}">
                        <label for="doswal2">Nama Dosen Wali</label>
                    </div>
                    <div class=" form-floating mb-3">
                        <input type="text" class="form-control" name="peminatan2" id="peminatan2"
                            placeholder="Peminatan" readonly value="{{ $info_mhs->peminatan2 }}">
                        <label for="peminatan2">Peminatan</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text"
                            class="form-control rounded-top {{ $info_mhs->ipk2 < 2.8 ? 'is-invalid' : '' }}"
                            name="ipk2" id="ipk2" placeholder="IPK" readonly value="{{ $info_mhs->ipk2 }}">
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
                        <input type="text" class="form-control {{ $info_mhs->t_sks2 < 90 ? 'is-invalid' : '' }}"
                            name="t_sks2" id="t_sks2" placeholder="Total SKS" readonly
                            value="{{ $info_mhs->t_sks2 }}">
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
                            placeholder="Semester" readonly value="{{ $info_mhs->semester2 }}">
                        <label for="semester1">Semester</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control {{ $info_mhs->jum_d2 > 0 ? 'is-invalid' : '' }}"
                            name="jum_d2" id="jum_d2" readonly value="{{ $info_mhs->jum_d2 }}">
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
                            placeholder="MK Nilai D" readonly value="{{ $info_mhs->mk_d2 }}">
                        <label for="mk_d2">MK Nilai D</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control {{ $info_mhs->jum_e2 > 0 ? 'is-invalid' : '' }}"
                            name="jum_e2" id="jum_e2" readonly value="{{ $info_mhs->jum_e2 }}">
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
                            placeholder="MK Nilai E" readonly value="{{ $info_mhs->mk_e2 }}">
                        <label for="mk_e2">MK Nilai E</label>
                    </div>
                    <div class="form-floating  mt-2">
                        <input type="text"
                            class="form-control {{ $info_mhs->algoritma2 != 'A' &&
                            $info_mhs->algoritma2 != 'AB' &&
                            $info_mhs->algoritma2 != 'B' &&
                            $info_mhs->algoritma2 != 'BC' &&
                            $info_mhs->algoritma2 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="algoritma2" id="algoritma2" readonly value="{{ $info_mhs->algoritma2 }}">
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
                            class="form-control {{ $info_mhs->p_algoritma2 != 'A' &&
                            $info_mhs->p_algoritma2 != 'AB' &&
                            $info_mhs->p_algoritma2 != 'B' &&
                            $info_mhs->p_algoritma2 != 'BC' &&
                            $info_mhs->p_algoritma2 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="p_algoritma2" id="p_algoritma2" readonly value="{{ $info_mhs->p_algoritma2 }}">
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
                            class="form-control {{ $info_mhs->strukdat2 != 'A' &&
                            $info_mhs->strukdat2 != 'AB' &&
                            $info_mhs->strukdat2 != 'B' &&
                            $info_mhs->strukdat2 != 'BC' &&
                            $info_mhs->strukdat2 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="strukdat2" id="strukdat2" readonly value="{{ $info_mhs->strukdat2 }}">
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
                            class="form-control {{ $info_mhs->p_strukdat2 != 'A' &&
                            $info_mhs->p_strukdat2 != 'AB' &&
                            $info_mhs->p_strukdat2 != 'B' &&
                            $info_mhs->p_strukdat2 != 'BC' &&
                            $info_mhs->p_strukdat2 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="p_strukdat2" id="p_strukdat2" readonly value="{{ $info_mhs->p_strukdat2 }}">
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
                            class="form-control {{ $info_mhs->basdat2 != 'A' &&
                            $info_mhs->basdat2 != 'AB' &&
                            $info_mhs->basdat2 != 'B' &&
                            $info_mhs->basdat2 != 'BC' &&
                            $info_mhs->basdat2 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="basdat2" id="basdat2" readonly value="{{ $info_mhs->basdat2 }}">
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
                            class="form-control {{ $info_mhs->p_basdat2 != 'A' &&
                            $info_mhs->p_basdat2 != 'AB' &&
                            $info_mhs->p_basdat2 != 'B' &&
                            $info_mhs->p_basdat2 != 'BC' &&
                            $info_mhs->p_basdat2 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="p_basdat2" id="p_basdat2" readonly value="{{ $info_mhs->p_basdat2 }}">
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
                            class="form-control {{ $info_mhs->rpl2 != 'A' &&
                            $info_mhs->rpl2 != 'AB' &&
                            $info_mhs->rpl2 != 'B' &&
                            $info_mhs->rpl2 != 'BC' &&
                            $info_mhs->rpl2 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="rpl2" id="rpl2" readonly value="{{ $info_mhs->rpl2 }}">
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
                            class="form-control {{ $info_mhs->appl2 != 'A' &&
                            $info_mhs->appl2 != 'AB' &&
                            $info_mhs->appl2 != 'B' &&
                            $info_mhs->appl2 != 'BC' &&
                            $info_mhs->appl2 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="appl2" id="appl2" readonly value="{{ $info_mhs->appl2 }}">
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
                            class="form-control {{ $info_mhs->progweb2 != 'A' &&
                            $info_mhs->progweb2 != 'AB' &&
                            $info_mhs->progweb2 != 'B' &&
                            $info_mhs->progweb2 != 'BC' &&
                            $info_mhs->progweb2 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="progweb2" id="progweb2" readonly value="{{ $info_mhs->progweb2 }}">
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
                            class="form-control {{ $info_mhs->p_progweb2 != 'A' &&
                            $info_mhs->p_progweb2 != 'AB' &&
                            $info_mhs->p_progweb2 != 'B' &&
                            $info_mhs->p_progweb2 != 'BC' &&
                            $info_mhs->p_progweb2 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="p_progweb2" id="p_progweb2" readonly value="{{ $info_mhs->p_progweb2 }}">
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
                            class="form-control {{ $info_mhs->po2 != 'A' &&
                            $info_mhs->po2 != 'AB' &&
                            $info_mhs->po2 != 'B' &&
                            $info_mhs->po2 != 'BC' &&
                            $info_mhs->po2 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="po2" id="po2" readonly value="{{ $info_mhs->po2 }}">
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
                            class="form-control {{ $info_mhs->p_po2 != 'A' &&
                            $info_mhs->p_po2 != 'AB' &&
                            $info_mhs->p_po2 != 'B' &&
                            $info_mhs->p_po2 != 'BC' &&
                            $info_mhs->p_po2 != 'C'
                                ? 'is-invalid'
                                : '' }}"
                            name="p_po2" id="p_po2" readonly value="{{ $info_mhs->p_po2 }}">
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
                            <input class="form-control" type="text" name="khs2" id="khs2" value="Data KHS">
                            <a href="/storage/{{ $info_mhs->khs2 }}" target="_blank" class="btn btn-primary"
                                @if ($info_mhs->khs2 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
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
                            <input class="form-control" type="text" name="krs2" id="krs2" value="Data KRS">
                            <a href="/storage/{{ $info_mhs->krs2 }}" target="_blank" class="btn btn-primary"
                                @if ($info_mhs->krs2 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
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
                            <input class="form-control" type="text" name="ktm2" id="ktm2" value="Data KTM">
                            <a href="/storage/{{ $info_mhs->ktm2 }}" target="_blank" class="btn btn-primary"
                                @if ($info_mhs->ktm2 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
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
                            <a href="/storage/{{ $info_mhs->p_foto2 }}" target="_blank" class="btn btn-primary"
                                @if ($info_mhs->p_foto2 == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
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
                                <a href="/storage/{{ $info_mhs->proposal }}" target="_blank" class="btn btn-primary"
                                    @if ($info_mhs->proposal == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
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
                                <a href="/storage/{{ $info_mhs->izin_kp }}" target="_blank" class="btn btn-primary"
                                    @if ($info_mhs->izin_kp == null) class="btn btn-primary disabled" role="button" aria-disabled="true" @endif>Lihat
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

        {{-- form ubah status --}}
        <div class="row">
            <form action="/TU/set-status/{{ $datas->id }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <select type="text" class="form-select" name="status_mhsw1" id="status_mhsw1">
                                @if (isset($datas->status_mhsw1))
                                    <option @if ($datas->status_mhsw1 == 'Memenuhi') selected @endif value="Memenuhi">Memenuhi
                                    </option>
                                    <option @if ($datas->status_mhsw1 == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                        Tidak Memenuhi
                                    </option>
                                    <option @if ($datas->status_mhsw1 == 'Bersyarat') selected @endif value="Bersyarat">
                                        Bersyarat
                                    </option>
                                @else
                                    <option value="Memenuhi">Memenuhi</option>
                                    <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                    <option value="Bersyarat">Bersyarat</option>
                                @endif
                            </select>
                            <label for="status_mhsw1" class="form-label">Status Mahasiswa1</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <select type="text" class="form-select" name="status_mhsw2" id="status_mhsw2">
                                @if (isset($datas->status_mhsw2))
                                    <option @if ($datas->status_mhsw2 == 'Memenuhi') selected @endif value="Memenuhi">Memenuhi
                                    </option>
                                    <option @if ($datas->status_mhsw2 == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                        Tidak Memenuhi
                                    </option>
                                    <option @if ($datas->status_mhsw2 == 'Bersyarat') selected @endif value="Bersyarat">
                                        Bersyarat
                                    </option>
                                @else
                                    <option value="Memenuhi">Memenuhi</option>
                                    <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                    <option value="Bersyarat">Bersyarat</option>
                                @endif
                            </select>
                            <label for="status_mhsw2" class="form-label">Status Mahasiswa2</label>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-block">
                        <a href="/TU" class="btn bg-primary mt-3" role="button">Kembali</a>
                        <button type="submit" class="btn bg-warning mt-3">Ubah Status</button>
                    </div>
            </form>
        </div>
    </main>
@endsection
