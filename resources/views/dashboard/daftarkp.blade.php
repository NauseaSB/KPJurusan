@extends('dashboard.layout.main')

@section('container')

    <body>

        <main class="form-signin text-center">
            <form action="/daftarkp" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Daftar Mahasiswa</h1>

                <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('nim') is-invalid rounded @enderror"
                        name="nim" id="nim" placeholder="NIM Mahasiswa 1" required value="{{ old('nim') }}">
                    <label for="nim">NIM Mahasiswa 1</label>
                    @error('nim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class=" form-floating">
                    <input type="text" class="form-control rounded-top @error('angkatan') is-invalid rounded @enderror"
                        name="angkatan" id="angkatan" placeholder="Angkatan" required value="{{ old('angkatan') }}">
                    <label for="angkatan">Angkatan</label>
                    @error('angkatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class=" form-floating">
                    <input type="text" class="form-control @error('nama') is-invalid rounded @enderror" name="nama"
                        id="nama" placeholder="Nama Mahasiswa 1" required value="{{ old('nama') }}">
                    <label for="nama">Nama Mahasiswa 1</label>
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class=" form-floating">
                    <input type="text" class="form-control @error('doswal') is-invalid rounded @enderror" name="doswal"
                        id="doswal" placeholder="Nama Mahasiswa 1" required value="{{ old('doswal') }}">
                    <label for="doswal">Nama Dosen Wali</label>
                    @error('doswal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class=" form-floating">
                    <input type="text" class="form-control @error('peminatan') is-invalid rounded @enderror"
                        name="peminatan" id="peminatan" placeholder="Peminatan" required value="{{ old('peminatan') }}">
                    <label for="peminatan">Peminatan</label>
                    @error('peminatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class=" form-floating">
                    <input type="text" class="form-control @error('ipk') is-invalid rounded @enderror" name="ipk"
                        id="ipk" placeholder="IPK" required value="{{ old('ipk') }}">
                    <label for="ipk">IPK</label>
                    @error('ipk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class=" form-floating">
                    <input type="text" class="form-control @error('t_sks') is-invalid rounded @enderror" name="t_sks"
                        id="t_sks" placeholder="Total SKS" required value="{{ old('t_sks') }}">
                    <label for="t_sks">Total SKS</label>
                    @error('t_sks')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class=" form-floating">
                    <input type="text"
                        class="form-control rounded-bottom @error('semester') is-invalid rounded @enderror" name="semester"
                        id="semester" placeholder="Semester" required value="{{ old('semester') }}">
                    <label for="semester">Semester</label>
                    @error('semester')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
            </form>
        </main>



    </body>
@endsection
