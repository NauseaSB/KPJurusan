@extends('dashboard.layout.main')

@section('container')

    <body>

        <main class="form-signin text-center">
            <form action="/daftar-seminar" method="post" enctype="multipart/form-data">
                @csrf
                <h1 class="h3 mt-3 mb-3 fw-normal">Daftar Seminar KP</h1>

                {{-- mahasiswa --}}
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="khs1" class="form-label">KHS Mahasiswa 1</label>
                                <input class="form-control" type="file" id="khs1" name="khs1" required>
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                @if (isset($dataseminar->khs1))
                                    <a href="storage/{{ $dataseminar->khs1 }}" target="_blank" class="btn btn-primary">Lihat
                                        Data</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="khs2" class="form-label">KHS Mahasiswa 2</label>
                                <input class="form-control" type="file" id="khs2" name="khs2" required>
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                @if (isset($dataseminar->khs2))
                                    <a href="storage/{{ $dataseminar->khs2 }}" target="_blank" class="btn btn-primary">Lihat
                                        Data</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                {{-- demo & surat kelayakan --}}
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="f_demo_aplikasi" class="form-label">Form Demo Aplikasi</label>
                                <input class="form-control" type="file" id="f_demo_aplikasi" name="f_demo_aplikasi">
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                @if (isset($dataseminar->f_demo_aplikasi))
                                    <a href="storage/{{ $dataseminar->f_demo_aplikasi }}" target="_blank"
                                        class="btn btn-primary">Lihat
                                        Data</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="f_surat_kelayakan" class="form-label">Form Surat Kelayakan</label>
                                <input class="form-control" type="file" id="f_surat_kelayakan" name="f_surat_kelayakan">
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                @if (isset($dataseminar->f_surat_kelayakan))
                                    <a href="storage/{{ $dataseminar->f_surat_kelayakan }}" target="_blank"
                                        class="btn btn-primary">Lihat
                                        Data</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                {{-- bimbingan & draft laporan --}}
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="f_bimbingan_akademik" class="form-label">Form Bimbingan Akademik</label>
                                <input class="form-control" type="file" id="f_bimbingan_akademik"
                                    name="f_bimbingan_akademik">
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                @if (isset($dataseminar->f_bimbingan_akademik))
                                    <a href="storage/{{ $dataseminar->f_bimbingan_akademik }}" target="_blank"
                                        class="btn btn-primary">Lihat
                                        Data</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="draft_laporan_kp" class="form-label">Draft Laporan KP</label>
                                <input class="form-control" type="file" id="draft_laporan_kp" name="draft_laporan_kp">
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                @if (isset($dataseminar->draft_laporan_kp))
                                    <a href="storage/{{ $dataseminar->draft_laporan_kp }}" target="_blank"
                                        class="btn btn-primary">Lihat
                                        Data</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <button class="mt-3 w-100 btn btn-lg btn-primary" type="submit"
                    @if (isset($dataseminar)) disabled @endif>Daftar</button>
            </form>
            <a href="/edit-data-seminar">
                <button class="mt-3 w-100 btn btn-lg bg-warning border-0"
                    @if (isset($dataseminar)) @else disabled @endif style="text-decoration: none">
                    <span data-feather="edit"></span> Edit Data
                </button>
            </a>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
        </main>

    </body>
@endsection
