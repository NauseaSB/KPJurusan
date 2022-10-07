@extends('dashboard.layout.main')

@section('container')

    <body>

        <main class="form-signin text-center">
            <form action="/daftarkp" method="post" enctype="multipart/form-data">
                @csrf
                <h1 class="h3 mt-3 mb-3 fw-normal">Daftar KP Tahap 1</h1>

                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top @error('nim1') is-invalid rounded @enderror"
                                name="nim1" id="nim1" placeholder="NIM Mahasiswa 1" required
                                value="{{ old('nim1') }}">
                            <label for="nim1">NIM Mahasiswa 1</label>
                            @error('nim1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('nama1') is-invalid rounded @enderror"
                                name="nama1" id="nama1" placeholder="Nama Mahasiswa 1" required
                                value="{{ old('nama1') }}">
                            <label for="nama1">Nama Mahasiswa 1</label>
                            @error('nama1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('doswal1') is-invalid rounded @enderror"
                                name="doswal1" id="doswal1" placeholder="Nama Mahasiswa 1" required
                                value="{{ old('doswal1') }}">
                            <label for="doswal1">Nama Dosen Wali</label>
                            @error('doswal1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('peminatan1') is-invalid rounded @enderror"
                                name="peminatan1" id="peminatan1" placeholder="Peminatan" required
                                value="{{ old('peminatan1') }}">
                            <label for="peminatan1">Peminatan</label>
                            @error('peminatan1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('ipk1') is-invalid rounded @enderror"
                                name="ipk1" id="ipk1" placeholder="IPK" required value="{{ old('ipk1') }}">
                            <label for="ipk1">IPK</label>
                            @error('ipk1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('t_sks1') is-invalid rounded @enderror"
                                name="t_sks1" id="t_sks1" placeholder="Total SKS" required value="{{ old('t_sks1') }}">
                            <label for="t_sks1">Total SKS</label>
                            @error('t_sks1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-bottom @error('semester1') is-invalid rounded @enderror"
                                name="semester1" id="semester1" placeholder="Semester" required
                                value="{{ old('semester1') }}">
                            <label for="semester1">Semester</label>
                            @error('semester1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('jum_d1') is-invalid rounded @enderror"
                                name="jum_d1" id="jum_d1" placeholder="Jumlah Nilai D" required
                                value="{{ old('jum_d1') }}">
                            <label for="jum_d1">Jumlah Nilai D</label>
                            @error('jum_d1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('mk_d1') is-invalid rounded @enderror" name="mk_d1"
                                id="mk_d1" placeholder="MK Nilai D" required value="{{ old('mk_d1') }}">
                            <label for="mk_d1">MK Nilai D</label>
                            @error('mk_d1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('jum_e1') is-invalid rounded @enderror"
                                name="jum_e1" id="jum_e1" placeholder="Jumlah Nilai E" required
                                value="{{ old('jum_e1') }}">
                            <label for="jum_e1">Jumlah Nilai E</label>
                            @error('jum_e1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('mk_e1') is-invalid rounded @enderror"
                                name="mk_e1" id="mk_e1" placeholder="MK Nilai E" required
                                value="{{ old('mk_e1') }}">
                            <label for="mk_e1">MK Nilai E</label>
                            @error('mk_e1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating  mt-2">
                            <select class="form-select" name="algo1" id="algo1">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="algo1">Nilai Algoritma dan Pemrograman</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_algo1" id="p_algo1">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="p_algo1">Nilai Praktikum Algoritma dan Pemrograman</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="strukdat1" id="strukdat1">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="strukdat1">Nilai Struktur Data</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_strukdat1" id="p_strukdat1">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="p_strukdat1">Nilai Praktikum Struktur Data</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="basdat1" id="basdat1">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="basdat1">Nilai Basis Data</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_basdat1" id="p_basdat1">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="p_basdat1">Nilai Praktikum Basis Data</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="rpl1" id="rpl1">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="rpl1">Nilai Rekayasa Perangkat Lunak</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="appl1" id="appl1">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="appl1">Nilai Analisis dan Perancangan Perangkat Lunak</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="progweb1" id="progweb1">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="progweb1">Nilai Pemrograman Web</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_progweb1" id="p_progweb1">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="p_progweb1">Nilai Praktikum Pemrograman Web</label>
                        </div>
                        {{-- <div class="form-floating">
                            <select class="form-select" name="progweb1" id="progweb1">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="progweb1">Nilai Pemrograman Web</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_progweb1" id="p_progweb1">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="p_progweb1">Nilai Praktikum Pemrograman Web</label>
                        </div> --}}
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="khs1" class="form-label mt-2">Upload KHS</label>
                                <input class="form-control" type="file" id="khs1" name="khs1">
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="krs1" class="form-label">Upload KRS</label>
                                <input class="form-control" type="file" id="krs1" name="krs1">
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="ktm1" class="form-label">Upload KTM</label>
                                <input class="form-control" type="file" id="ktm1" name="ktm1">
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="p_foto1" class="form-label">Upload Pas Foto</label>
                                <input class="form-control" type="file" id="p_foto1" name="p_foto1">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('nim2') is-invalid rounded @enderror"
                                name="nim2" id="nim2" placeholder="NIM Mahasiswa 2" required
                                value="{{ old('nim2') }}">
                            <label for="nim2">NIM Mahasiswa 2</label>
                            @error('nim2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('nama2') is-invalid rounded @enderror"
                                name="nama2" id="nama2" placeholder="Nama Mahasiswa 2" required
                                value="{{ old('nama2') }}">
                            <label for="nama2">Nama Mahasiswa 2</label>
                            @error('nama2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('doswal2') is-invalid rounded @enderror"
                                name="doswal2" id="doswal2" placeholder="Nama Dosen Wali" required
                                value="{{ old('doswal2') }}">
                            <label for="doswal2">Nama Dosen Wali</label>
                            @error('doswal2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('peminatan2') is-invalid rounded @enderror"
                                name="peminatan2" id="peminatan2" placeholder="Peminatan" required
                                value="{{ old('peminatan2') }}">
                            <label for="peminatan2">Peminatan</label>
                            @error('peminatan2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('ipk2') is-invalid rounded @enderror"
                                name="ipk2" id="ipk2" placeholder="IPK" required value="{{ old('ipk2') }}">
                            <label for="ipk2">IPK</label>
                            @error('ipk2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('t_sks2') is-invalid rounded @enderror"
                                name="t_sks2" id="t_sks2" placeholder="Total SKS" required
                                value="{{ old('t_sks2') }}">
                            <label for="t_sks2">Total SKS</label>
                            @error('t_sks2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-bottom @error('semester2') is-invalid rounded @enderror"
                                name="semester2" id="semester2" placeholder="Semester" required
                                value="{{ old('semester2') }}">
                            <label for="semester2">Semester</label>
                            @error('semester2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('jum_d2') is-invalid rounded @enderror"
                                name="jum_d2" id="jum_d2" placeholder="Jumlah Nilai D" required
                                value="{{ old('jum_d2') }}">
                            <label for="jum_d2">Jumlah Nilai D</label>
                            @error('jum_d2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('mk_d2') is-invalid rounded @enderror"
                                name="mk_d2" id="mk_d2" placeholder="MK Nilai D" required
                                value="{{ old('mk_d2') }}">
                            <label for="mk_d2">MK Nilai D</label>
                            @error('mk_d2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('jum_e2') is-invalid rounded @enderror"
                                name="jum_e2" id="jum_e2" placeholder="Jumlah Nilai E" required
                                value="{{ old('jum_e2') }}">
                            <label for="jum_e2">Jumlah Nilai E</label>
                            @error('jum_e2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('mk_e2') is-invalid rounded @enderror"
                                name="mk_e2" id="mk_e2" placeholder="MK Nilai E" required
                                value="{{ old('mk_e2') }}">
                            <label for="mk_e2">MK Nilai E</label>
                            @error('mk_e2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mt-2">
                            <select class="form-select" name="algo2" id="algo2">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="algo2">Nilai Algoritma dan Pemrograman</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_algo2" id="p_algo2">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="p_algo2">Nilai Praktikum Algoritma dan Pemrograman</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="strukdat2" id="strukdat2">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="strukdat2">Nilai Struktur Data</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_strukdat2" id="p_strukdat2">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="p_strukdat2">Nilai Praktikum Struktur Data</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="basdat2" id="basdat2">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="basdat2">Nilai Basis Data</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_basdat2" id="p_basdat2">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="p_basdat2">Nilai Praktikum Basis Data</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="rpl2" id="rpl2">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="rpl2">Nilai Rekayasa Perangkat Lunak</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="appl2" id="appl2">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="appl2">Nilai Analisis dan Perancangan Perangkat Lunak</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="progweb2" id="progweb2">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="progweb2">Nilai Pemrograman Web</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_progweb2" id="p_progweb2">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="p_progweb2">Nilai Praktikum Pemrograman Web</label>
                        </div>
                        {{-- <div class="form-floating">
                            <select class="form-select" name="progweb1" id="progweb1">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="progweb1">Nilai Pemrograman Web</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_progweb1" id="p_progweb1">
                                <option selected>Nilai</option>
                                <option value="A">A</option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="BC">BC</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <label for="p_progweb1">Nilai Praktikum Pemrograman Web</label>
                        </div> --}}
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="khs2" class="form-label mt-2">Upload KHS</label>
                                <input class="form-control" type="file" id="khs2" name="khs2">
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="krs2" class="form-label">Upload KRS</label>
                                <input class="form-control" type="file" id="krs2" name="krs2">
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="ktm2" class="form-label">Upload KTM</label>
                                <input class="form-control" type="file" id="ktm2" name="ktm2">
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="p_foto2" class="form-label">Upload Pas Foto</label>
                                <input class="form-control" type="file" id="p_foto2" name="p_foto2">
                            </div>
                        </div>
                    </div>
                    <div class="form-floating">
                        <div class="mb-3">
                            <label for="proposal" class="form-label">Upload Proposal</label>
                            <input class="form-control" type="file" id="proposal" name="proposal">
                        </div>
                    </div>
                    <div class="form-floating">
                        <div class="mb-3">
                            <label for="izin_kp" class="form-label">Upload Pernyataan Izin KP</label>
                            <input class="form-control" type="file" id="izin_kp" name="izin_kp">
                        </div>
                    </div>
                </div>


                <button class="mt-3 w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
            </form>
        </main>

    </body>
@endsection
