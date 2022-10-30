@extends('dashboard.koordinator.main')
@section('container')
    <main class="form-signin text-center mt-5 mb-5">
        <h1>Set Status</h1>

        @if (isset($mahasiswa1, $mahasiswa2, $info_mhs))
            {{-- tampil data mahasiswa --}}
            <div class="row">

                {{-- Mahasiswa 1 --}}
                <div class="col">
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top @error('nim1') is-invalid rounded @enderror"
                            name="nim1" id="nim1" placeholder="NIM Mahasiswa 1" readonly value="{{ $info_mhs->nim1 }}">
                        <label for="nim1">NIM Mahasiswa 1</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control @error('nama1') is-invalid rounded @enderror"
                            name="nama1" id="nama1" placeholder="Nama Mahasiswa 1" readonly
                            value="{{ $info_mhs->nama1 }}">
                        <label for="nama1">Nama Mahasiswa 1</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control @error('doswal1') is-invalid rounded @enderror"
                            name="doswal1" id="doswal1" placeholder="Nama Mahasiswa 1" readonly
                            value="{{ $info_mhs->doswal1 }}">
                        <label for="doswal1">Nama Dosen Wali</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control @error('peminatan1') is-invalid rounded @enderror"
                            name="peminatan1" id="peminatan1" placeholder="Peminatan" readonly
                            value="{{ $info_mhs->peminatan1 }}">
                        <label for="peminatan1">Peminatan</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text"
                            class="form-control {{ $info_mhs->ipk1 < 2.8 ? 'is-invalid' : '' }} @error('ipk1') is-invalid rounded @enderror"
                            name="ipk1" id="ipk1" placeholder="IPK" readonly value="{{ $info_mhs->ipk1 }}">
                        <label for="ipk1">IPK</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text"
                            class="form-control {{ $info_mhs->t_sks1 < 90 ? 'is-invalid' : '' }} @error('t_sks1') is-invalid rounded @enderror"
                            name="t_sks1" id="t_sks1" placeholder="Total SKS" readonly value="{{ $info_mhs->t_sks1 }}">
                        <label for="t_sks1">Total SKS</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text"
                            class="form-control rounded-bottom @error('semester1') is-invalid rounded @enderror"
                            name="semester1" id="semester1" placeholder="Semester" readonly
                            value="{{ $info_mhs->semester1 }}">
                        <label for="semester1">Semester</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control {{ $info_mhs->jum_d1 > 0 ? 'is-invalid' : '' }}"
                            name="jum_d1" id="jum_d1" readonly value="{{ $info_mhs->jum_d1 }}">
                        <label for="jum_d1" class="form-label">Jumlah Nilai D</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control rounded-top @error('mk_d1') is-invalid rounded @enderror"
                            name="mk_d1" id="mk_d1" placeholder="MK Nilai D" readonly value="{{ $info_mhs->mk_d1 }}">
                        <label for="mk_d">MK Nilai D</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control {{ $info_mhs->jum_e1 > 0 ? 'is-invalid' : '' }}"
                            name="jum_e1" id="jum_e1" readonly value="{{ $info_mhs->jum_e1 }}">
                        <label for="jum_e1" class="form-label">Jumlah Nilai E</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control rounded-top @error('mk_e1') is-invalid rounded @enderror"
                            name="mk_e1" id="mk_e1" placeholder="MK Nilai E" readonly value="{{ $info_mhs->mk_e1 }}"
                            value="{{ old('mk_e1') }}">
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
                        <label for="appl1" class="form-label">Nilai Analisis dan Perancangan Perangkat Lunak</label>
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
                </div>

                {{-- Mahasiswa 2 --}}
                <div class="col">
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top @error('nim2') is-invalid rounded @enderror"
                            name="nim2" id="nim2" placeholder="NIM Mahasiswa 2" required
                            value="{{ $info_mhs->nim2 }}">
                        <label for="nim2">NIM Mahasiswa 2</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control @error('nama2') is-invalid rounded @enderror"
                            name="nama2" id="nama2" placeholder="Nama Mahasiswa 2" required
                            value="{{ $info_mhs->nama2 }}">
                        <label for="nama2">Nama Mahasiswa 2</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control @error('doswal2') is-invalid rounded @enderror"
                            name="doswal2" id="doswal2" placeholder="Nama Mahasiswa 1" required
                            value="{{ $info_mhs->doswal2 }}">
                        <label for="doswal2">Nama Dosen Wali</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control @error('peminatan2') is-invalid rounded @enderror"
                            name="peminatan2" id="peminatan2" placeholder="Peminatan" required
                            value="{{ $info_mhs->peminatan2 }}">
                        <label for="peminatan2">Peminatan</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text"
                            class="form-control {{ $info_mhs->ipk2 < 2.8 ? 'is-invalid' : '' }} @error('ipk2') is-invalid rounded @enderror"
                            name="ipk2" id="ipk2" placeholder="IPK" required value="{{ $info_mhs->ipk2 }}">
                        <label for="ipk2">IPK</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text"
                            class="form-control {{ $info_mhs->t_sks2 < 90 ? 'is-invalid' : '' }} @error('t_sks2') is-invalid rounded @enderror"
                            name="t_sks2" id="t_sks2" placeholder="Total SKS" required
                            value="{{ $info_mhs->t_sks2 }}">
                        <label for="t_sks2">Total SKS</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text"
                            class="form-control rounded-bottom @error('semester1') is-invalid rounded @enderror"
                            name="semester1" id="semester1" placeholder="Semester" required
                            value="{{ $info_mhs->semester2 }}">
                        <label for="semester1">Semester</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control {{ $info_mhs->jum_d2 > 0 ? 'is-invalid' : '' }}"
                            name="jum_d2" id="jum_d2" readonly value="{{ $info_mhs->jum_d2 }}">
                        <label for="jum_d2" class="form-label">Jumlah Nilai D</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text"
                            class="form-control rounded-top @error('mk_d2') is-invalid rounded @enderror" name="mk_d2"
                            id="mk_d2" placeholder="MK Nilai D" required value="{{ $info_mhs->mk_d2 }}">
                        <label for="mk_d2">MK Nilai D</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text" class="form-control {{ $info_mhs->jum_e2 > 0 ? 'is-invalid' : '' }}"
                            name="jum_e2" id="jum_e2" readonly value="{{ $info_mhs->jum_e2 }}">
                        <label for="jum_e2" class="form-label">Jumlah Nilai E</label>
                    </div>
                    <div class=" form-floating">
                        <input type="text"
                            class="form-control rounded-top @error('mk_e2') is-invalid rounded @enderror" name="mk_e2"
                            id="mk_e2" placeholder="MK Nilai E" required value="{{ $info_mhs->mk_e2 }}">
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
                        <label for="p_algoritma2" class="form-label">Nilai Praktikum Algoritma dan Pemograman</label>
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
                        <label for="appl2" class="form-label">Nilai Analisis dan Perancangan Perangkat Lunak</label>
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
                </div>
            </div>

            {{-- tabel lihat hasil data --}}
            <div class="row">
                <table class="table table-striped table-hover table-sm mt-3 mb-3" cellpadding="10">
                    <tr>
                        <td> Total </td>
                        <td> 42</td>
                    </tr>
                    <tr>
                        @inject('DashboardKoor', 'App\Http\Controllers\DashboardKoorController')
                        <td> Memenuhi </td>
                        <td> {{ 42 - ($DashboardKoor::menghitung_total_tidak_memenuhi($id) + $DashboardKoor::menghitung_total_bersyarat($id)) }} </td>
                    </tr>
                    <tr>
                        @inject('DashboardKoor', 'App\Http\Controllers\DashboardKoorController')
                        <td> Tidak memenuhi
                        <td> {{ $DashboardKoor::menghitung_total_tidak_memenuhi($id) }} </td>
                    </tr>
                    <tr>
                        @inject('DashboardKoor', 'App\Http\Controllers\DashboardKoorController')
                        <td> Bersyarat
                        <td> {{ $DashboardKoor::menghitung_total_bersyarat($id) }} </td>
                    </tr>
                </table>
            </div>
        @endif

        {{-- form ubah status --}}
        <div class="row">
            <form action="/koorkp/set-status/{{ $datas->id }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <select type="text" class="form-select" name="status_mhsw1" id="status_mhsw1">
                                <option>Memenuhi </option>
                                <option>Tidak Memenuhi </option>
                                <option>Bersyarat </option>
                            </select>
                            <label for="status_mhsw1" class="form-label">Status Mahasiswa1</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <select type="text" class="form-select" name="status_mhsw2" id="status_mhsw2">
                                <option>Memenuhi </option>
                                <option>Tidak Memenuhi </option>
                                <option>Bersyarat </option>
                            </select>
                            <label for="status_mhsw2" class="form-label">Status Mahasiswa2</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <select type="text" class="form-select" name="status_klmpk" id="status_klmpk">
                                <option>Memenuhi </option>
                                <option>Tidak Memenuhi </option>
                                <option>Bersyarat </option>
                            </select>
                            <label for="status_klmpk" class="form-label">Status Kelompok</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <select type="text" class="form-select" name="status_akhir" id="status_akhir">
                                <option>Memenuhi </option>
                                <option>Tidak Memenuhi </option>
                                <option>Bersyarat </option>
                            </select>
                            <label for="status_akhir" class="form-label">Status Akhir</label>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-block">
                        <a href="/koorkp" class="btn bg-primary mt-3" role="button">Kembali</a>
                        <button type="submit" class="btn bg-warning mt-3">Ubah Status</button>
                    </div>
            </form>
        </div>
    </main>
@endsection
