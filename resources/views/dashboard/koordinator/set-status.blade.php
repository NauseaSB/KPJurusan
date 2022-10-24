@extends('dashboard.koordinator.main')
@section('container')
    <main class="form-signin text-center mt-5">
        <h1>Set Status</h1>
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
            <button type="submit" class="btn bg-warning mt-3">Ubah Status</button>
        </form>
        <a href="/koorkp" class="btn bg-primary mt-3">Kembali</a>
    </main>
@endsection
