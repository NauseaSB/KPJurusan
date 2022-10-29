@extends('dashboard.koordinator.main')
@section('container')
    <div class="text-center mt-5 mb-5">
        <h1>Rekap Data KP</h1>
        <a href="/rekap-kp/rekap-pdf" target="_blank" class="btn btn-success mt-2 mb-2">Print PDF</a>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIM - Nama Mahasiswa 1</th>
                        <th scope="col">NIM - Nama Mahasiswa 2</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Dosen Pembimbing</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if (isset($item->mahasiswa))
                                    {{ $item->mahasiswa->nim }} - {{ $item->mahasiswa->nama }}
                                @endif
                            </td>
                            <td>
                                @if (isset($item->mahasiswa2))
                                    {{ $item->mahasiswa2->nim }} - {{ $item->mahasiswa2->nama }}
                                @endif
                            </td>
                            <td>
                                @if (isset($item->materi))
                                    {{ $item->materi->judul }}
                                @endif
                            </td>
                            <td>
                                @if (isset($item->dosbim))
                                    {{ $item->dosbim }}
                                @endif
                            </td>

                            <td>
                                <a href="/" class="btn bg-warning" style="text-decoration: none">
                                    <span data-feather="file-text"></span>
                                    Lihat Detail
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
