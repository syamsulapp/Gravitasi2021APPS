@extends('layouts.app')

@section('content')
<!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif


</div> -->


<div id="layoutDefault">
    <!-- <div id="layoutDefault_content">
        <main> -->
    <!-- Navbar-->
    <nav class="navbar navbar-marketing navbar-expand-lg bg-transparent navbar-dark fixed-top">
        <div class="container px-5">
            <a class="navbar-brand text-white" href="{{ url('/') }}">Gravitasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-lg-5">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                    <li class="nav-item dropdown dropdown-xl no-caret">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownDemos" href="{{ url('/about') }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About Gravitasi
                            <i class="fas fa-chevron-right dropdown-arrow"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up me-lg-n25 me-xl-n15" aria-labelledby="navbarDropdownDemos">
                            <div class="row g-0">
                                <div class="col-lg-5 p-lg-3 bg-img-cover overlay overlay-primary overlay-70 d-none d-lg-block" style="background-image: url('assets/img/backgrounds/bg-dropdown-xl.jpg')">
                                    <div class="d-flex h-100 w-100 align-items-center justify-content-center">
                                        <div class="text-white text-center z-1">
                                            <div class="mb-3">Multipurpose landing pages for a variety of
                                                projects.</div>
                                            <a class="btn btn-white btn-sm text-primary fw-500" href="index.html">View All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @if(Route::has('login'))
                    @auth
                    <li class="nav-item dropdown no-caret ml-5">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="{{ url('/users/dashboard') }}">
                            <!-- Documentation -->
                            <i data-feather="user"></i>
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    @endauth
                    @endif
                </ul>

            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class="page-header-ui page-header-ui-dark bg-gradient-primary-to-secondary">
        <div class="page-header-ui-content pt-10">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h1 class="page-header-ui-title text-header font-weight-bold">Selamat Datang Di HomePage Gravitasi 2021</h1>
                        <p class="page-header-ui-text mb-5">Gravitasi (Gebyar Civitas Sains Fisika) adalah kegiatan tahunan yang diselenggarakan oleh
                            Hmj Fisika </p>
                        <a class="btn btn-teal fw-500 me-2" href="{{ route('register') }}">
                            Daftar Sekarang
                            <i class="ms-2" data-feather="arrow-right"></i>
                        </a>
                        <a class="btn btn-teal fw-500 me-2" href="{{ route('login') }}">
                            Login
                            <i class="ms-2" data-feather="arrow-right"></i>
                        </a>
                        <a class="btn btn-link fw-500" href="">Tata Cara Pendaftaran</a>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block" data-aos="fade-up" data-aos-delay="100"><img class="img-fluid" src="{{ asset('img/illustrations/windows.svg') }}" /></div>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-white">
            <!-- Rounded SVG Border-->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor">
                <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
            </svg>
        </div>
    </header>
    <hr class="m-0" />
    <!-- </main>
    </div> -->
    <div id="layoutDefault_footer">
        <footer class="footer pt-10 pb-5 mt-auto bg-light footer-light">
            <div class="container px-5">
                <div class="row gx-5">
                    <div class="col-lg-3">
                        <div class="footer-brand">Gravitasi</div>
                        <div class="mb-3">Gerbyar civitas sains fiska</div>
                        <div class="icon-list-social mb-5">
                            <a class="icon-list-social-link" href="https://www.instagram.com/hmjfisika_uho/"><i class="fab fa-instagram"></i></a>
                            <a class="icon-list-social-link" href="https://www.facebook.com/HMJ-Fisika-UHO-103201558382402"><i class="fab fa-facebook"></i></a>
                            <a class="icon-list-social-link" href="https://github.com/syamsulapp/Gravitasi2021APPS"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row gx-5">
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <div class="text-uppercase-expanded text-xs mb-4">Product</div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="#!">Landing</a></li>
                                    <li class="mb-2"><a href="#!">Pages</a></li>
                                    <li class="mb-2"><a href="#!">Sections</a></li>
                                    <li class="mb-2"><a href="#!">Documentation</a></li>
                                    <li><a href="#!">Changelog</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <div class="text-uppercase-expanded text-xs mb-4">Technical</div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="#!">Documentation</a></li>
                                    <li class="mb-2"><a href="#!">Changelog</a></li>
                                    <li class="mb-2"><a href="#!">Theme Customizer</a></li>
                                    <li><a href="#!">UI Kit</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                                <div class="text-uppercase-expanded text-xs mb-4">Includes</div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="#!">Utilities</a></li>
                                    <li class="mb-2"><a href="#!">Components</a></li>
                                    <li class="mb-2"><a href="#!">Layouts</a></li>
                                    <li class="mb-2"><a href="#!">Code Samples</a></li>
                                    <li class="mb-2"><a href="#!">Products</a></li>
                                    <li class="mb-2"><a href="#!">Affiliates</a></li>
                                    <li><a href="#!">Updates</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="text-uppercase-expanded text-xs mb-4">Legal</div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="#!">Privacy Policy</a></li>
                                    <li class="mb-2"><a href="#!">Terms and Conditions</a></li>
                                    <li><a href="#!">License</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-5" />
                <div class="row gx-5 align-items-center">
                    <div class="col-md-6 small">@ {{ now()->year }} Gravitasi All Reserved</div>
                    <div class="col-md-6 text-md-end small">
                        <a href="#!">Privacy Policy</a>
                        ·
                        <a href="#!">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

@endsection