@extends('dashboard.layout.main')

@section('container')

    <body>

        <main class="form-signin text-center">
            <form action="/daftar-kelompok" method="post">
                @csrf
                <h1 class="h3 mt-3 mb-3 fw-normal">Daftar Kelompok KP</h1>

                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top @error('nim1') is-invalid rounded @enderror"
                                name="nim1" id="nim1" placeholder="NIM Mahasiswa 1" required pattern="[0-9]{10}"
                                @if (isset($mhs1->nim)) value="{{ $mhs1->nim }}" readonly
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
                            <input type="text"
                                class="form-control rounded-top @error('angkatan1') is-invalid rounded @enderror"
                                name="angkatan1" id="angkatan1" placeholder="Angkatan" required
                                @if (isset($mhs1->angkatan)) value="{{ $mhs1->angkatan }}" readonly
                                @else
                                    value="{{ old('angkatan1') }}" @endif>
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
                                @if (isset($mhs1->nama)) value="{{ $mhs1->nama }}" readonly
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
                            <input type="text" class="form-control @error('telp1') is-invalid rounded @enderror"
                                name="telp1" id="telp1" placeholder="Nomor Telepon" required
                                @if (isset($mhs1->telp)) value="{{ $mhs1->telp }}" readonly
                                @else
                                    value="{{ old('telp1') }}" @endif>
                            <label for="telp1">Nomor Telepon</label>
                            @error('telp1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <select class="form-select" name="doswal1" id="doswal1">
                                @if (isset($mhs1))
                                    <option selected value="{{ $mhs1->doswal }}">
                                        {{ $mhs1->doswal }}</option>
                                    @foreach ($dosens as $dosen)
                                        <option> {{ $dosen->nama }}</option>
                                    @endforeach
                                @else
                                    <option selected>Pembimbing</option>
                                    @foreach ($dosens as $dosen)
                                        <option> {{ $dosen->nama }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <label for="doswal1">Dosen Wali</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('peminatan1') is-invalid rounded @enderror"
                                name="peminatan1" id="peminatan1" placeholder="Peminatan" required
                                @if (isset($mhs1->peminatan)) value="{{ $mhs1->peminatan }}" readonly
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
                                @if (isset($mhs1->ipk)) value="{{ $mhs1->ipk }}" readonly
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
                                @if (isset($mhs1->t_sks)) value="{{ $mhs1->t_sks }}" readonly
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
                            <input type="text"
                                class="form-control rounded-bottom @error('semester1') is-invalid rounded @enderror"
                                name="semester1" id="semester1" placeholder="Semester" required
                                @if (isset($mhs1->semester)) value="{{ $mhs1->semester }}" readonly
                                @else
                                    value="{{ old('semester1') }}" @endif>
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
                                @if (isset($mhs1->t_akd)) value="{{ $mhs1->t_akd }}" readonly
                                @else
                                    value="{{ old('t_akd1') }}" @endif>
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
                                class="form-control rounded-top @error('nim2') is-invalid rounded @enderror" name="nim2"
                                id="nim2" placeholder="NIM Mahasiswa 2" required pattern="[0-9]{10}"
                                @if (isset($mhs2->nim)) value="{{ $mhs2->nim }}" readonly
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
                            <input type="text"
                                class="form-control rounded-top @error('angkatan2') is-invalid rounded @enderror"
                                name="angkatan2" id="angkatan2" placeholder="Angkatan" required
                                @if (isset($mhs2->angkatan)) value="{{ $mhs2->angkatan }}" readonly
                                @else
                                    value="{{ old('angkatan2') }}" @endif>
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
                                @if (isset($mhs2->nama)) value="{{ $mhs2->nama }}" readonly
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
                            <input type="text" class="form-control @error('telp2') is-invalid rounded @enderror"
                                name="telp2" id="telp2" placeholder="Nomor Telepon" required
                                @if (isset($mhs2->telp)) value="{{ $mhs2->telp }}" readonly
                                @else
                                    value="{{ old('telp2') }}" @endif>
                            <label for="telp2">Nomor Telepon</label>
                            @error('telp2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <select class="form-select" name="doswal2" id="doswal2">
                                @if (isset($mhs2))
                                    <option selected value="{{ $mhs2->doswal }}">
                                        {{ $mhs2->doswal }}</option>
                                    @foreach ($dosens as $dosen)
                                        <option> {{ $dosen->nama }}</option>
                                    @endforeach
                                @else
                                    <option selected>Pembimbing</option>
                                    @foreach ($dosens as $dosen)
                                        <option> {{ $dosen->nama }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <label for="doswal2">Dosen Wali</label>
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('peminatan2') is-invalid rounded @enderror"
                                name="peminatan2" id="peminatan2" placeholder="Peminatan" required
                                @if (isset($mhs2->peminatan)) value="{{ $mhs2->peminatan }}" readonly
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
                                @if (isset($mhs2->ipk)) value="{{ $mhs2->ipk }}" readonly
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
                                @if (isset($mhs2->t_sks)) value="{{ $mhs2->t_sks }}" readonly
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
                            <input type="text"
                                class="form-control rounded-bottom @error('semester2') is-invalid rounded @enderror"
                                name="semester2" id="semester2" placeholder="Semester" required
                                @if (isset($mhs2->semester)) value="{{ $mhs2->semester }}" readonly
                                @else
                                    value="{{ old('semester2') }}" @endif>
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
                                @if (isset($mhs2->t_akd)) value="{{ $mhs2->t_akd }}" readonly
                                @else
                                    value="{{ old('t_akd2') }}" @endif>
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


                <button class="mt-3 w-100 btn btn-lg btn-primary" type="submit"
                    @if (isset($kelompok)) disabled @endif>Daftar</button>

            </form>
            <a href="/edit-kelompok">
                <button class="mt-3 w-100 btn btn-lg bg-warning border-0"
                    @if (isset($kelompok)) @else disabled @endif style="text-decoration: none"><span
                        data-feather="edit"></span>
                    Edit
                    Data</button>
            </a>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
        </main>



    </body>
@endsection
