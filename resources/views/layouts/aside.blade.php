<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-2"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('home') }}">
            <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">{{ env('APP_NAME', 'Argon') }}</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('home') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('establishment.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Todos Mis Establecimientos</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{ route('establishment.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-bell-concierge"></i>
                    </div>
                    <span class="nav-link-text ms-1">Recepción</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Mis Hoteles</h6>
            </li>

            @forelse ($establishments as $establishment)
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link collapsed"
                        aria-controls="pagesExamples" role="button" aria-expanded="false">
                        <div
                            class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-ungroup text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Hotel 1</span>
                    </a>
                    <div class="collapse" id="pagesExamples" style="">
                        <ul class="nav ms-4">
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="{{ route('establishment.show', $establishment->id) }}">
                                    <span class="sidenav-mini-icon"> N </span>
                                    <span class="sidenav-normal"> Habitaciones </span>
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link " href="../../pages/pages/chat.html">
                                    <span class="sidenav-mini-icon"> C </span>
                                    <span class="sidenav-normal"> Areas Establecimiento </span>
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link " href="../../pages/pages/chat.html">
                                    <span class="sidenav-mini-icon"> C </span>
                                    <span class="sidenav-normal"> Areas Habitación </span>
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link " href="{{ route('product.index') }}">
                                    <span class="sidenav-mini-icon"> C </span>
                                    <span class="sidenav-normal"> Productos </span>
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link " href="../../pages/pages/chat.html">
                                    <span class="sidenav-mini-icon"> C </span>
                                    <span class="sidenav-normal"> Compras </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            @empty
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6 text-danger">NO HAY HOTELES
                    </h6>
                </li>
            @endforelse

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Mis Moteles</h6>
            </li>

            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link collapsed"
                    aria-controls="pagesExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-ungroup text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Motel 1</span>
                </a>
                <div class="collapse" id="pagesExamples" style="">
                    <ul class="nav ms-4">
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('product.index') }}">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal"> Productos </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('establishment.show', 1) }}">
                                <span class="sidenav-mini-icon"> H </span>
                                <span class="sidenav-normal"> Habitaciones </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="../../pages/pages/chat.html">
                                <span class="sidenav-mini-icon"> A </span>
                                <span class="sidenav-normal"> Areas Establecimiento </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="../../pages/pages/chat.html">
                                <span class="sidenav-mini-icon"> A </span>
                                <span class="sidenav-normal"> Areas Habitación </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="../../pages/pages/chat.html">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal"> Compras </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</aside>
