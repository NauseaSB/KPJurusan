@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 justify-content-center">Dashboard</h1>
    </div>
    <div class="row">
        <div class="col">
            <h2>Mahasiswa 1</h2>
            <div class="form-floating">
                <input type="text" class="form-control rounded-top" name="nim1" id="nim1"
                    placeholder="NIM Mahasiswa 1" disabled value="">
                <label for="nim1">NIM Mahasiswa</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control" name="angkatan1" id="angkatan1" placeholder="Angkatan" disabled
                    value="">
                <label for="angkatan1">Angkatan</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control" name="nama1" id="nama1" placeholder="Nama Mahasiswa 1"
                    disabled value="">
                <label for="nama1">Nama Mahasiswa</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control" name="telp1" id="telp1" placeholder="Nomor Telepon"
                    disabled value="">
                <label for="telp1">Nomor Telepon</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control" name="doswal1" id="doswal1" placeholder="Nama Mahasiswa 1"
                    disabled value="">
                <label for="doswal1">Nama Dosen Wali</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control" name="peminatan1" id="peminatan1" placeholder="Peminatan"
                    disabled value="">
                <label for="peminatan1">Peminatan</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control" name="ipk1" id="ipk1" placeholder="IPK" disabled
                    value="">
                <label for="ipk1">IPK</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control" name="t_sks1" id="t_sks1" placeholder="Total SKS" disabled
                    value="">
                <label for="t_sks1">Total SKS</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control" name="semester1" id="semester1" placeholder="Semester" disabled
                    value="">
                <label for="semester1">Semester</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control" name="t_akd1" id="t_akd1" placeholder="Tahun Akademik"
                    disabled value="">
                <label for="t_akd1">Tahun Akademik</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control rounded-bottom" name="ket_mahasiswa1" id="ket_mahasiswa1"
                    placeholder="Keterangan Mahasiswa" disabled value="">
                <label for="ket_mahasiswa1">Keterangan Mahasiswa</label>
            </div>
        </div>
        <div class="col">
            <h2>mahasiswa 2</h2>
            <div class="form-floating">
                <input type="text" class="form-control rounded-top" name="nim1" id="nim1"
                    placeholder="NIM Mahasiswa 1" disabled value="">
                <label for="nim1">NIM Mahasiswa</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control" name="angkatan1" id="angkatan1" placeholder="Angkatan"
                    disabled value="">
                <label for="angkatan1">Angkatan</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control" name="nama1" id="nama1" placeholder="Nama Mahasiswa 1"
                    disabled value="">
                <label for="nama1">Nama Mahasiswa</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control" name="telp1" id="telp1" placeholder="Nomor Telepon"
                    disabled value="">
                <label for="telp1">Nomor Telepon</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control" name="doswal1" id="doswal1" placeholder="Nama Mahasiswa 1"
                    disabled value="">
                <label for="doswal1">Nama Dosen Wali</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control" name="peminatan1" id="peminatan1" placeholder="Peminatan"
                    disabled value="">
                <label for="peminatan1">Peminatan</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control" name="ipk1" id="ipk1" placeholder="IPK" disabled
                    value="">
                <label for="ipk1">IPK</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control" name="t_sks1" id="t_sks1" placeholder="Total SKS"
                    disabled value="">
                <label for="t_sks1">Total SKS</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control" name="semester1" id="semester1" placeholder="Semester"
                    disabled value="">
                <label for="semester1">Semester</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control" name="t_akd1" id="t_akd1" placeholder="Tahun Akademik"
                    disabled value="">
                <label for="t_akd1">Tahun Akademik</label>
            </div>
            <div class=" form-floating">
                <input type="text" class="form-control rounded-bottom" name="ket_mahasiswa1" id="ket_mahasiswa1"
                    placeholder="Keterangan Mahasiswa" disabled value="">
                <label for="ket_mahasiswa1">Keterangan Mahasiswa</label>
            </div>
        </div>
    </div>
@endsection
