@extends('dashboard.koordinator.main')

@section('container')

    <body>

        <main class="form-signin text-center">
            <h1 class="h3 mt-3 mb-3 fw-normal">Detail Seminar KP</h1>
            @if (isset($dataseminar))
                <form action="/daftar-seminar" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- mahasiswa --}}
                    <div class="row justify-content-evenly mt-3">
                        <div class="col-auto">
                            <div class="input-group">
                                <span class="input-group-text">Data KHS Mahasiswa 1</span>
                                @if (isset($dataseminar->khs1))
                                    <span class="input-group-text bg-success text-bg-dark">Status : Data Sudah Diisi</span>
                                    <a href="/storage/{{ $dataseminar->khs1 }}" target="_blank"
                                        class="btn btn-primary">Lihat
                                        Data</a>
                                @else
                                    <span class="input-group-text bg-danger text-bg-light">Status : Data Belum Diisi</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="input-group">
                                <span class="input-group-text">Data KHS Mahasiswa 2</span>
                                @if (isset($dataseminar->khs2))
                                    <span class="input-group-text bg-success text-bg-dark">Status : Data Sudah Diisi</span>
                                    <a href="/storage/{{ $dataseminar->khs2 }}" target="_blank"
                                        class="btn btn-primary">Lihat
                                        Data</a>
                                @else
                                    <span class="input-group-text bg-danger text-bg-light">Status : Data Belum Diisi</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- demo & surat kelayakan --}}
                    <div class="row justify-content-evenly mt-3">
                        <div class="col-auto">
                            <div class="input-group">
                                <span class="input-group-text">Data Form Demo Aplikasi</span>
                                @if (isset($dataseminar->f_demo_aplikasi))
                                    <span class="input-group-text bg-success text-bg-dark">Status : Data Sudah Diisi</span>
                                    <a href="/storage/{{ $dataseminar->f_demo_aplikasi }}" target="_blank"
                                        class="btn btn-primary">Lihat
                                        Data</a>
                                @else
                                    <span class="input-group-text bg-danger text-bg-light">Status : Data Belum Diisi</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="input-group">
                                <span class="input-group-text">Data Form Surat Kelayakan</span>
                                @if (isset($dataseminar->f_surat_kelayakan))
                                    <span class="input-group-text bg-success text-bg-dark">Status : Data Sudah Diisi</span>
                                    <a href="/storage/{{ $dataseminar->f_surat_kelayakan }}" target="_blank"
                                        class="btn btn-primary">Lihat
                                        Data</a>
                                @else
                                    <span class="input-group-text bg-danger text-bg-light">Status : Data Belum Diisi</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- bimbingan & draft laporan --}}
                    <div class="row justify-content-evenly mt-3">
                        <div class="col-auto">
                            <div class="input-group">
                                <span class="input-group-text">Data Form Bimbingan Akademik</span>
                                @if (isset($dataseminar->f_bimbingan_akademik))
                                    <span class="input-group-text bg-success text-bg-dark">Status : Data Sudah Diisi</span>
                                    <a href="/storage/{{ $dataseminar->f_bimbingan_akademik }}" target="_blank"
                                        class="btn btn-primary">Lihat
                                        Data</a>
                                @else
                                    <span class="input-group-text bg-danger text-bg-light">Status : Data Belum Diisi</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="input-group">
                                <span class="input-group-text">Data Draft Laporan KP</span>
                                @if (isset($dataseminar->draft_laporan_kp))
                                    <span class="input-group-text bg-success text-bg-dark">Status : Data Sudah Diisi</span>
                                    <a href="/storage/{{ $dataseminar->draft_laporan_kp }}" target="_blank"
                                        class="btn btn-primary">Lihat
                                        Data</a>
                                @else
                                    <span class="input-group-text bg-danger text-bg-light">Status : Data Belum Diisi</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            @else
                <h1>Kelompok Belum Mendaftar Seminar</h1>
            @endif
            <div class="row justify-content-center mt-3">
                <div class="col-auto">
                    <a href="/data-seminar">
                        <button class="btn btn-lg bg-primary border-0" style="text-decoration: none">
                            <span data-feather="corner-up-left"></span> Kembali
                        </button>
                    </a>
                </div>
            </div>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
        </main>

    </body>
@endsection
