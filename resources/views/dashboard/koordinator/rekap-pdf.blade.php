<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
</head>

<body>
    <h1>Rekap Data KP</h1>
    <table class="table table-striped table-bordered table-sm" border="1">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIM - Nama Mahasiswa 1</th>
                <th scope="col">NIM - Nama Mahasiswa 2</th>
                <th scope="col">Judul</th>
                <th scope="col">Dosen Pembimbing</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if (isset($item->mahasiswa))
                            {{ $item->mahasiswa->nim }} - {{ $item->mahasiswa->nama }}
                        @endif
                    </td>
                    <td>
                        @if (isset($item->mahasiswa2))
                            {{ $item->mahasiswa2->nim }} - {{ $item->mahasiswa2->nama }}
                        @endif
                    </td>
                    <td>
                        @if (isset($item->materi))
                            {{ $item->materi->judul_kp }}
                        @endif
                    </td>
                    <td>
                        @if (isset($item->dosbim))
                            {{ $item->dosbim }}
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
