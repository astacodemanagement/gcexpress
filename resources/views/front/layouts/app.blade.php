<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $profil->nama_perusahaan }} | @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="/upload/profil/{{ $profil->favicon }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('themplete/front') }}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('themplete/front') }}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('themplete/front') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('themplete/front') }}/assets/css/custom-animate.css">
    <link rel="stylesheet" href="{{ asset('themplete/front') }}/assets/css/icomoon.css">
    <link rel="stylesheet" href="{{ asset('themplete/front') }}/assets/css/jquery.magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('themplete/front') }}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('themplete/front') }}/assets/css/nouislider.min.css">
    <link rel="stylesheet" href="{{ asset('themplete/front') }}/assets/css/nouislider.pips.css">
    <link rel="stylesheet" href="{{ asset('themplete/front') }}/assets/css/odometer.css">
    <link rel="stylesheet" href="{{ asset('themplete/front') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('themplete/front') }}/assets/css/swiper.min.css">

    <link rel="stylesheet" href="{{ asset('themplete/front') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('themplete/front') }}/assets/css/responsive.css">
    <style>
        body {
            background-color: black;
            color: white;
            /* Untuk teks menjadi warna putih agar terlihat */
        }
    </style>
</head>

<body class="">

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="icon-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <div class="fix">


        <!--Start Main Header One -->
        <header class="main-header main-header-one">
            <div id="sticky-header" class="menu-area">
                <div class="main-header-one__outer">
                    <div class="logo-box-one" style="background-color: black; height: 100%;">
                        {{-- <div class="logo-box-one__bg"
                            style="background-image: url({{ asset('themplete/front') }}/assets/img/pattern/logo-box-one-pattern.png);">
                        </div> --}}
                        <a href="/">
                            <img src="/upload/profil/{{ $profil->logo }}" alt="Logo" width="80px;">
                        </a>
                    </div>

                    <div class="main-header-one__right">
                        <div class="container">
                            <div class="menu-area__inner">
                                <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                                <div class="menu-wrap">
                                    <nav class="menu-nav">
                                        <div class="main-header-one__inner">


                                            <div class="main-header-one__bottom">
                                                <div class="main-header-one__bottom-left">
                                                    <div class="navbar-wrap main-menu">
                                                        <ul class="navigation">
                                                            <li class="active"><a href="/beranda">Beranda</a>
                                                            </li>
                                                            <li><a href="/layanan">Cek Resi</a>
                                                            </li>
                                                            <li><a href="/layanan">Layanan</a>
                                                            </li>

                                                            <li class="menu-item-has-children"><a
                                                                    href="#">Informasi</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="">FAQ</a></li>
                                                                    <li><a href="">Informasi Paket
                                                                            Two</a></li>
                                                                    <li><a href="">Terms</a></li>
                                                                </ul>
                                                            </li>

                                                            <li class="menu-item-has-children"><a
                                                                    href="#">Tentang Kami</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="">Profil</a>
                                                                    </li>
                                                                    <li><a href="">Berita & Acara</a>
                                                                    </li>
                                                                    <li><a href="">Karir</a>
                                                                    </li>
                                                                    <li><a href="">Kontak</a></li>

                                                                </ul>
                                                            </li>

                                                            <li><a
                                                                    href="{{ asset('themplete/front') }}/contact.html">VIP</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="main-header-one__bottom-right">
                                                    <div class="search-box">
                                                        <a href="#"
                                                            class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                                    </div>

                                                    <div class="btn-box">
                                                        <a class="thm-btn" href="">
                                                            <span class="txt">Login / Daftar</span>
                                                            <i class="fa-solid fa-user"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>

                            <!-- Mobile Menu  -->
                            <div class="mobile-menu" style="background-color: black;">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                    {{-- <div class="nav-logo">
                                        <a href="/beranda">
                                            <img src="/upload/profil/{{ $profil->logo }}" alt="Logo" >
                                        </a>
                                    </div> --}}
                                    <br>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="contact-info">
                                        <div class="icon-box"><span class="icon-telephone-handle-silhouette"></span>
                                        </div>
                                        <p><a href="tel:{{ $profil->no_wa }}">{{ $profil->no_wa }}</a>
                                        </p>
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix list-wrap">
                                            <li><a href="{{ $profil->facebook }}"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="{{ $profil->twitter }}"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li><a href="{{ $profil->instagram }}"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a href="{{ $profil->linkedin }}"><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="{{ $profil->youtube }}"><i class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End Main Header One -->


        @yield('content')

        <footer class="footer-one" style="background-color: black;">
            {{-- <div class="footer-one__bg"
                style="background-image: url(https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/01gf36esnb7m5jknhf51d2ngrf.jpg);">
            </div> --}}
            <!-- Start Footer Main -->
            <div class="footer-main">
                <div class="container">

                    <div class="footer-one__top">
                        <div class="footer-one__top-inner">
                            <div class="logo-box">
                                <a href="/beranda"><img src="/upload/profil/{{ $profil->logo }}"
                                        alt="{{ $profil->nama_perusahaan }}" style="width: 100px;"></a>
                            </div>

                            <div class="footer-one__top-right">
                                <div class="text">
                                    <p>Berlangganan buletin mingguan kami untuk mendapatkan informasi dan promosi di
                                        kotak masuk Anda</p>
                                </div>
                                <div class="footer-one__top-subscribe">
                                    <form class="footer-one__top-subscribe-form" action="#">
                                        <input type="email" name="email" placeholder="Masukkan Email">
                                        <button type="submit" class="thm-btn">
                                            <span class="txt">Berlangganan </span> <i
                                                class="icon-up-right-arrow"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="footer-main__bottom">
                        <div class="row">
                            <!--Start Single Footer Widget-->
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                                <div class="single-footer-widget footer-widget__about">
                                    <div class="title">
                                        <h2>Tentang {{ $profil->nama_perusahaan }}</h2>
                                    </div>

                                    <div class="footer-widget__about-inner">
                                        <p class="text1">{{ $profil->deskripsi_3 }}</p>
                                        <p class="text2">Jam Kerja</p>
                                        <p class="text3">Senin-Sabtu: 08:00 - 16:00 WIB</p>

                                        <div class="footer-social-link">
                                            <a href="{{ $profil->facebook }}"><span class="icon-facebook"></span></a>
                                            <a href="{{ $profil->twitter }}"><span class="icon-twitter"></span></a>
                                            <a href="{{ $profil->instagramlinkedin }}"><span
                                                    class="icon-instagram"></span></a>
                                            <a href="{{ $profil->email }}"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--End Single Footer Widget-->

                            <!--Start Single Footer Widget-->
                            <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="single-footer-widget footer-widget__links">
                                    <div class="title">
                                        <h2>Link</h2>
                                    </div>

                                    <div class="footer-widget__links-box">
                                        <ul>
                                            <li><a href="{{ asset('themplete/front') }}/about.html">Berita & Acara</a>
                                            </li>
                                            <li><a href="{{ asset('themplete/front') }}/about.html">Profil</a></li>
                                            <li><a href="{{ asset('themplete/front') }}/about.html">Karir</a></li>
                                            <li><a href="{{ asset('themplete/front') }}/about.html">Informasi
                                                    Paket</a></li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!--End Single Footer Widget-->

                            <!--Start Single Footer Widget-->
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="single-footer-widget footer-widget__links services">
                                    <div class="title">
                                        <h2>Layanan Kami</h2>
                                    </div>

                                    <div class="footer-widget__links-box">
                                        <ul>
                                            @foreach ($layanan as $p)
                                                <li><a
                                                        href="https://wa.me/{{ $profil->no_wa }}">{{ $p->nama_layanan }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!--End Single Footer Widget-->

                            <!--Start Single Footer Widget-->
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                <div class="single-footer-widget footer-widget__contact">
                                    <div class="title">
                                        <h2>Informasi</h2>
                                    </div>

                                    <div class="footer-widget__contact-box">
                                        <ul>
                                            <li>
                                                <div class="icon-box">
                                                    <span class="icon-pin"></span>
                                                </div>

                                                <div class="content-box">
                                                    <p>Alamat</p>
                                                    <h4>{{ $profil->alamat }}</h4>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="icon-box">
                                                    <span class="icon-paper-plane"></span>
                                                </div>

                                                <div class="content-box">
                                                    <p>Email</p>
                                                    <h4><a
                                                            href="mailto:{{ $profil->email }}">{{ $profil->email }}</a>
                                                    </h4>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="icon-box">
                                                    <span class="icon-out-call"></span>
                                                </div>

                                                <div class="content-box">
                                                    <p>No Telp</p>
                                                    <h4><a
                                                            href="tel:{{ $profil->no_telp }}">{{ $profil->no_telp }}</a>
                                                    </h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!--End Single Footer Widget-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Main -->

            <!--Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom__inner">
                        <div class="copyright-text">
                            <p>© 2024 <a href="{{ asset('themplete/front') }}/index.html">{{ $profil->nama_perusahaan }}</a> All Rights
                                Reserved.</p>
                        </div>


                        <div class="copyright-menu">
                            <ul>
                                <li><a href="{{ asset('themplete/front') }}/about.html">Trams &amp; Condition <span
                                            class="icon-right-arrow-5"></span></a></li>
                                <li><a href="{{ asset('themplete/front') }}/about.html">Privacy Policy <span
                                            class="icon-right-arrow-5"></span></a>
                                </li>
                                <li><a href="{{ asset('themplete/front') }}/about.html">Support <span
                                            class="icon-right-arrow-5"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer Bottom -->
        </footer>
    </div>

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler">
            <div class="search-popup__close-icon">
                <span class="icon-plus"></span>
            </div>
        </div>
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label>
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="btn-box">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- JS here -->
    <script src="{{ asset('themplete/front') }}/assets/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('themplete/front') }}/assets/js/ajax-form.js"></script>
    <script src="{{ asset('themplete/front') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('themplete/front') }}/assets/js/jquery.appear.js"></script>
    <script src="{{ asset('themplete/front') }}/assets/js/jquery.circleType.js"></script>
    <script src="{{ asset('themplete/front') }}/assets/js/jquery.lettering.min.js"></script>
    <script src="{{ asset('themplete/front') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('themplete/front') }}/assets/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('themplete/front') }}/assets/js/jquery.odometer.min.js"></script>
    <script src="{{ asset('themplete/front') }}/assets/js/jquery-sidebar-content.js"></script>
    <script src="{{ asset('themplete/front') }}/assets/js/nouislider.min.js"></script>
    <script src="{{ asset('themplete/front') }}/assets/js/slick.min.js"></script>
    <script src="{{ asset('themplete/front') }}/assets/js/swiper.min.js"></script>
    <script src="{{ asset('themplete/front') }}/assets/js/wow.min.js"></script>

    <script src="{{ asset('themplete/front') }}/assets/js/main.js"></script>

</body>

</html>
