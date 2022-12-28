@extends('dashboard.koordinator.main')
@section('container')
    <div class="text-center mt-5 mb-5">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-auto">
                <table class="table table-responsive">
                    <tr>
                        <th>Periode :</th>
                        @if ($periode->periode == 1)
                            <th><span class="badge bg-success">GENAP</span></th>
                        @else
                            <th><span class="badge bg-success">GANJIL</span></th>
                        @endif
                    </tr>
                </table>
            </div>
        </div>

        @if ($periode->periode == 1)
            <form action="/ubahsettingperiode" method="post">
                @csrf
                <button class="btn btn-primary mt-3" type="submit">
                    <input type="hidden" name="periode" value=0>
                    <i class="fa-solid fa-unlock fa-lg"></i>
                    Ubah Periode
                </button>
            </form>
        @else
            <form action="/ubahsettingperiode" method="post">
                @csrf
                <button class="btn btn-primary mt-3" type="submit">
                    <input type="hidden" name="periode" value=1>
                    <i class="fa-solid fa-unlock fa-lg"></i>
                    Ubah Periode
                </button>
            </form>
        @endif

    </div>
@endsection
