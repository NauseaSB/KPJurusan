@extends('dashboard.layout.main')

@section('container')

    <body>

        <main class="form-signin text-center">
            <form action="/edit-data-kp" method="post">
                @csrf
                <h1 class="h3 mt-3 mb-3 fw-normal">Edit Materi KP</h1>

                <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('judul') is-invalid rounded @enderror"
                        name="judul" id="judul" placeholder="Judul Kerja Praktik" required
                        value="{{ old('judul', $materi->judul_kp) }}">
                    <label for="judul">Judul Kerja Praktik</label>
                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('tempat') is-invalid rounded @enderror"
                        name="tempat" id="tempat" placeholder="Tempat Kerja Praktik" required
                        value="{{ old('tempat', $materi->tempat_kp_lapangan) }}">
                    <label for="tempat">Tempat Kerja Praktik</label>
                    @error('tempat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('divisi') is-invalid rounded @enderror"
                        name="divisi" id="divisi" placeholder="Divisi" required
                        value="{{ old('divisi', $materi->divisi) }}">
                    <label for="divisi">Divisi</label>
                    @error('divisi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('alamat') is-invalid rounded @enderror"
                        name="alamat" id="alamat" placeholder="Alamat Kerja Praktik" required
                        value="{{ old('alamat', $materi->alamat) }}">
                    <label for="alamat">Alamat Kerja Praktik</label>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('telpkp') is-invalid rounded @enderror"
                        name="telpkp" id="telpkp" placeholder="Nomor Telepon Tempat Kerja Praktik" required
                        value="{{ old('telpkp', $materi->telp_tempat_kp) }}">
                    <label for="telpkp">Nomor Telepon Tempat Kerja Praktik</label>
                    @error('telpkp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('p_lapangan') is-invalid rounded @enderror"
                        name="p_lapangan" id="p_lapangan" placeholder="Nama Pembimbing Lapangan" required
                        value="{{ old('p_lapangan', $materi->nama_pembimbing_lapangan) }}">
                    <label for="p_lapangan">Nama Pembimbing Lapangan</label>
                    @error('p_lapangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text"
                        class="form-control rounded-top @error('penanggung_jawab') is-invalid rounded @enderror"
                        name="penanggung_jawab" id="penanggung_jawab" placeholder="Penanggung Jawab Lapangan" required
                        value="{{ old('penanggung_jawab', $materi->nama_penanggung_jawab_lapangan) }}">
                    <label for="penanggung_jawab">Penanggung Jawab Lapangan</label>
                    @error('penanggung_jawab')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col mt-2">
                        <div class="form-floating">
                            <select class="form-select" name="status_judul" id="status_judul">
                                @if (isset($materi))
                                    <option @if ($materi->status_judul == null) selected @endif>Nilai</option>
                                    <option @if ($materi->status_judul == 'Sudah Ada Judul') selected @endif value="Sudah Ada Judul">Sudah
                                        Ada Judul</option>
                                    <option @if ($materi->status_judul == 'Belum Ada Judul') selected @endif value="Belum Ada Judul">Belum
                                        Ada Judul</option>
                                @else
                                    <option selected>Status</option>
                                    <option value="Sudah Ada Judul">Sudah Ada Judul</option>
                                    <option value="Belum Ada Judul">Belum Ada Judul</option>
                                @endif
                            </select>
                            <label for="status_judul">Status Judul</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="jenis_kp" id="jenis_kp">
                                @if (isset($materi))
                                    <option @if ($materi->jenis_kp == null) selected @endif>Jenis KP</option>
                                    <option @if ($materi->jenis_kp == 'Pekerjaan IT') selected @endif value="Pekerjaan IT">
                                        Pekerjaan IT</option>
                                    <option @if ($materi->jenis_kp == 'Non-Pekerjaan IT') selected @endif value="Non-Pekerjaan IT">
                                        Non-Pekerjaan IT</option>
                                @else
                                    <option selected>Jenis KP</option>
                                    <option value="Pekerjaan IT">Pekerjaan IT</option>
                                    <option value="Non-Pekerjaan IT">Non-Pekerjaan IT</option>
                                @endif
                            </select>
                            <label for="jenis_kp">Jenis Kerja Praktik</label>
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-floating">
                            <select class="form-select" name="p_kp1" id="p_kp1">
                                @if (isset($materi))
                                    <option selected value="{{ $materi->ajuan_pembimbing1 }}">
                                        {{ $materi->ajuan_pembimbing1 }}</option>
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
                            <label for="p_kp1">Ajuan Pembimbing (Alternatif 1)</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_kp2" id="p_kp2">
                                @if (isset($materi))
                                    <option selected value="{{ $materi->ajuan_pembimbing2 }}">
                                        {{ $materi->ajuan_pembimbing2 }}</option>
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
                            <label for="p_kp2">Ajuan Pembimbing (Alternatif 2)</label>
                        </div>
                    </div>
                </div>

                <button class="mt-3 w-100 btn btn-lg btn-primary" type="submit">Edit Data</button>
            </form>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
        </main>

    </body>
@endsection
