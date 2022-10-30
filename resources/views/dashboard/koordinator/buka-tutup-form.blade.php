@extends('dashboard.koordinator.main')
@section('container')
    <div class="text-center mt-5 mb-5">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <h3>Status Form KP1 : @if ($bukatutupform->kp1 == 0)
                Tutup
            @elseif ($bukatutupform->kp1 == 1)
                Buka
            @endif
        </h3>
        @if ($bukatutupform->kp1 == 0)
            <form action="/bukatutupkp1" method="post">
                @csrf
                <button class="btn btn-primary" type="submit">
                    <input type="hidden" name="kp1" value=1>
                    <i class="fa-solid fa-unlock fa-lg"></i>
                    Buka Form
                </button>
            </form>
        @elseif ($bukatutupform->kp1 == 1)
            <form action="/bukatutupkp1" method="post">
                @csrf
                <button class="btn btn-primary" type="submit">
                    <input type="hidden" name="kp1" value=0>
                    <i class="fa-solid fa-unlock fa-lg"></i>
                    Tutup Form
                </button>
            </form>
        @endif

        <h3 class="mt-5">Status Form KP2 : @if ($bukatutupform->kp2 == 0)
                Tutup
            @elseif ($bukatutupform->kp2 == 1)
                Buka
            @endif
        </h3>
        @if ($bukatutupform->kp2 == 0)
            <form action="/bukatutupkp2" method="post">
                @csrf
                <button class="btn btn-primary" type="submit">
                    <input type="hidden" name="kp2" value=1>
                    <i class="fa-solid fa-unlock fa-lg"></i>
                    Buka Form
                </button>
            </form>
        @elseif ($bukatutupform->kp2 == 1)
            <form action="/bukatutupkp2" method="post">
                @csrf
                <button class="btn btn-primary" type="submit">
                    <input type="hidden" name="kp2" value=0>
                    <i class="fa-solid fa-unlock fa-lg"></i>
                    Tutup Form
                </button>
            </form>
        @endif

    </div>
@endsection
