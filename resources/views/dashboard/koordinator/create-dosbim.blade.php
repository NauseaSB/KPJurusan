@extends('dashboard.koordinator.main')
@section('container')
    <div class="text-center mt-5 mb-5">
        <h1>Ploting Dosen Pembimbing</h1>
        <div class="mb-3 mt-3">
            <label class="form-label">Ajuan Alternatif Dosen Pembimbing 1</label>
            <input type="text" class="form-control" value="{{ $datas->materi->ajuan_pembimbing1 }}">

            <label class="form-label mt-3">Jumlah Kelompok Yang dibimbing oleh Alternatif Dosen Pembimbing 1</label>
            <input type="text" class="form-control" value="{{ $jumlah_ajuan_dosbim1 }}">
        </div>
        <div class="mb-3 mt-3">
            <label class="form-label">Ajuan Alternatif Dosen Pembimbing 2</label>
            <input type="text" class="form-control" value="{{ $datas->materi->ajuan_pembimbing2 }}">
            <label class="form-label mt-3">Jumlah Kelompok Yang dibimbing oleh Alternatif Dosen Pembimbing 2</label>
            <input type="text" class="form-control" value="{{ $jumlah_ajuan_dosbim2 }}">
        </div>
        <form method="POST" action="{{ route('ploting-dosen.update', $datas->id) }}">
            @csrf
            @method('PUT')
            <label class="form-label">Pilihan Pembimbing</label>
            <select class="form-select" name="dosbim" id="dosbim">
                <option selected>Pembimbing</option>
                <option>{{ $datas->materi->ajuan_pembimbing1 }}</option>
                <option>{{ $datas->materi->ajuan_pembimbing2 }}</option>
                <option disabled class="dropdown-divider"></option>
                @foreach ($dosens as $dosen)
                    <option> {{ $dosen->nama }}</option>
                @endforeach
            </select>
            <button type="sumbit" class="btn btn-primary mt-3">Plot Pembimbing</button>
        </form>
    </div>
@endsection
