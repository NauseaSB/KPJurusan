@extends('dashboard.tatausaha.main')
@section('container')
    <div class="text-center mt-5 mb-5">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <h1>Data Pendaftaran KP2</h1>
        <a href="/data-kp2-tu/rekap-pdf" target="_blank" class="btn btn-success mt-2 mb-2">Print PDF</a>
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
                                @if (isset($item->status2->s_mhs1))
                                    <div
                                        class="badge @if ($item->status2->s_mhs1 == 'Memenuhi') bg-success @elseif ($item->status2->s_mhs1 == 'Tidak Memenuhi') bg-danger @else bg-warning @endif">
                                        {{ $item->status2->s_mhs1 }}
                                    </div>
                                @endif
                            </td>
                            <td>
                                @if (isset($item->status2->s_mhs2))
                                    <div
                                        class="badge @if ($item->status2->s_mhs2 == 'Memenuhi') bg-success @elseif ($item->status2->s_mhs2 == 'Tidak Memenuhi') bg-danger @else bg-warning @endif">
                                        {{ $item->status2->s_mhs2 }}
                                    </div>
                                @endif
                            </td>
                            <td>
                                <a href="/data-kp2-tu/set-status/{{ $item->id }}" class="btn btn-sm bg-warning"
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
