@extends('dashboard.koordinator.main')
@section('container')
    @if ($bukatutupform->kp1 == 0)
    <form action="/bukatutupform" method="post"> <button class="btn" type="submit"
            style="background-color:#ff8c1a;">
            @csrf
            <input type="hidden" name="kp1" value=1>
            <i class="fa-solid fa-unlock fa-lg"></i>
        </button>
    </form>
    @endif
@endsection