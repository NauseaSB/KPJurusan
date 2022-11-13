@extends('dashboard.koordinator.main')
@section('container')
    <div class="text-center mt-5 mb-5">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if ($bukatutupform->kp1 == 1)
            <div class="row justify-content-center">
                <div class="col-auto">
                    <table class="table table-responsive">
                        <tr>
                            <th>KP 1 :</th>
                            <th><span class="badge bg-success">Buka</span></th>
                        </tr>
                        <tr>
                            <th>KP 2 :</th>
                            <th><span class="badge bg-danger">Tutup</span></th>
                        </tr>
                        <tr>
                            <th>Seminar :</th>
                            @if ($bukatutupform->seminar == 1)
                                <th><span class="badge bg-success">Buka</span></th>
                            @else
                                <th><span class="badge bg-danger">Tutup</span></th>
                            @endif
                        </tr>
                    </table>
                </div>
            </div>
            <form action="/bukatutupkp1" method="post">
                @csrf
                <button class="btn btn-primary" type="submit">
                    <input type="hidden" name="kp1" value=0>
                    <input type="hidden" name="kp2" value=1>
                    <i class="fa-solid fa-unlock fa-lg"></i>
                    Tutup KP1
                </button>
            </form>
        @else
            <div class="row justify-content-center">
                <div class="col-auto">
                    <table class="table table responsive">
                        <tr>
                            <th>KP 1 :</th>
                            <th><span class="badge bg-danger">Tutup</span></th>
                        </tr>
                        <tr>
                            <th>KP 2 :</th>
                            <th><span class="badge bg-success">Buka</span></th>
                        </tr>
                        <tr>
                            <th>Seminar :</th>
                            @if ($bukatutupform->seminar == 1)
                                <th><span class="badge bg-success">Buka</span></th>
                            @else
                                <th><span class="badge bg-danger">Tutup</span></th>
                            @endif
                        </tr>
                    </table>
                </div>
            </div>
            <form action="/bukatutupkp2" method="post">
                @csrf
                <button class="btn btn-primary" type="submit">
                    <input type="hidden" name="kp1" value=1>
                    <input type="hidden" name="kp2" value=0>
                    <i class="fa-solid fa-unlock fa-lg"></i>
                    Tutup KP2
                </button>
            </form>
        @endif
        @if ($bukatutupform->seminar == 1)
            <form action="/bukatutupseminar" method="post">
                @csrf
                <button class="btn btn-primary mt-3" type="submit">
                    <input type="hidden" name="seminar" value=0>
                    <i class="fa-solid fa-unlock fa-lg"></i>
                    Tutup Seminar
                </button>
            </form>
        @else
            <form action="/bukatutupseminar" method="post">
                @csrf
                <button class="btn btn-primary mt-3" type="submit">
                    <input type="hidden" name="seminar" value=1>
                    <i class="fa-solid fa-unlock fa-lg"></i>
                    Buka Seminar
                </button>
            </form>
        @endif

    </div>
@endsection
