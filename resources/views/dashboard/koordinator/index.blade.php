@extends('dashboard.koordinator.main')
@section('container')
    halaman index koordinator
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
                    <th scope="col">Status Status Kelompok</th>
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
    </div>
@endsection
