@extends('dashboard.tatausaha.main')
@section('container')
    halaman index tata usaha
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Mahasiswa 1</th>
                    <th scope="col">NIM Mahasiswa 1</th>
                    <th scope="col">Nama Mahasiswa 2</th>
                    <th scope="col">NIM Mahasiswa 2</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Pembimbing</th>
                    <th scope="col">Status Mahasiswa 1</th>
                    <th scope="col">Status Mahasiswa 2</th>
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
                            @if (isset($item->materi))
                                {{ $item->materi->nama_pembimbing_lapangan }}
                            @endif
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
