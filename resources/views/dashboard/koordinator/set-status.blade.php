@extends('dashboard.koordinator.main')
@section('container')
    <main class="form-signin text-center mt-5">
        <h1>Set Status</h1>
        <div class="row">
            <div class="col">
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('nim1') is-invalid rounded @enderror"
                        name="nim1" id="nim1" placeholder="NIM Mahasiswa 1" required
                        value="{{ $mahasiswa1->nim }}" value="{{ old('nim1') }}">
                    <label for="nim1">NIM Mahasiswa 1</label>
                    @error('nim1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class=" form-floating">
                    <input type="text" class="form-control @error('nama1') is-invalid rounded @enderror"
                        name="nama1" id="nama1" placeholder="Nama Mahasiswa 1" required
                        value="{{ $mahasiswa1->nama }}" value="{{ old('nama1') }}">
                    <label for="nama1">Nama Mahasiswa 1</label>
                    @error('nama1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class=" form-floating">
                    <input type="text" class="form-control @error('doswal1') is-invalid rounded @enderror"
                        name="doswal1" id="doswal1" placeholder="Nama Mahasiswa 1" required
                        value="{{ $mahasiswa1->doswal }}" value="{{ old('doswal1') }}">
                    <label for="doswal1">Nama Dosen Wali</label>
                    @error('doswal1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class=" form-floating">
                    <input type="text" class="form-control @error('peminatan1') is-invalid rounded @enderror"
                        name="peminatan1" id="peminatan1" placeholder="Peminatan" required
                        value="{{ $mahasiswa1->peminatan }}" value="{{ old('peminatan1') }}">
                    <label for="peminatan1">Peminatan</label>
                    @error('peminatan1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class=" form-floating">
                    <input type="text" class="form-control @error('ipk1') is-invalid rounded @enderror"
                        name="ipk1" id="ipk1" placeholder="IPK" required value="{{ $mahasiswa1->ipk }}"
                        value="{{ old('ipk1') }}">
                    <label for="ipk1">IPK</label>
                    @error('ipk1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class=" form-floating">
                    <input type="text" class="form-control @error('t_sks1') is-invalid rounded @enderror"
                        name="t_sks1" id="t_sks1" placeholder="Total SKS" required
                        value="{{ $mahasiswa1->t_sks }}" value="{{ old('t_sks1') }}">
                    <label for="t_sks1">Total SKS</label>
                    @error('t_sks1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class=" form-floating">
                    <input type="text"
                        class="form-control rounded-bottom @error('semester1') is-invalid rounded @enderror"
                        name="semester1" id="semester1" placeholder="Semester" required
                        value="{{ $mahasiswa1->semester }}" value="{{ old('semester1') }}">
                    <label for="semester1">Semester</label>
                    @error('semester1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class=" form-floating">
                    <input type="text" class="form-control {{
                        $info_mhs->jum_d1 > 0 ? 'is-invalid' : ''; }}" name="jum_d1" id="jum_d1" readonly value="{{ $info_mhs->jum_d1 }}">
                    <label for="jum_d1" class="form-label">Jumlah Nilai D</label>
                </div>
                <div class=" form-floating">
                    <input type="text"
                        class="form-control rounded-top @error('mk_d1') is-invalid rounded @enderror" name="mk_d1"
                        id="mk_d1" placeholder="MK Nilai D" required value="{{ $info_mhs->mk_d1 }}"
                        value="{{ old('mk_d1') }}">
                    <label for="mk_d">MK Nilai D</label>
                    @error('mk_d1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class=" form-floating">
                    <input type="text" class="form-control {{
                        $info_mhs->jum_e1 > 0 ? 'is-invalid' : ''; }}" name="jum_e1" id="jum_e1" readonly value="{{ $info_mhs->jum_e1 }}">
                    <label for="jum_e1" class="form-label">Jumlah Nilai E</label>
                </div>
                <div class=" form-floating">
                    <input type="text"
                        class="form-control rounded-top @error('mk_e1') is-invalid rounded @enderror"
                        name="mk_e1" id="mk_e1" placeholder="MK Nilai E" required
                        value="{{ $info_mhs->mk_e1 }}" value="{{ old('mk_e1') }}">
                    <label for="mk_e">MK Nilai E</label>
                    @error('mk_e1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating  mt-2">
                    <input type="text" class="form-control {{
                        ($info_mhs->algoritma1 != 'A' && 
                        $info_mhs->algoritma1 != 'AB' &&
                        $info_mhs->algoritma1 != 'B' &&
                        $info_mhs->algoritma1 != 'BC' &&
                        $info_mhs->algoritma1 != 'C') ? 'is-invalid' : ''; }}" name="algo" id="algo" readonly value="{{ $info_mhs->algoritma1 }}">
                    <label for="algo" class="form-label">Nilai Algoritma dan Pemograman</label>
                </div>
                <div class="form-floating  mt-2">
                    <input type="text" class="form-control {{
                        ($info_mhs->p_algoritma1 != 'A' && 
                        $info_mhs->p_algoritma1 != 'AB' &&
                        $info_mhs->p_algoritma1 != 'B' &&
                        $info_mhs->p_algoritma1 != 'BC' &&
                        $info_mhs->p_algoritma1 != 'C') ? 'is-invalid' : ''; }}" name="p_algo1" id="p_algo1" readonly value="{{ $info_mhs->p_algoritma1 }}">
                    <label for="p_algo1" class="form-label">Nilai Praktikum Algoritma dan Pemograman</label>
                </div>
                <div class="form-floating  mt-2">
                    <input type="text" class="form-control {{
                        ($info_mhs->strukdat1 != 'A' && 
                        $info_mhs->strukdat1 != 'AB' &&
                        $info_mhs->strukdat1 != 'B' &&
                        $info_mhs->strukdat1 != 'BC' &&
                        $info_mhs->strukdat1 != 'C') ? 'is-invalid' : ''; }}" name="strukdat1" id="strukdat1" readonly value="{{ $info_mhs->strukdat1 }}">
                    <label for="strukdat1" class="form-label">Nilai Stuktur Data</label>
                </div>
                <div class="form-floating  mt-2">
                    <input type="text" class="form-control {{
                        ($info_mhs->p_strukdat1 != 'A' && 
                        $info_mhs->p_strukdat1 != 'AB' &&
                        $info_mhs->p_strukdat1 != 'B' &&
                        $info_mhs->p_strukdat1 != 'BC' &&
                        $info_mhs->p_strukdat1 != 'C') ? 'is-invalid' : ''; }}" name="p_strukdat1" id="p_strukdat1" readonly value="{{ $info_mhs->p_strukdat1 }}">
                    <label for="p_strukdat1" class="form-label">Nilai Praktikum Stuktur Data</label>
                </div>
                <div class="form-floating  mt-2">
                    <input type="text" class="form-control {{
                        ($info_mhs->basdat1 != 'A' && 
                        $info_mhs->basdat1 != 'AB' &&
                        $info_mhs->basdat1 != 'B' &&
                        $info_mhs->basdat1 != 'BC' &&
                        $info_mhs->basdat1 != 'C') ? 'is-invalid' : ''; }}" name="basdat1" id="basdat1" readonly value="{{ $info_mhs->basdat1 }}">
                    <label for="basdat1" class="form-label">Nilai Basis Data</label>
                </div>
                <div class="form-floating  mt-2">
                    <input type="text" class="form-control {{
                        ($info_mhs->p_basdat1 != 'A' && 
                        $info_mhs->p_basdat1 != 'AB' &&
                        $info_mhs->p_basdat1 != 'B' &&
                        $info_mhs->p_basdat1 != 'BC' &&
                        $info_mhs->p_basdat1 != 'C') ? 'is-invalid' : ''; }}" name="p_basdat1" id="p_basdat1" readonly value="{{ $info_mhs->p_basdat1 }}">
                    <label for="p_basdat1" class="form-label">Nilai Praktikum Basis Data</label>
                </div>
                <div class="form-floating  mt-2">
                    <input type="text" class="form-control {{
                        ($info_mhs->rpl1 != 'A' && 
                        $info_mhs->rpl1 != 'AB' &&
                        $info_mhs->rpl1 != 'B' &&
                        $info_mhs->rpl1 != 'BC' &&
                        $info_mhs->rpl1 != 'C') ? 'is-invalid' : ''; }}" name="rpl1" id="rpl1" readonly value="{{ $info_mhs->rpl1 }}">
                    <label for="rpl1" class="form-label">Nilai Rekayasa Perangkat Lunak</label>
                </div>
                <div class="form-floating  mt-2">
                    <input type="text" class="form-control {{
                        ($info_mhs->appl1 != 'A' && 
                        $info_mhs->appl1 != 'AB' &&
                        $info_mhs->appl1 != 'B' &&
                        $info_mhs->appl1 != 'BC' &&
                        $info_mhs->appl1 != 'C') ? 'is-invalid' : ''; }}" name="appl1" id="appl1" readonly value="{{ $info_mhs->appl1 }}">
                    <label for="appl1" class="form-label">Nilai Analisis dan Perancangan Perangkat Lunak</label>
                </div>
                <div class="form-floating  mt-2">
                    <input type="text" class="form-control {{
                        ($info_mhs->progweb1 != 'A' && 
                        $info_mhs->progweb1 != 'AB' &&
                        $info_mhs->progweb1 != 'B' &&
                        $info_mhs->progweb1 != 'BC' &&
                        $info_mhs->progweb1 != 'C') ? 'is-invalid' : ''; }}" name="progweb1" id="progweb1" readonly value="{{ $info_mhs->progweb1 }}">
                    <label for="progweb1" class="form-label">Nilai Pemograman Web</label>
                </div>
                <div class="form-floating  mt-2">
                    <input type="text" class="form-control {{
                        ($info_mhs->p_progweb1 != 'A' && 
                        $info_mhs->p_progweb1 != 'AB' &&
                        $info_mhs->p_progweb1 != 'B' &&
                        $info_mhs->p_progweb1 != 'BC' &&
                        $info_mhs->p_progweb1 != 'C') ? 'is-invalid' : ''; }}" name="p_progweb1" id="p_progweb1" readonly value="{{ $info_mhs->p_progweb1 }}">
                    <label for="p_progweb1" class="form-label">Nilai Praktikum Pemograman Web</label>
                </div>
        <form action="/koorkp/set-status/{{ $datas->id }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-floating">
                        <select type="text" class="form-select" name="status_mhsw1" id="status_mhsw1">
                            <option>Memenuhi </option>
                            <option>Tidak Memenuhi </option>
                            <option>Bersyarat </option>
                        </select>
                        <label for="status_mhsw1" class="form-label">Status Mahasiswa1</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select type="text" class="form-select" name="status_mhsw2" id="status_mhsw2">
                            <option>Memenuhi </option>
                            <option>Tidak Memenuhi </option>
                            <option>Bersyarat </option>
                        </select>
                        <label for="status_mhsw2" class="form-label">Status Mahasiswa2</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select type="text" class="form-select" name="status_klmpk" id="status_klmpk">
                            <option>Memenuhi </option>
                            <option>Tidak Memenuhi </option>
                            <option>Bersyarat </option>
                        </select>
                        <label for="status_klmpk" class="form-label">Status Kelompok</label>
                    </div>
                </div>
            </div>
            <table border = "1" cellpadding="10"> 
                <tr>
                    <td> Total </td>
                    <td> 36</td>
                </tr>
                <tr>
                    @inject('DashboardKoor', 'App\Http\Controllers\DashboardKoorController')
                    <td> Memenuhi </td>
                    <td> {{ 36 - $DashboardKoor::menghitung_total_tidak_memenuhi($id) }} </td>
                </tr>
                <tr>
                    @inject('DashboardKoor', 'App\Http\Controllers\DashboardKoorController')
                    <td> Tidak memenuhi <td>
                    <td> {{ $DashboardKoor::menghitung_total_tidak_memenuhi($id) }} </td>
                </tr>
                <tr>
                    <td> Bersyarat </td>
                    <td>  1</td>
                </tr>
            </table>
            <button type="submit" class="btn bg-warning mt-3">Ubah Status</button>
        </form>
        <a href="/koorkp" class="btn bg-primary mt-3">Kembali</a>
    </main>
@endsection
