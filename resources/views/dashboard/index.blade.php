@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 justify-content-center">Dashboard</h1>
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col">
            <h3> Mahasiswa 1 </h3>
            <table class="table table-responsive">
                <tr>
                    <td> NIM </td>
                    @if (isset($kelompok->mahasiswa))
                        <td> {{ $kelompok->mahasiswa->nim }} </td>
                    @endif
                </tr>
                <tr>
                    <td> Angkatan </td>
                    @if (isset($kelompok->mahasiswa))
                        <td> {{ $kelompok->mahasiswa->angkatan }}</td>
                    @endif
                </tr>
                <tr>
                    <td> Nama Mahasiswa </td>
                    @if (isset($kelompok->mahasiswa))
                        <td> {{ $kelompok->mahasiswa->nama }} </td>
                    @endif
                </tr>
                <tr>
                    <td> Nomor Telfon </td>
                    @if (isset($kelompok->mahasiswa))
                        <td> {{ $kelompok->mahasiswa->telp }} </td>
                    @endif
                </tr>
                <tr>
                    <td> Nama Dosen Wali </td>
                    @if (isset($kelompok->mahasiswa))
                        <td> {{ $kelompok->mahasiswa->doswal }} </td>
                    @endif
                </tr>
                <tr>
                    <td> Peminatan </td>
                    @if (isset($kelompok->mahasiswa))
                        <td> {{ $kelompok->mahasiswa->peminatan }} </td>
                    @endif
                </tr>
                <tr>
                    <td> IPK </td>
                    @if (isset($kelompok->mahasiswa))
                        <td> {{ $kelompok->mahasiswa->ipk }} </td>
                    @endif
                </tr>
                <tr>
                    <td> Total SKS </td>
                    @if (isset($kelompok->mahasiswa))
                        <td> {{ $kelompok->mahasiswa->t_sks }} </td>
                    @endif
                </tr>
                <tr>
                    <td> Semester </td>
                    @if (isset($kelompok->mahasiswa))
                        <td> {{ $kelompok->mahasiswa->semester }} </td>
                    @endif
                </tr>
                <tr>
                    <td> Tahun Akademik </td>
                    @if (isset($kelompok->mahasiswa))
                        <td> {{ $kelompok->mahasiswa->t_akd }} </td>
                    @endif
                </tr>
            </table>
        </div>
        <div class="col">
            <h3> Mahasiswa 2 </h3>
            <table class="table table-responsive">
                <tr>
                    <td> NIM </td>
                    @if (isset($kelompok->mahasiswa2))
                        <td> {{ $kelompok->mahasiswa2->nim }}</td>
                    @endif
                </tr>
                <tr>
                    <td> Angkatan </td>
                    @if (isset($kelompok->mahasiswa2))
                        <td> {{ $kelompok->mahasiswa2->angkatan }}</td>
                    @endif
                    <td> </td>
                </tr>
                <tr>
                    <td> Nama Mahasiswa </td>
                    @if (isset($kelompok->mahasiswa2))
                        <td> {{ $kelompok->mahasiswa2->nama }} </td>
                    @endif
                </tr>
                <tr>
                    <td> Nomor Telfon </td>
                    @if (isset($kelompok->mahasiswa2))
                        <td> {{ $kelompok->mahasiswa2->telp }} </td>
                    @endif
                </tr>
                <tr>
                    <td> Nama Dosen Wali </td>
                    @if (isset($kelompok->mahasiswa2))
                        <td> {{ $kelompok->mahasiswa2->doswal }} </td>
                    @endif
                </tr>
                <tr>
                    <td> Peminatan </td>
                    @if (isset($kelompok->mahasiswa2))
                        <td> {{ $kelompok->mahasiswa2->peminatan }} </td>
                    @endif
                </tr>
                <tr>
                    <td> IPK </td>
                    @if (isset($kelompok->mahasiswa2))
                        <td> {{ $kelompok->mahasiswa2->ipk }} </td>
                    @endif
                </tr>
                <tr>
                    <td> Total SKS </td>
                    @if (isset($kelompok->mahasiswa2))
                        <td> {{ $kelompok->mahasiswa2->t_sks }} </td>
                    @endif
                </tr>
                <tr>
                    <td> Semester </td>
                    @if (isset($kelompok->mahasiswa2))
                        <td> {{ $kelompok->mahasiswa2->semester }} </td>
                    @endif
                </tr>
                <tr>
                    <td> Tahun Akademik </td>
                    @if (isset($kelompok->mahasiswa2))
                        <td> {{ $kelompok->mahasiswa2->t_akd }} </td>
                    @endif
                </tr>
            </table>
        </div>
    </div>
@endsection
