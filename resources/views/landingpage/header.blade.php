<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Agung Cargo - PT. Agung Wijaksana Utama Sakti </title>
    <meta content="Agung Cargo Indonesia" name="description">
    <meta content="telephone=no" name="format-detection">
    <meta
        content="Agung Cargo, Door-to-door pick-up, Jasa Pengiriman Terbaik, Jasa pengiriman Termurah, Bussiness service, Cargo termurah, Cargo Tercepat, J&t Cargo, Cargo Terdekat, Bisnis Online, Cargo Cargo, Tarif Agung Cargo, Jasa Pengiriman Cargo Terbaik, Jasa pengiriman Cargo Termurah"
        name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- <link href="assets/css/style.css" rel="stylesheet"> --}}
</head>


<body>


    <!-- ======= Floating Whatsapp ======= -->
    <a href="http://wa.me/6282298989199?text=Halo%2C%20Agung%20Cargo" target="_blank">
        <button class="btn-floating whatsapp">
            <img src="{{ asset('img/wa.png') }}" alt="whatsApp">
            <span>082298989199</span>
        </button>
    </a><!-- .end floating wa -->


    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="" class="logo"><img src="{{ asset('img/logo.png') }}" alt=""></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                    <li class="dropdown"><a href="#"><span>Layanan</span><i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Kargo Kecil</a></li>
                            <li><a href="#">Kargo Medium</a></li>
                            <li><a href="#">Kargo Besar</a></li>
                        </ul>
                    </li>

                    <li><a class="nav-link scrollto " href="#">Berita</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('cektarif') }}">Cek Tarif</a></li>

                    <li><a href="#"><span>Karir</span></a>
                        <!--<ul>
                                            <li><a href="#">Drop Down 1</a></li>
                                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                            <ul>
                                            <li><a href="#">Deep Drop Down 1</a></li>
                                            <li><a href="#">Deep Drop Down 2</a></li>
                                            <li><a href="#">Deep Drop Down 3</a></li>
                                            <li><a href="#">Deep Drop Down 4</a></li>
                                            <li><a href="#">Deep Drop Down 5</a></li>
                                            </ul>
                                            </li>
                                            <li><a href="#">Drop Down 2</a></li>
                                            <li><a href="#">Drop Down 3</a></li>
                                            <li><a href="#">Drop Down 4</a></li>
                                            </ul> -->
                    </li>

                    <li><a class="nav-link scrollto" href="{{ url('kontak') }}">Kontak</a></li>
                    @if (Route::has('login'))
                        {{-- <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10"> --}}
                        @auth
                            @role('admin')
                                <li> <a class="nav-link scrollto" href="{{ url('/admindashboard') }}">Admin Panel</a>
                                </li>
                            @endrole
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </li>
                        @else
                            <li>
                                <a class="nav-link scrollto" href="{{ route('login') }}">Login</a>
                            </li>
                            <li>
                                @if (Route::has('register'))
                                    <a class="nav-link scrollto" href="{{ route('register') }} ">Register</a>
                                @endif
                            </li>
                        @endauth
                    @endif
                </ul>
            </nav>
            <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
</body>
