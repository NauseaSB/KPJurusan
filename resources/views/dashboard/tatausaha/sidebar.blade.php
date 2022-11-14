<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('TU') ? 'active' : '' }}" aria-current="page" href="/TU">
                    <span data-feather="list" class="align-text-bottom"></span>
                    Data Pendaftaran KP 1
                </a>
                <a class="nav-link {{ Request::is('data-kp2-tu') ? 'active' : '' }}" aria-current="page"
                    href="/data-kp2-tu">
                    <span data-feather="list" class="align-text-bottom"></span>
                    Data Pendaftaran KP 2
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
