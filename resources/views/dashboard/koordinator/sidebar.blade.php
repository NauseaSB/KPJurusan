<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('koorkp') ? 'active' : '' }}" aria-current="page" href="/koorkp">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Data Pendaftaran KP1
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('rekap-kp') ? 'active' : '' }}" href="/rekap-kp">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Rekapitulasi KP
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('ploting-dosen') ? 'active' : '' }}"
                    href="{{ route('ploting-dosen.index') }}">
                    <span data-feather="list" class="align-text-bottom"></span>
                    Ploting Dosen Pembimbing
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('data-kp2') ? 'active' : '' }}" href="/data-kp2">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Data Pendaftaran KP2
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('data-seminar') ? 'active' : '' }}" href="/data-seminar">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Data Pendaftaran Seminar KP
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('bukatutupform') ? 'active' : '' }}" href="/bukatutupform">
                    <span data-feather="flag" class="align-text-bottom"></span>
                    Buka Tutup Form
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('ubahperiode') ? 'active' : '' }}" href="/ubahperiode">
                    <span data-feather="calendar" class="align-text-bottom"></span>
                    Ubah Periode
                </a>
            </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between px-3 mt-4 mb-1 text-muted text-uppercase">
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="nav-link border-0 bg-light"><span data-feather="log-out"
                            class="align-text-bottom"></span>
                        Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>
