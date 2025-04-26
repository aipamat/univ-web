
<body class="overflow-x-hidden" data-mobile-nav-style="classic">
    <!-- start header -->
    <header>
        <!-- start header top bar -->
        <div class="header-top-bar bg-white">
            <div class="container-fluid py-1">
                <div class="row align-items-center top-bar">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Language Options with Icons (Left Side) -->
                        <div class="d-flex align-items-center">
                            <div class="h-100 d-inline-flex align-items-center">
                                <a class="btn btn-sm-square" target="_blank" href="https://www.instagram.com/iwuidn/"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center">
                                <a class="btn btn-sm-square" target="_blank"
                                    href="https://web.facebook.com/IWUIndonesia/"><i class="fab fa-facebook"></i></a>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center">
                                <a class="btn btn-sm-square" target="_blank"
                                    href="https://www.youtube.com/@iwuchannel"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center">
                                <a class="btn btn-sm-square" target="_blank" href="https://x.com/iwuindonesia"><i
                                        class="fab fa-twitter"></i></a>
                            </div>
                        </div>

                        <!-- Links (Right Side) -->
                        <div class="d-flex align-items-center text-dark flex-grow-1 justify-content-end">
                            <div class="h-100 d-inline-flex align-items-center me-3">
                                <a class="text-center d-flex align-items-center p-md-3 text-dark" target="_blank"
                                    href="https://elearning.iwu.ac.id/" style="font-size: 14px; white-space: nowrap;">
                                    <i class="fa fa-chalkboard-teacher text-dark me-2" style="font-size: 16px;"></i> LMS
                                    IWU
                                </a>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center me-3">
                                <a class="text-center d-flex align-items-center p-md-3 text-dark" target="_blank"
                                    href="https://siakad.iwu.ac.id/login" style="font-size: 14px; white-space: nowrap;">
                                    <i class="fas fa-user-graduate text-dark me-2" style="font-size: 16px;"></i>
                                    Dashboard Mahasiswa
                                </a>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center me-3">
                                <a class="text-center d-flex align-items-center p-md-3 text-dark" target="_blank"
                                    href="https://pmb.iwu.ac.id/" style="font-size: 14px; white-space: nowrap;">
                                    <i class="fa fa-user text-dark me-2" style="font-size: 16px;"></i> PMB IWU
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header top bar -->

        <nav class="navbar navbar-expand-lg header-light bg-white center-logo header-reverse">
            <div class="container-fluid">
                <div class="col-auto col-xl-2 col-lg-1 menu-logo">
                    <div class="d-none d-xl-block">
                        <div class="widget-text fw-600"><i
                                class="bi bi-telephone-outbound text-base-color me-10px"></i><a
                                href="tel:0226019845">(022) 6019845</a></div>
                    </div>
                    <a class="navbar-brand" href="/">
                        <img src="{{asset('images/IWU/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="col-auto col-xl-8 col-lg-10 menu-order">
                    <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                        <ul class="navbar-nav navbar-left justify-content-end">
                            <li class="nav-item"><a href="/" class="nav-link">Beranda</a></li>
                            <li class="nav-item dropdown dropdown-with-icon"><a href="/tentang-kampus"
                                    class="nav-link">Tentang</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a href="{{url('/tentang-kampus#visi-misi')}}">
                                            <div class="submenu-icon-content">
                                                <span>Visi Misi</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/tentang-kampus#pimpinan')}}">
                                            <div class="submenu-icon-content">
                                                <span>Pimpinan</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/tentang-kampus#struktur-organisasi')}}">
                                            <div class="submenu-icon-content">
                                                <span>Struktur Organisasi</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/tentang-kampus#kerja-sama')}}">
                                            <div class="submenu-icon-content">
                                                <span>Kerja Sama</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-with-icon"><a href="/fakultas"
                                    class="nav-link">Fakultas</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        @foreach($fakultasItems as $fakultasLink)
                                            <li>
                                                <a href="/fakultas/{{$fakultasLink->id}}">
                                                    <div class="submenu-icon-content">
                                                        <span>{{$fakultasLink->nama_fakultas}}</span>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav navbar-right justify-content-start">
                        <li class="nav-item"><a href="/fasilitas"
                        class="nav-link">Fasilitas</a></li>
                            <li class="nav-item"><a href="/beasiswa"
                                    class="nav-link">Beasiswa</a>
                            </li>
                            <li class="nav-item"><a href="/testimoni"
                                    class="nav-link">Testimoni</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-xl-2 col-lg-1 text-end">
                    <div class="d-none d-xl-flex align-items-center widget-text fw-600"><i
                            class="bi bi-calendar-check text-base-color me-10px"></i><a href="https://pmb.iwu.ac.id/"
                            target="_blank">Daftar Sekarang</a></div>
                </div>
            </div>
        </nav>
    </header>
    <!-- end header -->
    <!-- start page title -->