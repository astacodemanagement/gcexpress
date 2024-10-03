@extends('front.layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)

@push('css')
@endpush


@section('content')



    <!--Start Main Slider One-->
    <section class="main-slider main-slider-one">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": {
    "el": "#main-slider-pagination",
    "type": "bullets",
    "clickable": true
    },
    "navigation": {
    "nextEl": "#main-slider__swiper-button-next",
    "prevEl": "#main-slider__swiper-button-prev"
    },
    "autoplay": {
    "delay": 7000
    }}'>

            <div class="swiper-wrapper">

                @foreach ($slider as $p)
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(/upload/slider/{{ $p->gambar }});">
                        </div>
                        <div class="big-title">
                            <h2>{{ $p->nama_slider }}</h2>
                        </div>
                        <div class="img-box"><img src="{{ asset('themplete/front') }}/assets/img/slider/slider-v1-img4.png"
                                alt=""></div>
                        <div class="icon-one"><img src="{{ asset('themplete/front') }}/assets/img/icon/slider-v1-icon1.png"
                                alt=""></div>
                        <div class="icon-two"><img src="{{ asset('themplete/front') }}/assets/img/icon/slider-v1-icon2.png"
                                alt=""></div>
                        <div class="container">
                            <div class="main-slider-one__single">
                                <div class="main-slider-one__content">
                                    <h3>{{ $p->nama_slider }}</h3>
                                    {{-- <h2>Fast and safe <br> <span>transport</span> your <br> product</h2> --}}
                                    <p>{{ $p->deskripsi }}</p>
                                    <div class="btn-box">
                                        <a class="thm-btn" href="{{ $p->link }}">
                                            <span class="txt">Selengkapnya</span> <i class="icon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-pagination" id="main-slider-pagination"></div>

            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>
    <!--End Main Slider One-->
    <div class="container" style="margin-top: 50px;">

        <div class="footer-one__top">
            <div class="footer-one__top-inner">
                <div class="logo-box">
                    {{-- <a href="/beranda"><img src="https://313express.com/images/artikel/1661480137115.png"
                            alt="{{ $profil->nama_perusahaan }}" style="width: 100px;"></a> --}}
                </div>

                <div class="footer-one__top-right">
                    <div class="text">
                        <p style="color:black">Cari Berdasarkan No Resi Anda</p>
                    </div>
                    <div class="footer-one__top-subscribe" >
                        <form class="footer-one__top-subscribe-form" action="#" >
                            <input type="email" name="email" placeholder="Masukkan No Resi" style="background-color: rgb(44, 41, 41); color:white;">
                            <button type="submit" class="thm-btn" style="background-color: rgb(44, 41, 41);">
                                <span class="txt">Cari </span> <i class="icon-up-right-arrow"></i>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!--Start About One-->
    <div class="about-one" style="background-color: black; color:white;">
        <div class="about-one__big-title"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="about-one__img clearfix">
                        {{-- <div class="shape1 float-bob-x"><img
                                src="/upload/profil/{{ $profil->banner }}" alt="">
                        </div> --}}
                        <div class="inner clearfix">
                            <img class="float-bob-y" src="/upload/profil/{{ $profil->banner }}" alt="">
                        </div>
                        {{-- <div class="btn-box">
                            <div class="round-text">
                                <div class="curved-circle rotate-me">
                                    Award Winning Company - Since 1980 -
                                </div>
                                <a href="{{ asset('themplete/front') }}/#">Read <br>More</a>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="about-one__content">
                        <div class="about-one__content-top">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h5><span class="icon-right-arrow-1"></span> Tentang Perusahaan</h5>
                                </div>
                                <h2 style="color:white;">{{ $profil->nama_perusahaan }}</h2>
                            </div>

                            <div class="text">
                                <p style="color:white;">{{ $profil->deskripsi_2 }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End About One-->

    <!--Start Service One -->
    <section class="service-one" style="background-color:black;">
        <div class="container">
            <div class="service-one__top">
                <div class="sec-title">
                    <div class="sub-title" style="margin-top: -20px;">
                        <h5><span class="icon-right-arrow-1"></span> Layanan {{ $profil->nama_perusahaan }}</h5>
                    </div>
                    <h2 style="color:white;">Layanan logistik yang <br> cepat dan profesional</h2>
                </div>

                <div class="btn-box">
                    <a class="thm-btn" href="/layanan">
                        <span class="txt">Lihat Semua Layanan</span> <i class="icon-right-arrow"></i>
                    </a>
                </div>
            </div>

            <div class="thm-swiper__slider swiper-container"
                data-swiper-options='{"spaceBetween": 50,
            "slidesPerView": 3,
            "loop": true,
            "pagination": {
                "el": "#service-one__pagination",
                "type": "bullets",
                "clickable": true
                },
            "navigation": {
                "nextEl": "#team-one__swiper-button-next",
                "prevEl": "#team-one__swiper-button-prev"
            },
            "autoplay": { "delay": 5000 },
            "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 1
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 1
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 1
                },
                "768": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "992": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "1200": {
                    "spaceBetween": 50,
                    "slidesPerView": 3
                }
            }
        }'>
                <div class="swiper-wrapper">
                    @foreach ($layanan as $p)
                        <div class="swiper-slide">
                            <!--Start Service One Single-->
                            <div class="service-one__single">
                                <div class="service-one__single-img">
                                    <div class="inner">
                                        <img src="/upload/layanan/{{ $p->gambar }}" alt="#">
                                        {{-- <div class="overlay-icon">
                                        <img src="{{ asset('themplete/front') }}/assets/img/icon/services/air-freight.png"
                                            alt="#">
                                    </div> --}}
                                    </div>
                                </div>
                                <div class="service-one__single-content">
                                    <h3><a
                                            href="{{ asset('themplete/front') }}/road-transport.html">{{ $p->nama_layanan }}</a>
                                    </h3>
                                    <p>{{ $p->deskripsi }}</p>
                                    <div class="btn-box">
                                        <a href="{{ asset('themplete/front') }}/road-transport.html">Selengkapnya <span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Service One Single-->
                        </div>
                    @endforeach


                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-pagination" id="service-one__pagination" style="margin-bottom: -80px;"></div>
        </div>
    </section>
    <!--End Service One-->

    <!--Start Video One-->
    {{-- <section class="video-one">
        <div class="container">
            <div class="video-one__inner"
                style="background-image: url(https://supplychainindonesia.com/wp-content/uploads/2020/04/container-freight-train-with-running-through-industrial-district-harbor_60434-20.jpg);">
                <div class="video-one__video">
                    <a href="{{ $profil->youtube }}" class="video-one__video-btn video-popup">
                        <span class="txt">Mainkan</span>
                    </a>
                </div>
                <div class="overlay-text">
                    <h3><a href="{{ asset('themplete/front') }}/#">Lihat Tentang Kami</a></h3>
                    <div class="icon">
                        <a href="{{ asset('themplete/front') }}/#"><span class="icon-right-arrow-2"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--End Video One-->


    <!--Start Working Process One-->
    {{-- <section class="working-process-one">
        <div class="working-process-one__bg"
            style="background-image: url(assets/img/background/working-process-v1-bg.jpg);"></div>
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <h5><span class="icon-right-arrow-1"></span> TAHAPAN LAYANAN KAMI </h5>
                </div>
                <h2>Beberapa tahapan menggunakan jasa kami</h2>
            </div>
            <div class="row">

                @foreach ($tahap as $p)
                    <!--Start Working Process One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="working-process-one__single">
                            <div class="shape1"><img
                                    src="{{ asset('themplete/front') }}/assets/img/shape/working-process-v1-shape1.png"
                                    alt=""></div>
                            <div class="working-process-one__single-top">
                                <div class="icon">
                                    <img src="/upload/tahap/{{ $p->gambar }}" alt="">
                                </div>
                                <div class="text">
                                    <h2>Tahap - {{ $p->urutan }}</h2>
                                </div>
                            </div>
                            <div class="working-process-one__single-content">
                                <h2><a href="#">{{ $p->nama_tahap }}</a></h2>
                                <p>{{ $p->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                    <!--End Working Process One Single-->
                @endforeach

            </div>
        </div>
    </section> --}}
    <!--End Working Process One-->

    <!--Start Cta One-->
    {{-- <section class="cta-one">
        <div class="container">
            <div class="cta-one__inner">
                <div class="cta-one__shape1"><img
                        src="{{ asset('themplete/front') }}/assets/img/shape/cta-one__shape1.png" alt=""></div>
                <div class="cta-one__shape2"><img
                        src="{{ asset('themplete/front') }}/assets/img/shape/cta-one__shape2.png" alt=""></div>
                <div class="cta-one__shape3 float-bob-x">
                    <img src="{{ asset('themplete/front') }}/assets/img/shape/cta-one__shape5.png" alt="#">
                </div>
                <div class="cta-one__inner-box">
                    <div class="title-box">
                        <h2>We are best transport agency for give best quality service</h2>
                    </div>

                    <div class="btn-box">
                        <a class="thm-btn" href="{{ asset('themplete/front') }}/#">
                            <span class="txt">Request Services</span> <i class="icon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--End Cta One-->
    <!--Start Choose Us One-->
    <section class="choose-us-one" style="background-color: black; " >
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title" style="margin-top: -80px;">
                    <h5><span class="icon-right-arrow-1"></span> Kenapa Pilih Kami</h5>
                </div>
                <h2 style="color: white">Beberapa alasan untuk memilih kami</h2>
            </div>
            <div class="row">
                @foreach ($alasan as $p)
                    <!--Start  Single Choose Us One-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                        <div class="choose-us-one__single">
                            <div class="choose-us-one__single-overlay-bg"></div>
                            <div class="content-box">
                                <div class="title-box">
                                    <div class="icon-box">
                                        <span class="{{ $p->link }}"></span>
                                        {{-- <img src="/upload/alasan/{{ $p->gambar }}"
                                alt="#" width="100%"> --}}
                                    </div>
                                    <h3><a href="#">{{ $p->nama_alasan }}</a></h3>
                                </div>
                                <div class="text-box">
                                    <p>{{ $p->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End  Single Choose Us One-->
                @endforeach

            </div>
        </div>
    </section>
    <!--End Choose Us One-->

    <section class="testimonials-two" style="background-color:black; color:white;">

        <!--Start Brand One-->
        <div class="brand-one" style="margin-top: -200px; margin-bottom:-80px;">
            <div class="sec-title text-center">
                <h2 style="color:white;">Mitra</h2>
            </div>
            <div class="shape1 float-bob-x"><img
                    src="{{ asset('themplete/front') }}/assets/img/shape/brand-v1-shape1.png" alt=""></div>

            <div class="container">
                <div class="thm-swiper__slider swiper-container"
                    data-swiper-options='{
                    "spaceBetween": 100,
                    "loop": true,
                    "speed": 2000,
                    "slidesPerView": 5,
                    "autoplay": { "delay": 1000 },
                    "breakpoints": {
                            "0": {
                                "spaceBetween": 30,
                                "slidesPerView": 1
                            },
                            "375": {
                                "spaceBetween": 30,
                                "slidesPerView": 1
                            },
                            "575": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "768": {
                                "spaceBetween": 30,
                                "slidesPerView": 3
                            },
                            "992": {
                                "spaceBetween": 30,
                                "slidesPerView": 4
                            },
                            "1200": {
                                "spaceBetween": 30,
                                "slidesPerView": 5
                            }
                        }
                    }'>
                    <div class="swiper-wrapper">
                        @foreach ($mitra as $p)
                            <div class="swiper-slide">
                                <div class="img-box">
                                    <img src="/upload/mitra/{{ $p->gambar }}" alt="#">
                                </div>

                                <div class="img-box2">
                                    <img src="/upload/mitra/{{ $p->gambar }}" alt="#">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!--End Brand One -->
    </section>





    <!-- Start Faq One-->
    <section class="faq-one" style="background-color:black;">
        {{-- <div class="big-title">
            <h2>faq</h2>
        </div> --}}
        {{-- <div class="faq-one__bg" style="background-image: url(assets/img/resource/faq-v1-bg.jpg);"></div> --}}
        <div class="container">
            <div class="row">
                <!-- Start Faq One Faq-->
                <div class="col-xl-6">
                    <div class="faq-one__faq">
                        <div class="sec-title">
                            <div class="sub-title">
                                <h5><span class="icon-right-arrow-1"></span> FAQ ?</h5>
                            </div>
                            <h2>Tanya & Jawab</h2>
                        </div>

                        <ul class="accrodion-grp faq-one__accrodion" data-grp-name="faq-one-accrodion">
                            @foreach ($faq as $p)
                                <!-- Start Faq One Single-->
                                <li class="accrodion">
                                    <div class="accrodion-title">
                                        <h2><span>{{ $p->urutan }}.</span> {{ $p->tanya }}</h2>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <span>Jawaban:</span>
                                            <p>{{ $p->jawab }}</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Faq One Single-->
                            @endforeach

                        </ul>
                    </div>
                </div>
                <!-- End Faq One Faq-->

                <!-- Start Faq One Contact Info-->
                <div class="col-xl-6">
                    <div class="faq-one__contact-info wow fadeInRight" data-wow-delay=".3s">
                        <div class="title-box">
                            <p>Hubungi Kami</p>
                            <h3>Kamu Butuh Bantuan? Gratis Konsultasi</h3>
                        </div>

                        <div class="faq-one__contact-info-number">
                            <div class="icon">
                                <span class="icon-call"></span>
                            </div>

                            <div class="text">
                                <p>Punya Pertanyaan?</p>
                                <h3><a href="tel:{{ $profil->no_telp }}">{{ $profil->no_telp }}</a></h3>
                            </div>
                        </div>

                        <div class="btn-box">
                            <a class="thm-btn" href="/#">
                                <span class="txt">Hubungi Kami</span> <i class="icon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Faq One Contact Info-->
            </div>
        </div>
    </section>
    <!-- End Faq One-->

    <!-- Start Blog One-->
    <section class="blog-one" style="background-color: black;">
        <div class="blog-one__pattern" style="background-image: url(assets/img/pattern/blog-v1-pattern.jpg);"></div>
        <div class="container">
            <div class="blog-one__top">
                <div class="sec-title">
                    <div class="sub-title">
                        <h5><span class="icon-right-arrow-1"></span> POSTINGAN TERAKHIR</h5>
                    </div>
                    <h2 style="color:white;">Postingan Terakhir Berita</h2>
                </div>
                <div class="btn-box">
                    <a class="thm-btn" href="/halaman_berita">
                        <span class="txt">Lihat Semua Postingan</span> <i class="icon-right-arrow"></i>
                    </a>
                </div>
            </div>


            <div class="blog-one__bottom">
                <div class="thm-swiper__slider swiper-container"
                    data-swiper-options='{"spaceBetween": 50,
                "slidesPerView": 3,
                "loop": true,
                "pagination": {
                    "el": "#blog-one__pagination",
                    "type": "bullets",
                    "clickable": true
                    },
                "navigation": {
                    "nextEl": "#team-one__swiper-button-next",
                    "prevEl": "#team-one__swiper-button-prev"
                },
                "autoplay": { "delay": 5000 },
                "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 1
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 1
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 1
                    },
                    "768": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "992": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "1200": {
                        "spaceBetween": 50,
                        "slidesPerView": 3
                    }
                }
            }'>
                    <div class="swiper-wrapper">
                        @foreach ($berita as $p)
                            <div class="swiper-slide">
                                <!-- Start Blog One Single-->
                                <div class="blog-one__single">
                                    <div class="blog-one__single-img">
                                        <div class="inner">
                                            <img src="/upload/berita/{{ $p->gambar }}" alt="{{ $p->judul_berita }}">
                                            <div class="text-box">{{ $p->kategoriBerita->nama_kategori_berita }}</div>
                                        </div>
                                    </div>

                                    <div class="blog-one__single-content">
                                        <h2><a
                                                href="{{ asset('themplete/front') }}/blog-details.html">{{ $p->judul_berita }}</a>
                                        </h2>
                                        <ul class="meta-box">
                                            <li><a href="{{ asset('themplete/front') }}/#">By : {{ $p->penulis }}</a>
                                            </li>
                                            <br>
                                            <li>{{ \Carbon\Carbon::parse($p->tanggal_posting)->translatedFormat('l, d F Y') }}
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- End Blog One Single-->
                            </div>
                        @endforeach


                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="blog-one__pagination"></div>

            </div>
        </div>
    </section>
    <!-- End Blog One-->





@endsection


@push('scripts')
@endpush
