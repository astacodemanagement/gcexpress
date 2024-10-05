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

        .main-header-one__bottom-right .btn-box .thm-btn::after {
            background-color: #121212;
        }

        .footer-one__top-subscribe-form button.thm-btn:after {
            background: #000000;
        }

        .faq-one__contact-info .btn-box .thm-btn::after {
            background-color: #000000;
        }

        .footer-social-link a {

            background: #12191a;
        }

        .service-one__single-img img {
            width: 100%;
            height: 200px;
            /* Sesuaikan tinggi gambar landscape */
            object-fit: cover;
            /* Mengatur gambar agar memenuhi area tanpa mengubah proporsi */
            object-position: center;
            /* Fokus gambar di tengah */
        }
        .service-one__single:after {
            background-color:  black;
        }
        .service-one__single:hover:after {
            background-color: #12191a ;

}
        .img-box img,
        .img-box2 img {
            width: 100%;
            height: 200px;
            /* Sesuaikan tinggi gambar landscape */
            object-fit: cover;
            /* Menjaga proporsi gambar dan menutup area penuh */
            object-position: center;
            /* Gambar terpusat */
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
                <div class="main-header-one__outer" style="background-color: black; ">
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

                                                            <li class="menu-item-has-children"><a href="#">Tentang
                                                                    Kami</a>
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

                                                    {{-- <div class="btn-box">
                                                        <a class="thm-btn" href="">
                                                            <span class="txt">Login / Daftar</span>
                                                            <i class="fa-solid fa-user"></i>
                                                        </a>
                                                    </div> --}}
                                                    <div class="btn-box">
                                                        <a class="thm-btn" href=""
                                                            style="background-color: black; color:white;">
                                                            <span class="txt" style="color: white">Login /
                                                                Daftar</span>
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

        <footer class="footer-one" style="background-color: black; ">
            {{-- <div class="footer-one__bg"
                style="background-image: url(https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/01gf36esnb7m5jknhf51d2ngrf.jpg);">
            </div> --}}


            <!--Start Footer Bottom -->
            <div class="footer-bottom" style="background-color: #12191a;">
                <div class="container">
                    <div class="footer-bottom__inner">
                        <div class="copyright-text">
                            <p>© 2024 <a
                                    href="{{ asset('themplete/front') }}/index.html">{{ $profil->nama_perusahaan }}</a>
                                All Rights
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
