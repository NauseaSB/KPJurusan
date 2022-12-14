@extends('dashboard.koordinator.main')
@section('container')
    <div class="text-center mt-5 mb-5">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <h1>Data Pendaftaran KP</h1>
        <a href="/koorkp/rekap-pdf" target="_blank" class="btn btn-success mt-2 mb-2">Print PDF</a>

        <div class="row justify-content-end mt-3 mb-3">
            <div class="col-md-3">
                <form action="/koorkp">
                    <div class="input-group">
                        <label class="input-group-text" for="search">Cari Berdasarkan Periode : </label>
                        <select class="form-select" id="search" name="search">
                            <option selected disabled="disabled">Choose...</option>
                            <option value="GANJIL">Ganjil</option>
                            <option value="GENAP">Genap</option>
                        </select>
                        <button class="btn btn-success" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-sm table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Mahasiswa 1</th>
                        <th scope="col">NIM Mahasiswa 1</th>
                        <th scope="col">Nama Mahasiswa 2</th>
                        <th scope="col">NIM Mahasiswa 2</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Dosen Pembimbing</th>
                        <th scope="col">Status Mahasiswa 1</th>
                        <th scope="col">Status Mahasiswa 2</th>
                        <th scope="col">Status Kelompok</th>
                        <th scope="col">Status Akhir</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if (isset($item->mahasiswa))
                                    {{ $item->mahasiswa->nama }}
                                @endif
                            </td>
                            <td>
                                @if (isset($item->mahasiswa))
                                    {{ $item->mahasiswa->nim }}
                                @endif
                            </td>
                            <td>
                                @if (isset($item->mahasiswa2))
                                    {{ $item->mahasiswa2->nama }}
                                @endif
                            </td>
                            <td>
                                @if (isset($item->mahasiswa2))
                                    {{ $item->mahasiswa2->nim }}
                                @endif
                            </td>
                            <td>
                                @if (isset($item->materi))
                                    {{ $item->materi->judul_kp }}
                                @endif
                            </td>
                            <td>
                                @if (isset($item->dosbim))
                                    {{ $item->dosbim }}
                                @endif
                            </td>
                            <td>
                                @if (isset($item->status_mhsw1))
                                    <div
                                        class="badge @if ($item->status_mhsw1 == 'Memenuhi') bg-success @elseif ($item->status_mhsw1 == 'Tidak Memenuhi') bg-danger @else bg-warning @endif">
                                        {{ $item->status_mhsw1 }}
                                    </div>
                                @endif
                            </td>
                            <td>
                                @if (isset($item->status_mhsw2))
                                    <div
                                        class="badge @if ($item->status_mhsw2 == 'Memenuhi') bg-success @elseif ($item->status_mhsw2 == 'Tidak Memenuhi') bg-danger @else bg-warning @endif">
                                        {{ $item->status_mhsw2 }}
                                    </div>
                                @endif
                            </td>
                            <td>
                                @if (isset($item->status_klmpk))
                                    <div
                                        class="badge @if ($item->status_klmpk == 'Memenuhi') bg-success @elseif ($item->status_klmpk == 'Tidak Memenuhi') bg-danger @else bg-warning @endif">
                                        {{ $item->status_klmpk }}
                                    </div>
                                @endif
                            </td>
                            <td>
                                @if (isset($item->status_akhir))
                                    <div
                                        class="badge @if ($item->status_akhir == 'Memenuhi') bg-success @elseif ($item->status_akhir == 'Tidak Memenuhi') bg-danger @else bg-warning @endif">
                                        {{ $item->status_akhir }}
                                    </div>
                                @endif
                            </td>
                            <td>
                                <a href="/koorkp/set-status/{{ $item->id }}" class="btn btn-sm bg-warning"
                                    style="text-decoration: none">
                                    <span data-feather="edit"></span>
                                    Edit Status
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $datas->links() }}
        </div>
    </div>
@endsection
