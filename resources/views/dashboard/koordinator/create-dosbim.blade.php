@extends('dashboard.koordinator.main')
@section('container')
<div class="text-center mt-5 mb-5">
    <h1>Ploting Dosen Pembimbing</h1>
    <div class="mb-3">
        <label class="form-label">Ajuan Dosbim 1</label>
        <input type="text" class="form-control" value="{{ $datas->materi->ajuan_pembimbing1 }}">
        
        <label class="form-label">Jumlah Kelompok Yang dibimbing oleh Dosbim 1</label>
        <input type="text" class="form-control" value="{{ $jumlah_ajuan_dosbim1 }}">
    </div>
    <div class="mb-3">
            <label class="form-label">Ajuan Dosbim 2</label>
            <input type="text" class="form-control" value="{{ $datas->materi->ajuan_pembimbing2 }}">
            <label class="form-label">Jumlah Kelompok Yang dibimbing oleh Dosbim 2</label>
            <input type="text" class="form-control" value="{{ $jumlah_ajuan_dosbim2 }}">
    </div>
    <form method="POST" action="{{ route('ploting-dosen.update', $datas->id) }}">
        @csrf
        @method('PUT')
        <select class="form-select" name="dosbim" id="dosbim">
            <option selected>Pembimbing</option>
            @foreach ($dosens as $dosen)
            <option> {{ $dosen->nama }}</option>
            @endforeach
        </select>
          <button type="sumbit" class="btn btn-success mt-3">Sumbit </button>
    </form>
</div>
@endsection