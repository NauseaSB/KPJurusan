@extends('dashboard.koordinator.main')
@section('container')
    <div class="text-center mt-5 mb-5">
        <h1>Ploting Dosen Pembimbing</h1>

        <div class="row justify-content-end mt-3 mb-3">
            <div class="col-md-3">
                <form action="/ploting-dosen">
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
                        <th scope="col">NIM - Nama Mahasiswa 1</th>
                        <th scope="col">NIM - Nama Mahasiswa 2</th>
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
                                @if (isset($item->dosbim))
                                    {{ $item->dosbim }}
                                @endif
                            </td>

                            <td>
                                @if (isset($item->materi->ajuan_pembimbing1))
                                    <a href="{{ route('ploting-dosen.show', $item->id) }}" class="btn btn-sm bg-warning"
                                        style="text-decoration: none" role="button">
                                        <span data-feather="edit"></span>
                                        Plot Pembimbing
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $datas->links() }}
        </div>
    </div>
@endsection
