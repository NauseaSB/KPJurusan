@extends('dashboard.layout.main')

@section('container')

    <body>

        <main class="form-signin text-center">
            <form action="/daftar-materi-kp" method="post">
                @csrf
                <h1 class="h3 mt-3 mb-3 fw-normal">Daftar Materi KP</h1>

                <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('judul') is-invalid rounded @enderror"
                        name="judul" id="judul" placeholder="Judul Kerja Praktik" required value="{{ old('judul') }}">
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
                        value="{{ old('tempat') }}">
                    <label for="tempat">Tempat Kerja Praktik</label>
                    @error('tempat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('divisi') is-invalid rounded @enderror"
                        name="divisi" id="divisi" placeholder="Divisi" required value="{{ old('divisi') }}">
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
                        value="{{ old('alamat') }}">
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
                        value="{{ old('telpkp') }}">
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
                        value="{{ old('p_lapangan') }}">
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
                        value="{{ old('penanggung_jawab') }}">
                    <label for="penanggung_jawab">Penanggung Jawab Lapangan</label>
                    @error('penanggung_jawab')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <select class="form-select mt-2" name="status_judul" id="status_judul">
                                <option selected>Status</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                            </select>
                            <label for="status_judul">Status Judul</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="jenis_kp" id="jenis_kp">
                                <option selected>Jenis KP</option>
                                <option value="A">Perkerjaan IT</option>
                                <option value="B">Non Pekerjaan IT</option>
                            </select>
                            <label for="jenis_kp">Jenis Kerja Praktik</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <select class="form-select" name="p_kp1" id="p_kp1">
                                <option selected>Pembimbing</option>
                                @foreach ($dosens as $dosen)
                                <option> {{ $dosen->nama }}</option>
                                @endforeach
                            </select>
                            <label for="p_kp1">Ajuan Pembimbing (Alternatif 1)</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_kp2" id="p_kp2">
                                <option selected>Pembimbing</option>
                                @foreach ($dosens as $dosen)
                                <option> {{ $dosen->nama }}</option>
                                @endforeach
                            </select>
                            <label for="p_kp2">Ajuan Pembimbing (Alternatif 2)</label>
                        </div>
                    </div>
                </div>


                <button class="mt-3 w-100 btn btn-lg btn-primary" type="submit"
                    @if (isset($materi)) disabled @endif>Daftar</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
            </form>
        </main>

    </body>
@endsection
