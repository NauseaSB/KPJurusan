<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('daftar-kelompok-kp') ? 'active' : '' }}" href="/daftar-kelompok-kp">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Daftar Kelompok
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('daftar-kp1') ? 'active' : '' }}" href="/daftar-kp1">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Daftar KP 1
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('daftar-materi-kp') ? 'active' : '' }}" href="/daftar-materi-kp">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Daftar Materi KP
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('daftar-kp2') ? 'active' : '' }}" href="/daftar-kp2">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Daftar KP 2
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('daftar-seminar') ? 'active' : '' }}" href="/daftar-seminar">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Daftar Seminar KP
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
