@extends('dashboard.admin.main')
@section('container')
    <div class="d-flex justify-content-center">
        <div class="justify-content-center border-bottom">
            <h1>Kelola Akun</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="col-md-auto">
            <a href="/tambah-akun" class="btn btn-success mt-2 mb-2">Tambah Akun</a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <div class="table-responsive">
                <table class="table table-striped table-sm table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Role</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->username }}</td>
                                <td>
                                    @if ($item->role_id == '1')
                                        Admin
                                    @elseif ($item->role_id == '2')
                                        Mahasiswa
                                    @elseif ($item->role_id == '3')
                                        Koordinator
                                    @elseif ($item->role_id == '4')
                                        Tata Usaha
                                    @endif
                                </td>
                                <td>
                                    <a href="/edit-akun/{{ $item->id }}" class="badge bg-warning text-bg-light"
                                        style="text-decoration: none">
                                        <span data-feather="edit"></span>
                                        Edit Akun
                                    </a>
                                    <form action="/delete-akun/{{ $item->id }}" method="post" class="d-inline">
                                        @csrf
                                        <button class="badge bg-danger text-bg-dark border-0"
                                            onclick="return confirm('Akun akan di hapus, apakah anda yakin?')"><span
                                                data-feather="trash-2"></span>Hapus Akun</button>
                                    </form>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
