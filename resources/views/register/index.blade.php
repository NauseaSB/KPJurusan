<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Register Kelompok Kerja Praktik</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    <style>

    </style>


    <!-- Custom styles for this template -->
    <link href="/css/registration.css" rel="stylesheet">
</head>

<body class="text-center">
    <main class="form-signin w-500 m-auto">
        <form action="/register" method="post">
            @csrf
            <img class="mb-4" src="{{ asset('img/if unjani.png') }}" alt="" width="80" height="80">
            <h1 class="h2 mb-3 fw-bold"> &emsp;&emsp; FORM PENDAFTARAN KELOMPOK &emsp;&emsp; </h1>

            <div class="row g-2 mb-1">
                <div class="col-md form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="NIM Mahasiswa 1">
                        <option value="">Pilih NIM</option>
                        @foreach ($mahasiswa as $mahasiswas)
                            <option value="{{ $mahasiswas->id }}">{{ $mahasiswas->nim }}</option>
                        @endforeach
                    </select>
                    <label for="floatingSelect">NIM Mahasiswa 1</label>
                </div>
                <div class="col-md form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="NIM Mahasiswa 2">
                        <option value="">Pilih NIM</option>
                        @foreach ($mahasiswa as $mahasiswas)
                            <option value="{{ $mahasiswas->id }}">{{ $mahasiswas->nim }}</option>
                        @endforeach
                    </select>
                    <label for="floatingSelect">NIM Mahasiswa 2</label>
                </div>
            </div>

            <div class="row g-2">
                <div class="col-md form-floating">
                    <input type="text"
                        class="form-control rounded-top @error('angkatan1')
                    is-invalid rounded
                @enderror"
                        a="angkatan1" id="angkatan1" placeholder="Angkatan" required value="{{ old('angkatan1') }}">
                    <label for="angkatan1">Angkatan</label>
                    @error('angkatan1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md form-floating">
                    <input type="text"
                        class="form-control rounded-top @error('angkatan2')
                    is-invalid rounded
                @enderror"
                        a="angkatan2" id="angkatan2" placeholder="Angkatan" required value="{{ old('angkatan2') }}">
                    <label for="angkatan2">Angkatan</label>
                    @error('angkatan2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row g-2">
                <div class="col-md form-floating">
                    <input type="text"
                        class="form-control @error('nama1')
                    is-invalid rounded
                @enderror"
                        a="nama1" id="nama1" placeholder="Nama Mahasiswa 1" required
                        value="{{ old('nama1') }}">
                    <label for="nama1">Nama Mahasiswa 1</label>
                    @error('nama1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md form-floating">
                    <input type="text"
                        class="form-control @error('nama2')
                    is-invalid rounded
                @enderror"
                        name="nama2" id="nama2" placeholder="Nama Mahasiswa 2" required
                        value="{{ old('nama2') }}">
                    <label for="nama2">Nama Mahasiswa 2</label>
                    @error('nama2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row g-2">
                <div class="col-md form-floating">
                    <input type="text"
                        class="form-control @error('doswal1')
                    is-invalid rounded
                @enderror"
                        a="doswal1" id="doswal1" placeholder="Nama Mahasiswa 1" required
                        value="{{ old('doswal1') }}">
                    <label for="doswal1">Nama Dosen Wali</label>
                    @error('doswal1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md form-floating">
                    <input type="text"
                        class="form-control @error('doswal2')
                    is-invalid rounded
                @enderror"
                        a="doswal2" id="doswal2" placeholder="Nama Mahasiswa 1" required
                        value="{{ old('doswal2') }}">
                    <label for="doswal2">Nama Dosen Wali</label>
                    @error('doswal2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row g-2">
                <div class="col-md form-floating">
                    <input type="text"
                        class="form-control @error('peminatan1')
                    is-invalid rounded
                @enderror"
                        a="peminatan1" id="peminatan1" placeholder="Peminatan" required
                        value="{{ old('peminatan1') }}">
                    <label for="peminatan1">Peminatan</label>
                    @error('peminatan1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md form-floating">
                    <input type="text"
                        class="form-control @error('peminatan2')
                    is-invalid rounded
                @enderror"
                        a="peminatan2" id="peminatan2" placeholder="Peminatan" required
                        value="{{ old('peminatan2') }}">
                    <label for="peminatan2">Peminatan</label>
                    @error('peminatan2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row g-2">
                <div class="col-md form-floating">
                    <input type="text"
                        class="form-control @error('ipk1')
                    is-invalid rounded
                @enderror"
                        a="ipk1" id="ipk1" placeholder="IPK" required value="{{ old('ipk1') }}">
                    <label for="ipk1">IPK</label>
                    @error('ipk1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md form-floating">
                    <input type="text"
                        class="form-control @error('ipk2')
                    is-invalid rounded
                @enderror"
                        a="ipk2" id="ipk2" placeholder="IPK" required value="{{ old('ipk2') }}">
                    <label for="ipk2">IPK</label>
                    @error('ipk2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row g-2 mb-2">
                <div class="col-md form-floating">
                    <input type="text"
                        class="form-control rounded-bottom @error('t_sks1')
                    is-invalid rounded
                @enderror"
                        a="t_sks1" id="t_sks1" placeholder="Total SKS" required value="{{ old('t_sks1') }}">
                    <label for="t_sks1">Total SKS</label>
                    @error('t_sks1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md form-floating">
                    <input type="text"
                        class="form-control rounded-bottom @error('t_sks2')
                    is-invalid rounded
                @enderror"
                        a="t_sks2" id="t_sks2" placeholder="Total SKS" required value="{{ old('t_sks2') }}">
                    <label for="t_sks2">Total SKS</label>
                    @error('t_sks2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-floating">
                <input type="text"
                    class="form-control @error('username')
                    is-invalid rounded
                @enderror"
                    name="username" id="username" placeholder="name@example.com" required
                    value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="password"
                    class="form-control rounded-bottom @error('password')
                    is-invalid rounded
                @enderror"
                    id="password" name="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="w-100 btn btn-lg mb-2 btn-primary" type="submit">Register</button>
            <a href="/login">Login</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
        </form>
    </main>



</body>

</html>
