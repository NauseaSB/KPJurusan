@extends('dashboard.layout.main')

@section('container')

    <body>

        <main class="form-signin text-center">
            <form action="/edit-data-kp2" method="post" enctype="multipart/form-data">
                @csrf
                <h1 class="h3 mt-3 mb-3 fw-normal">Edit Daftar KP Tahap 2</h1>

                <div class="row">
                    {{-- Mahasiswa 1 --}}
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top @error('nim1') is-invalid rounded @enderror"
                                name="nim1" id="nim1" placeholder="NIM Mahasiswa 1" required
                                @if (isset($datakp2->nim1)) value="{{ $datakp2->nim1 }}"
                                @else
                                    value="{{ old('nim1') }}" @endif>
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
                                @if (isset($datakp2->nama1)) value="{{ $datakp2->nama1 }}"
                                @else
                                    value="{{ old('nama1') }}" @endif>
                            <label for="nama1">Nama Mahasiswa 1</label>
                            @error('nama1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('doswal1') is-invalid rounded @enderror"
                                name="doswal1" id="doswal1" placeholder="Nama Dosen Wali" required
                                @if (isset($datakp2->doswal1)) value="{{ $datakp2->doswal1 }}"
                                @else
                                    value="{{ old('doswal1') }}" @endif>
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
                                @if (isset($datakp2->peminatan1)) value="{{ $datakp2->peminatan1 }}"
                                @else
                                    value="{{ old('peminatan1') }}" @endif>
                            <label for="peminatan1">Peminatan</label>
                            @error('peminatan1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('ipk1') is-invalid rounded @enderror"
                                name="ipk1" id="ipk1" placeholder="IPK" required
                                @if (isset($datakp2->ipk1)) value="{{ $datakp2->ipk1 }}"
                                @else
                                    value="{{ old('ipk1') }}" @endif>
                            <label for="ipk1">IPK</label>
                            @error('ipk1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('t_sks1') is-invalid rounded @enderror"
                                name="t_sks1" id="t_sks1" placeholder="Total SKS" required
                                @if (isset($datakp2->t_sks1)) value="{{ $datakp2->t_sks1 }}"
                                @else
                                    value="{{ old('t_sks1') }}" @endif>
                            <label for="t_sks1">Total SKS</label>
                            @error('t_sks1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('jum_d1') is-invalid rounded @enderror"
                                name="jum_d1" id="jum_d1" placeholder="Jumlah Nilai D" required
                                @if (isset($datakp2->jum_d1)) value="{{ $datakp2->jum_d1 }}"
                                @else
                                    value="{{ old('jum_d1') }}" @endif>
                            <label for="jum_d1">Jumlah Nilai D</label>
                            @error('jum_d1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('mk_d1') is-invalid rounded @enderror"
                                name="mk_d1" id="mk_d1" placeholder="Jumlah Nilai D"
                                @if (isset($datakp2->mk_d1)) value="{{ $datakp2->mk_d1 }}"
                                @else
                                    value="{{ old('mk_d1') }}" @endif>
                            <label for="mk_d1">MK Nilai D</label>
                            @error('mk_d1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('jum_e1') is-invalid rounded @enderror"
                                name="jum_e1" id="jum_e1" placeholder="Jumlah Nilai D" required
                                @if (isset($datakp2->jum_e1)) value="{{ $datakp2->jum_e1 }}"
                                @else
                                    value="{{ old('jum_e1') }}" @endif>
                            <label for="jum_e1">Jumlah Nilai E</label>
                            @error('jum_e1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('mk_e1') is-invalid rounded @enderror"
                                name="mk_e1" id="mk_e1" placeholder="Jumlah Nilai D"
                                @if (isset($datakp2->mk_e1)) value="{{ $datakp2->mk_e1 }}"
                                @else
                                    value="{{ old('mk_e1') }}" @endif>
                            <label for="mk_e1">MK Nilai E</label>
                            @error('mk_e1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating  mt-2 mb-3">
                            <select class="form-select" name="kontrak1" id="kontrak1">
                                @if (isset($datakp2))
                                    <option @if ($datakp2->kontrak1 == 'Sedang Kontrak') selected @endif value="Sedang Kontrak">
                                        Sedang Kontrak</option>
                                    <option @if ($datakp2->kontrak1 == 'Tidak Kontrak') selected @endif value="Tidak Kontrak">Tidak
                                        Kontrak</option>
                                @else
                                    <option value="Sedang Kontrak">Sedang Kontrak</option>
                                    <option value="Tidak Kontrak">Tidak Kontrak</option>
                                @endif
                            </select>
                            <label for="kontrak1">Kontrak Mata Kuliah Kerja Praktik</label>
                        </div>
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
                    </div>

                    {{-- Mahasiswa 2 --}}
                    <div class="col">
                        <div class="form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('nim2') is-invalid rounded @enderror"
                                name="nim2" id="nim2" placeholder="NIM Mahasiswa 2" required
                                @if (isset($datakp2->nim2)) value="{{ $datakp2->nim2 }}"
                                @else
                                    value="{{ old('nim2') }}" @endif>
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
                                @if (isset($datakp2->nama2)) value="{{ $datakp2->nama2 }}"
                                @else
                                    value="{{ old('nama2') }}" @endif>
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
                                @if (isset($datakp2->doswal2)) value="{{ $datakp2->doswal2 }}"
                                @else
                                    value="{{ old('doswal2') }}" @endif>
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
                                @if (isset($datakp2->peminatan2)) value="{{ $datakp2->peminatan2 }}"
                                @else
                                    value="{{ old('peminatan2') }}" @endif>
                            <label for="peminatan2">Peminatan</label>
                            @error('peminatan2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('ipk2') is-invalid rounded @enderror"
                                name="ipk2" id="ipk2" placeholder="IPK" required
                                @if (isset($datakp2->ipk2)) value="{{ $datakp2->ipk2 }}"
                                @else
                                    value="{{ old('ipk2') }}" @endif>
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
                                @if (isset($datakp2->t_sks2)) value="{{ $datakp2->t_sks2 }}"
                                @else
                                    value="{{ old('t_sks2') }}" @endif>
                            <label for="t_sks2">Total SKS</label>
                            @error('t_sks2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('jum_d2') is-invalid rounded @enderror"
                                name="jum_d2" id="jum_d2" placeholder="Jumlah Nilai D" required
                                @if (isset($datakp2->jum_d2)) value="{{ $datakp2->jum_d2 }}"
                                @else
                                    value="{{ old('jum_d2') }}" @endif>
                            <label for="jum_d2">Jumlah Nilai D</label>
                            @error('jum_d2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('mk_d2') is-invalid rounded @enderror"
                                name="mk_d2" id="mk_d2" placeholder="Jumlah Nilai D"
                                @if (isset($datakp2->mk_d2)) value="{{ $datakp2->mk_d2 }}"
                                @else
                                    value="{{ old('mk_d2') }}" @endif>
                            <label for="mk_d2">MK Nilai D</label>
                            @error('mk_d2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('jum_e2') is-invalid rounded @enderror"
                                name="jum_e2" id="jum_e2" placeholder="Jumlah Nilai D" required
                                @if (isset($datakp2->jum_e2)) value="{{ $datakp2->jum_e2 }}"
                                @else
                                    value="{{ old('semester1') }}" @endif>
                            <label for="jum_e2">Jumlah Nilai E</label>
                            @error('jum_e2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('mk_e2') is-invalid rounded @enderror"
                                name="mk_e2" id="mk_e2" placeholder="Jumlah Nilai D"
                                @if (isset($datakp2->mk_e2)) value="{{ $datakp2->mk_e2 }}"
                                @else
                                    value="{{ old('semester1') }}" @endif>
                            <label for="mk_e2">MK Nilai E</label>
                            @error('mk_e2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating  mt-2 mb-3">
                            <select class="form-select" name="kontrak2" id="kontrak2">
                                @if (isset($datakp2))
                                    <option @if ($datakp2->kontrak2 == 'Sedang Kontrak') selected @endif value="Sedang Kontrak">
                                        Sedang Kontrak</option>
                                    <option @if ($datakp2->kontrak2 == 'Tidak Kontrak') selected @endif value="Tidak Kontrak">Tidak
                                        Kontrak</option>
                                @else
                                    <option value="Sedang Kontrak">Sedang Kontrak</option>
                                    <option value="Tidak Kontrak">Tidak Kontrak</option>
                                @endif
                            </select>
                            <label for="kontrak2">Kontrak Mata Kuliah Kerja Praktik</label>
                        </div>
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
                    </div>
                </div>

                {{-- Data Materi Kerja Praktik --}}
                <div class="row mt-3">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('judul_kp') is-invalid rounded @enderror"
                                name="judul_kp" id="judul_kp" placeholder="Judul Kerja Praktik" required
                                @if (isset($datakp2->judul_kp)) value="{{ $datakp2->judul_kp }}"
                                @else
                                    value="{{ old('judul_kp') }}" @endif>
                            <label for="judul_kp">Judul Kerja Praktik</label>
                            @error('judul_kp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('tempat_kp_lapangan') is-invalid rounded @enderror"
                                name="tempat_kp_lapangan" id="tempat_kp_lapangan" placeholder="Judul Kerja Praktik"
                                required
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
                                name="alamat" id="alamat" placeholder="Judul Kerja Praktik" required
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
                                name="telp_tempat_kp" id="telp_tempat_kp" placeholder="Judul Kerja Praktik" required
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
                                placeholder="Judul Kerja Praktik" required
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
                                placeholder="Judul Kerja Praktik" required
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
                                name="dosbim" id="dosbim" placeholder="Judul Kerja Praktik" required
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

                {{-- Bimbingan Akademik --}}
                <div class="row mt-3">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('jum_b_akademik') is-invalid rounded @enderror"
                                name="jum_b_akademik" id="jum_b_akademik" placeholder="Judul Kerja Praktik" required
                                @if (isset($datakp2->jum_b_akademik)) value="{{ $datakp2->jum_b_akademik }}"
                                @else value="{{ old('jum_b_akademik') }}" @endif>
                            <label for="jum_b_akademik">Jumlah Bimbingan Akademik</label>
                            @error('jum_b_akademik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <div class="mb-3">
                                <label for="k_b_akademik" class="form-label">Kartu Bimbingan Akademik</label>
                                <input class="form-control" type="file" id="k_b_akademik" name="k_b_akademik">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bimbingan Lapangan --}}
                <div class="row mt-3">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('jum_b_lapangan') is-invalid rounded @enderror"
                                name="jum_b_lapangan" id="jum_b_lapangan" placeholder="Judul Kerja Praktik" required
                                @if (isset($datakp2->jum_b_lapangan)) value="{{ $datakp2->jum_b_lapangan }}"
                                @else value="{{ old('jum_b_lapangan') }}" @endif>
                            <label for="jum_b_lapangan">Jumlah Bimbingan Lapangan</label>
                            @error('jum_b_lapangan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <div class="mb-3">
                                <label for="k_b_lapangan" class="form-label">Kartu Bimbingan Lapangan</label>
                                <input class="form-control" type="file" id="k_b_lapangan" name="k_b_lapangan">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Kelompok --}}
                <div class="row mt-3">
                    <div class="col">
                        <div class="form-floating">
                            <div class="mb-3">
                                <label for="surat_kelayakan" class="form-label">Surat Kelayakan Kerja Praktik Tahap
                                    2</label>
                                <input class="form-control" type="file" id="surat_kelayakan" name="surat_kelayakan">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <div class="mb-3">
                                <label for="form_daftar" class="form-label">Form Daftar Kerja Praktik Tahap 2</label>
                                <input class="form-control" type="file" id="form_daftar" name="form_daftar">
                            </div>
                        </div>
                    </div>
                </div>

                <button class="mt-3 w-100 btn btn-lg btn-primary" type="submit">Ubah Data</button>
            </form>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
        </main>

    </body>
@endsection
