@extends('dashboard.admin.main')
@section('container')
    <div class="d-flex justify-content-center mt-3 mb-3">
        <div class="justify-content-center border-bottom">
            <h1>Tambah Akun</h1>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="justify-content-center">
            <div class="col-md-auto">
                <div class="form-signin">
                    <form action="/tambah-akun" method="post">
                        @csrf
                        <div class="form-floating mt-3">
                            <input type="text"
                                class="form-control @error('username')
                    is-invalid rounded
                @enderror"
                                name="username" id="username" placeholder="Username" required
                                value="{{ old('username') }}">
                            <label for="username">Username</label>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mt-3">
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

                        <div class="form-floating mt-3">
                            <select class="form-select form-select-md" id="role_id" name="role_id" required>
                                <option disabled selected>Pilih Role</option>
                                <option value="1">Admin</option>
                                <option value="2">Mahasiswa</option>
                                <option value="3">Koordinator</option>
                                <option value="4">Tata Usaha</option>
                            </select>
                            <label for="role_id">Role Akun</label>
                        </div>
                        <button class="w-100 btn btn-lg mt-3 btn-primary" type="submit">Tambah Akun</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
