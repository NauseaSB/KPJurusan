@extends('dashboard.layout.main')

@section('container')

    <body>
        <main class="form-signin text-center">
            <form action="/daftar-kelompok" method="post">
                @csrf
                <h1 class="h3 mt-3 mb-3 fw-normal">Edit Data Kelompok</h1>

                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top @error('nim1') is-invalid rounded @enderror"
                                name="nim1" id="nim1" placeholder="NIM Mahasiswa 1" required
                                value="{{ old('nim1', $datakelompok->mahasiswa->nim) }}">
                            <label for="nim1">NIM Mahasiswa 1</label>
                            @error('nim1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('angkatan1') is-invalid rounded @enderror"
                                name="angkatan1" id="angkatan1" placeholder="Angkatan" required
                                value="{{ old('angkatan1', $datakelompok->mahasiswa->angkatan) }}">
                            <label for="angkatan1">Angkatan</label>
                            @error('angkatan1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('nama1') is-invalid rounded @enderror"
                                name="nama1" id="nama1" placeholder="Nama Mahasiswa 1" required
                                value="{{ old('nama1', $datakelompok->mahasiswa->nama) }}">
                            <label for="nama1">Nama Mahasiswa 1</label>
                            @error('nama1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('telp1') is-invalid rounded @enderror"
                                name="telp1" id="telp1" placeholder="Nomor Telepon" required
                                value="{{ old('telp1', $datakelompok->mahasiswa->telp) }}">
                            <label for="telp1">Nomor Telepon</label>
                            @error('telp1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('doswal1') is-invalid rounded @enderror"
                                name="doswal1" id="doswal1" placeholder="Nama Mahasiswa 1" required
                                value="{{ old('doswal1', $datakelompok->mahasiswa->doswal) }}">
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
                                value="{{ old('peminatan1', $datakelompok->mahasiswa->peminatan) }}">
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
                                value="{{ old('ipk1', $datakelompok->mahasiswa->ipk) }}">
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
                                value="{{ old('t_sks1', $datakelompok->mahasiswa->t_sks) }}">
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
                                value="{{ old('semester1', $datakelompok->mahasiswa->semester) }}">
                            <label for="semester1">Semester</label>
                            @error('semester1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('t_akd1') is-invalid rounded @enderror"
                                name="t_akd1" id="t_akd1" placeholder="Tahun Akademik" required
                                value="{{ old('t_akd1', $datakelompok->mahasiswa->t_akd) }}">
                            <label for="t_akd1">Tahun Akademik</label>
                            @error('t_akd1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-bottom @error('ket_mahasiswa1') is-invalid rounded @enderror"
                                name="ket_mahasiswa1" id="ket_mahasiswa1" placeholder="Keterangan Mahasiswa" required
                                value="mahasiswa1" readonly>
                            <label for="ket_mahasiswa1">Keterangan Mahasiswa</label>
                            @error('ket_mahasiswa1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('nim2') is-invalid rounded @enderror"
                                name="nim2" id="nim2" placeholder="NIM Mahasiswa 2" required
                                value="{{ old('nim2', $datakelompok->mahasiswa2->nim) }}">
                            <label for="nim2">NIM Mahasiswa 2</label>
                            @error('nim2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('angkatan2') is-invalid rounded @enderror"
                                name="angkatan2" id="angkatan2" placeholder="Angkatan" required
                                value="{{ old('angkatan2', $datakelompok->mahasiswa2->angkatan) }}">
                            <label for="angkatan2">Angkatan</label>
                            @error('angkatan2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('nama2') is-invalid rounded @enderror"
                                name="nama2" id="nama2" placeholder="Nama Mahasiswa 2" required
                                value="{{ old('nama2', $datakelompok->mahasiswa2->nama) }}">
                            <label for="nama2">Nama Mahasiswa 2</label>
                            @error('nama2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('telp2') is-invalid rounded @enderror"
                                name="telp2" id="telp2" placeholder="Nomor Telepon" required
                                value="{{ old('telp2', $datakelompok->mahasiswa2->telp) }}">
                            <label for="telp2">Nomor Telepon</label>
                            @error('telp2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('doswal2') is-invalid rounded @enderror"
                                name="doswal2" id="doswal2" placeholder="Nama Dosen Wali" required
                                value="{{ old('doswal2', $datakelompok->mahasiswa2->doswal) }}">
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
                                value="{{ old('peminatan2', $datakelompok->mahasiswa2->peminatan) }}">
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
                                value="{{ old('ipk2', $datakelompok->mahasiswa2->ipk) }}">
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
                                value="{{ old('t_sks2', $datakelompok->mahasiswa2->t_sks) }}">
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
                                value="{{ old('semester2', $datakelompok->mahasiswa2->semester) }}">
                            <label for="semester2">Semester</label>
                            @error('semester2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('t_akd2') is-invalid rounded @enderror"
                                name="t_akd2" id="t_akd2" placeholder="Tahun Akademik" required
                                value="{{ old('t_akd2', $datakelompok->mahasiswa2->t_akd) }}">
                            <label for="t_akd2">Tahun Akademik</label>
                            @error('t_akd2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-bottom @error('ket_mahasiswa2') is-invalid rounded @enderror"
                                name="ket_mahasiswa2" id="ket_mahasiswa2" placeholder="Semester" required
                                value="mahasiswa2" readonly>
                            <label for="ket_mahasiswa2">Semester</label>
                            @error('ket_mahasiswa2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <input type="hidden" id="id1" name="id1" value="{{ $datakelompok->mahasiswa->id }}">
                <input type="hidden" id="id2" name="id2"value="{{ $datakelompok->mahasiswa2->id }}">
                <button class="mt-3 w-100 btn btn-lg btn-primary" type="submit">Ubah Data</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
            </form>
        </main>
    </body>
@endsection
