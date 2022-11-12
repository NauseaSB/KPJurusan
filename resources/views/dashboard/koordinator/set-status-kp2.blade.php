@extends('dashboard.koordinator.main')
@section('container')
    <main class="form-signin text-center mt-5 mb-5">
        <h1>Set Status</h1>

        <div class="row">
            <form action="/data-kp2/set-status/{{ $datas->id }}" method="POST">
                @csrf
                @if (isset($datakp2))
                    {{-- tampil data mahasiswa --}}
                    <div class="row">

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
                                    <select class="form-select" name="s_ipk1" id="s_ipk1">
                                        <option @if ($status2->s_ipk1 == 'Memenuhi') selected @endif value="Memenuhi">
                                            Memenuhi</option>
                                        <option @if ($status2->s_ipk1 == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                            Tidak Memenuhi</option>
                                        <option @if ($status2->s_ipk1 == 'Bersyarat') selected @endif value="Bersyarat">
                                            Bersyarat</option>
                                    </select>
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
                                    <select class="form-select" name="s_sks1" id="s_sks1">
                                        <option @if ($status2->s_sks1 == 'Memenuhi') selected @endif value="Memenuhi">
                                            Memenuhi</option>
                                        <option @if ($status2->s_sks1 == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                            Tidak Memenuhi</option>
                                        <option @if ($status2->s_sks1 == 'Bersyarat') selected @endif value="Bersyarat">
                                            Bersyarat</option>
                                    </select>
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
                                    <select class="form-select" name="s_jum_d1" id="s_jum_d1">
                                        <option @if ($status2->s_jum_d1 == 'Memenuhi') selected @endif value="Memenuhi">
                                            Memenuhi</option>
                                        <option @if ($status2->s_jum_d1 == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                            Tidak Memenuhi</option>
                                        <option @if ($status2->s_jum_d1 == 'Bersyarat') selected @endif value="Bersyarat">
                                            Bersyarat</option>
                                    </select>
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
                                    <select class="form-select" name="s_jum_e1" id="s_jum_e1">
                                        <option @if ($status2->s_jum_e1 == 'Memenuhi') selected @endif value="Memenuhi">
                                            Memenuhi</option>
                                        <option @if ($status2->s_jum_e1 == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                            Tidak Memenuhi</option>
                                        <option @if ($status2->s_jum_e1 == 'Bersyarat') selected @endif value="Bersyarat">
                                            Bersyarat</option>
                                    </select>
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
                                    <select class="form-select" name="s_khs1" id="s_khs1">
                                        <option @if ($status2->s_khs1 == 'Memenuhi') selected @endif value="Memenuhi">
                                            Memenuhi</option>
                                        <option @if ($status2->s_khs1 == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                            Tidak Memenuhi</option>
                                        <option @if ($status2->s_khs1 == 'Bersyarat') selected @endif value="Bersyarat">
                                            Bersyarat</option>
                                    </select>
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
                                    <select class="form-select" name="s_krs1" id="s_krs1">
                                        <option @if ($status2->s_krs1 == 'Memenuhi') selected @endif value="Memenuhi">
                                            Memenuhi</option>
                                        <option @if ($status2->s_krs1 == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                            Tidak Memenuhi</option>
                                        <option @if ($status2->s_krs1 == 'Bersyarat') selected @endif value="Bersyarat">
                                            Bersyarat</option>
                                    </select>
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
                                    <select class="form-select" name="s_kontrak1" id="s_kontrak1">
                                        <option @if ($status2->s_kontrak1 == 'Memenuhi') selected @endif value="Memenuhi">
                                            Memenuhi</option>
                                        <option @if ($status2->s_kontrak1 == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                            Tidak Memenuhi</option>
                                        <option @if ($status2->s_kontrak1 == 'Bersyarat') selected @endif value="Bersyarat">
                                            Bersyarat</option>
                                    </select>
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
                                    <select class="form-select" name="s_ipk2" id="s_ipk2">
                                        <option @if ($status2->s_ipk2 == 'Memenuhi') selected @endif value="Memenuhi">
                                            Memenuhi</option>
                                        <option @if ($status2->s_ipk2 == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                            Tidak Memenuhi</option>
                                        <option @if ($status2->s_ipk2 == 'Bersyarat') selected @endif value="Bersyarat">
                                            Bersyarat</option>
                                    </select>
                                </div>
                            </div>
                            <div class=" form-floating">
                                <input type="text"
                                    class="form-control {{ $datakp2->t_sks2 < 90 ? 'is-invalid' : '' }}" name="t_sks2"
                                    id="t_sks2" placeholder="Total SKS" readonly value="{{ $datakp2->t_sks2 }}">
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
                                    <select class="form-select" name="s_sks2" id="s_sks2">
                                        <option @if ($status2->s_sks2 == 'Memenuhi') selected @endif value="Memenuhi">
                                            Memenuhi</option>
                                        <option @if ($status2->s_sks2 == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                            Tidak Memenuhi</option>
                                        <option @if ($status2->s_sks2 == 'Bersyarat') selected @endif value="Bersyarat">
                                            Bersyarat</option>
                                    </select>
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
                                    <select class="form-select" name="s_jum_d2" id="s_jum_d2">
                                        <option @if ($status2->s_jum_d2 == 'Memenuhi') selected @endif value="Memenuhi">
                                            Memenuhi</option>
                                        <option @if ($status2->s_jum_d2 == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                            Tidak Memenuhi</option>
                                        <option @if ($status2->s_jum_d2 == 'Bersyarat') selected @endif value="Bersyarat">
                                            Bersyarat</option>
                                    </select>
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
                                    <select class="form-select" name="s_jum_e2" id="s_jum_e2">
                                        <option @if ($status2->s_jum_e2 == 'Memenuhi') selected @endif value="Memenuhi">
                                            Memenuhi</option>
                                        <option @if ($status2->s_jum_e2 == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                            Tidak Memenuhi</option>
                                        <option @if ($status2->s_jum_e2 == 'Bersyarat') selected @endif value="Bersyarat">
                                            Bersyarat</option>
                                    </select>
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
                                    <select class="form-select" name="s_khs2" id="s_khs2">
                                        <option @if ($status2->s_khs2 == 'Memenuhi') selected @endif value="Memenuhi">
                                            Memenuhi</option>
                                        <option @if ($status2->s_khs2 == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                            Tidak Memenuhi</option>
                                        <option @if ($status2->s_khs2 == 'Bersyarat') selected @endif value="Bersyarat">
                                            Bersyarat</option>
                                    </select>
                                </div>
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
                                    <select class="form-select" name="s_krs2" id="s_krs2">
                                        <option @if ($status2->s_krs2 == 'Memenuhi') selected @endif value="Memenuhi">
                                            Memenuhi</option>
                                        <option @if ($status2->s_krs2 == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                            Tidak Memenuhi</option>
                                        <option @if ($status2->s_krs2 == 'Bersyarat') selected @endif value="Bersyarat">
                                            Bersyarat</option>
                                    </select>
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
                                    <select class="form-select" name="s_kontrak2" id="s_kontrak2">
                                        <option @if ($status2->s_kontrak2 == 'Memenuhi') selected @endif value="Memenuhi">
                                            Memenuhi</option>
                                        <option @if ($status2->s_kontrak2 == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                            Tidak Memenuhi</option>
                                        <option @if ($status2->s_kontrak2 == 'Bersyarat') selected @endif value="Bersyarat">
                                            Bersyarat</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        {{-- Materi --}}
                        <div class="row mt-3">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control rounded-top @error('judul_kp') is-invalid rounded @enderror"
                                        name="judul_kp" id="judul_kp" placeholder="Judul Kerja Praktik" readonly
                                        @if (isset($datakp2->judul_kp)) value="{{ $datakp2->judul_kp }}"
                                @else
                                    value="{{ old('judul_kp') }}" @endif>
                                    <label for="judul_kp">Judul Kerja Praktik</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control rounded-top @error('tempat_kp_lapangan') is-invalid rounded @enderror"
                                        name="tempat_kp_lapangan" id="tempat_kp_lapangan"
                                        placeholder="Judul Kerja Praktik" readonly
                                        @if (isset($datakp2->tempat_kp_lapangan)) value="{{ $datakp2->tempat_kp_lapangan }}"
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
                                        @if (isset($datakp2->alamat)) value="{{ $datakp2->alamat }}"
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
                                        name="telp_tempat_kp" id="telp_tempat_kp" placeholder="Judul Kerja Praktik"
                                        readonly
                                        @if (isset($datakp2->telp_tempat_kp)) value="{{ $datakp2->telp_tempat_kp }}"
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
                                        @if (isset($datakp2->nama_pembimbing_lapangan)) value="{{ $datakp2->nama_pembimbing_lapangan }}"
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
                                        @if (isset($datakp2->nama_penanggung_jawab_lapangan)) value="{{ $datakp2->nama_penanggung_jawab_lapangan }}"
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
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control rounded-top @error('dosbim') is-invalid rounded @enderror"
                                        name="dosbim" id="dosbim" placeholder="Dosen Pembimbing" readonly
                                        @if (isset($datakp2->dosbim)) value="{{ $datakp2->dosbim }}" @else value="{{ old('dosbim') }}" @endif>
                                    <label for="dosbim">Dosen Pembimbing</label>
                                    @error('dosbim')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
                                            <a href="storage/{{ $datakp2->k_b_akademik }}" target="_blank"
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
                                            <a href="storage/{{ $datakp2->k_b_lapangan }}" target="_blank"
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
                                        <select class="form-select" name="s_b_akademik" id="s_b_akademik">
                                            <option @if ($status2->s_b_akademik == 'Memenuhi') selected @endif value="Memenuhi">
                                                Memenuhi</option>
                                            <option @if ($status2->s_b_akademik == 'Tidak Memenuhi') selected @endif
                                                value="Tidak Memenuhi">
                                                Tidak Memenuhi</option>
                                            <option @if ($status2->s_b_akademik == 'Bersyarat') selected @endif value="Bersyarat">
                                                Bersyarat</option>
                                        </select>
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
                                        <select class="form-select" name="s_k_akademik" id="s_k_akademik">
                                            <option @if ($status2->s_k_akademik == 'Memenuhi') selected @endif value="Memenuhi">
                                                Memenuhi</option>
                                            <option @if ($status2->s_k_akademik == 'Tidak Memenuhi') selected @endif
                                                value="Tidak Memenuhi">
                                                Tidak Memenuhi</option>
                                            <option @if ($status2->s_k_akademik == 'Bersyarat') selected @endif value="Bersyarat">
                                                Bersyarat</option>
                                        </select>
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
                                        <select class="form-select" name="s_b_lapangan" id="s_b_lapangan">
                                            <option @if ($status2->s_b_lapangan == 'Memenuhi') selected @endif value="Memenuhi">
                                                Memenuhi</option>
                                            <option @if ($status2->s_b_lapangan == 'Tidak Memenuhi') selected @endif
                                                value="Tidak Memenuhi">
                                                Tidak Memenuhi</option>
                                            <option @if ($status2->s_b_lapangan == 'Bersyarat') selected @endif value="Bersyarat">
                                                Bersyarat</option>
                                        </select>
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
                                        <select class="form-select" name="s_k_lapangan" id="s_k_lapangan">
                                            <option @if ($status2->s_k_lapangan == 'Memenuhi') selected @endif value="Memenuhi">
                                                Memenuhi</option>
                                            <option @if ($status2->s_k_lapangan == 'Tidak Memenuhi') selected @endif
                                                value="Tidak Memenuhi">
                                                Tidak Memenuhi</option>
                                            <option @if ($status2->s_k_lapangan == 'Bersyarat') selected @endif value="Bersyarat">
                                                Bersyarat</option>
                                        </select>
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
                                    <select class="form-select" name="s_surat_kelayakan" id="s_surat_kelayakan">
                                        <option @if ($status2->s_surat_kelayakan == 'Memenuhi') selected @endif value="Memenuhi">
                                            Memenuhi</option>
                                        <option @if ($status2->s_surat_kelayakan == 'Tidak Memenuhi') selected @endif
                                            value="Tidak Memenuhi">
                                            Tidak Memenuhi</option>
                                        <option @if ($status2->s_surat_kelayakan == 'Bersyarat') selected @endif value="Bersyarat">
                                            Bersyarat</option>
                                    </select>
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
                                    <select class="form-select" name="s_form_daftar" id="s_form_daftar">
                                        <option @if ($status2->s_form_daftar == 'Memenuhi') selected @endif value="Memenuhi">
                                            Memenuhi</option>
                                        <option @if ($status2->s_form_daftar == 'Tidak Memenuhi') selected @endif
                                            value="Tidak Memenuhi">
                                            Tidak Memenuhi</option>
                                        <option @if ($status2->s_form_daftar == 'Bersyarat') selected @endif value="Bersyarat">
                                            Bersyarat</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- tabel lihat hasil data --}}
                    <div class="row">
                        <table class="table table-striped table-hover table-sm mt-3 mb-3" cellpadding="10">
                            <tr>
                                <td> Total </td>
                                <td> 20</td>
                            </tr>
                            <tr>
                                @inject('DashboardKP2', 'App\Http\Controllers\DashboardKP2Controller')
                                <td> Memenuhi </td>
                                <td> {{ 20 - ($DashboardKP2::total_tidak_memenuhi($id) + $DashboardKP2::total_bersyarat($id)) }}
                                </td>
                            </tr>
                            <tr>
                                @inject('DashboardKP2', 'App\Http\Controllers\DashboardKP2Controller')
                                <td> Tidak memenuhi
                                <td> {{ $DashboardKP2::total_tidak_memenuhi($id) }} </td>
                            </tr>
                            <tr>
                                @inject('DashboardKP2', 'App\Http\Controllers\DashboardKP2Controller')
                                <td> Bersyarat
                                <td> {{ $DashboardKP2::total_bersyarat($id) }} </td>
                            </tr>
                        </table>
                    </div>
                @endif

                {{-- form ubah status --}}
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <select type="text" class="form-select" name="s_mhs1" id="s_mhs1">
                                @if (isset($status2->s_mhs1))
                                    <option @if ($status2->s_mhs1 == 'Memenuhi') selected @endif value="Memenuhi">Memenuhi
                                    </option>
                                    <option @if ($status2->s_mhs1 == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                        Tidak Memenuhi
                                    </option>
                                    <option @if ($status2->s_mhs1 == 'Bersyarat') selected @endif value="Bersyarat">
                                        Bersyarat
                                    </option>
                                @else
                                    <option value="Memenuhi">Memenuhi</option>
                                    <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                    <option value="Bersyarat">Bersyarat</option>
                                @endif
                            </select>
                            <label for="s_mhs1" class="form-label">Status Mahasiswa1</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <select type="text" class="form-select" name="s_mhs2" id="s_mhs2">
                                @if (isset($status2->s_mhs2))
                                    <option @if ($status2->s_mhs2 == 'Memenuhi') selected @endif value="Memenuhi">Memenuhi
                                    </option>
                                    <option @if ($status2->s_mhs2 == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                        Tidak Memenuhi
                                    </option>
                                    <option @if ($status2->s_mhs2 == 'Bersyarat') selected @endif value="Bersyarat">
                                        Bersyarat
                                    </option>
                                @else
                                    <option value="Memenuhi">Memenuhi</option>
                                    <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                    <option value="Bersyarat">Bersyarat</option>
                                @endif
                            </select>
                            <label for="s_mhs2" class="form-label">Status Mahasiswa2</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <select type="text" class="form-select" name="s_kelompok" id="s_kelompok">
                                @if (isset($status2->s_kelompok))
                                    <option @if ($status2->s_kelompok == 'Memenuhi') selected @endif value="Memenuhi">Memenuhi
                                    </option>
                                    <option @if ($status2->s_kelompok == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                        Tidak Memenuhi
                                    </option>
                                    <option @if ($status2->s_kelompok == 'Bersyarat') selected @endif value="Bersyarat">
                                        Bersyarat
                                    </option>
                                @else
                                    <option value="Memenuhi">Memenuhi</option>
                                    <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                    <option value="Bersyarat">Bersyarat</option>
                                @endif
                            </select>
                            <label for="s_kelompok" class="form-label">Status Kelompok</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <select type="text" class="form-select" name="s_akhir" id="s_akhir">
                                @if (isset($status2->s_akhir))
                                    <option @if ($status2->s_akhir == 'Memenuhi') selected @endif value="Memenuhi">Memenuhi
                                    </option>
                                    <option @if ($status2->s_akhir == 'Belum Memenuhi') selected @endif value="Belum Memenuhi">
                                        Belum Memenuhi
                                    </option>
                                    <option @if ($status2->s_akhir == 'Tidak Memenuhi') selected @endif value="Tidak Memenuhi">
                                        Tidak Memenuhi
                                    </option>
                                    <option @if ($status2->s_akhir == 'Bersyarat') selected @endif value="Bersyarat">
                                        Bersyarat
                                    </option>
                                @else
                                    <option value="Memenuhi">Memenuhi</option>
                                    <option value="Tidak Memenuhi">Belum Memenuhi</option>
                                    <option value="Tidak Memenuhi">Tidak Memenuhi</option>
                                    <option value="Bersyarat">Bersyarat</option>
                                @endif
                            </select>
                            <label for="s_akhir" class="form-label">Status Akhir</label>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-block">
                        <a href="/data-kp2" class="btn bg-primary mt-3" role="button">Kembali</a>
                        <button type="submit" class="btn bg-warning mt-3">Ubah Status</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
