@extends('layouts.master')

@section('head')

    <head>
        <meta charset="utf-8" />
        <meta name="description"
            content="Kenali brand YURI, Produk Kebersihan Keluarga dan Rumah Tangga dari PT Joenoes Ikamulya. Kunjungi situs resmi kami!">

        <meta name="keywords" content="yuri, yuri indonesia">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Yuri - Home Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
        <link rel="icon" href="{{ asset('images/logo-8.png') }}" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Homemade+Apple&family=Itim&family=Oswald:wght@200..700&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap"
            rel="stylesheet">

        <link rel="canonical" href="https://www.yuri-indonesia.co.id" />
        <meta property="og:title"
            content="YURI | Produk Kebersihan Keluarga dan Rumah Tangga dari PT Joenoes Ikamulya" />
        <meta property="og:description"
            content="Produk Kebersihan Keluarga dan Rumah Tangga dari PT Joenoes Ikamulya. Cek semua produk YURI sekarang!" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://www.yuri-indonesia.co.id" />
        <meta property="og:image" content="https://www.yuri-indonesia.co.id/images/logo-8.png" />

        <!-- Schema Markup -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Organization",
                "name": "YURI",
                "url": "https://www.yuri-indonesia.co.id",
                "logo": "https://www.yuri-indonesia.co.id/images/logo-8.png",
                "sameAs": [
                 "https://www.instagram.com/yurihousehold/"
             ],
                "contactPoint": {
                 "@type": "ContactPoint",
                 "telephone": "+62-21 460 2447",
                 "contactType": "customer service"
                }
            }
         </script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-NKRW8V3SDC"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-NKRW8V3SDC');
        </script>
    </head>
@endsection

@section('navbar')
    <!-- Navbar Menu -->
    <div class="menubar">
        <nav class="navbar navbar-expand-lg bg-body-white">
            <div class="container-fluid">
                <a href="{{ route('index') }}"><img src="images/logo-8.png" width="100px" height="50px"
                        alt="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="{{ route('index') }}"
                                style="color: #005EB8">@lang('message.HOME')</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index.tentangkami') }}"
                                style="color: #005EB8">@lang('message.TENTANGKAMI')</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index.brands') }}"
                                style="color: #005EB8">@lang('message.BRANDS')</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" style="color: #005EB8">
                                @lang('message.ONLINESHOP')
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://shopee.co.id/yuriofficialshop"
                                        target="_blank">SHOPEE</a></li>
                                <li><a class="dropdown-item" href="https://www.tokopedia.com/yuri-official"
                                        target="_blank">TOKOPEDIA</a></li>
                                <li><a class="dropdown-item"
                                        href="https://www.lazada.co.id/shop/yuri-official-store/?spm=a2o4j.pdp_revamp.seller.1.28fa76118mbGvu&itemId=1769620279&channelSource=pdp"
                                        target="_blank">LAZADA</a></li>
                                <li><a class="dropdown-item" href="https://www.blibli.com/brand/yuri-official-store"
                                        target="_blank">BLIBLI</a></li>
                                <li><a class="dropdown-item" href="https://www.yurishop.co/id/" target="_blank">YURI
                                        SHOP</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('artikelbaru.index') }}"
                                style="color: #005EB8">@lang('message.ARTIKEL')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('media.index') }}"
                                style="color: #005EB8">@lang('message.MEDIA')</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index.produkbaru') }}"
                                style="color: #005EB8">@lang('message.PRODUKBARU')</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index.kontak') }}"
                                style="color: #005EB8">@lang('message.KONTAK')</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index.distributor') }}"
                                style="color: #005EB8">@lang('message.DISTRIBUTOR')</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index.event') }}"
                                style="color: #005EB8">EVENT</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--End Navbar Menu-->
@endsection

@section('content')
    <!-- Container -->
    <div class="container">

        <!-- Start Button Language -->
        <div class="language mb-2" style="display:flex; justify-content:flex-end;">
            <div class="btn-group">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false" style="padding-top: 1px">
                    <span style="font-size: 11px;">Language</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="locale/id">Indonesia</a></li>
                    <li><a class="dropdown-item" href="locale/en">English</a></li>
                </ul>
            </div>
        </div>
        <!-- End Button Language -->

        <!--
                                                        <button onclick="myFunction()">Replace document</button>
                                                        -->


        <!-- Banner Homepage-->
        <div class="banner-home" data-aos="fade-up">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="images/Banner-Brand.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="images/banner.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Banner-Media.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- End Banner Homepage -->

        <!-- Content1 -->
        <div class="content-satu text-center" style="margin-top: 20px" data-aos="fade-up">
            <div class="caption1">
                <h1 style="margin-bottom: 20px; color: #005EB8">
                    @lang('message.NILAIKEUNGGULAN')
                </h1>
            </div>


            <div class="row text-center">
                <!-- Gambar 1 -->
                <div class="col-4">
                    <div class="position-relative w-100">
                        <img src="images/satu.png" class="img-fluid w-100" alt="Gambar 1">
                        <p id="ramahlingkungan"
                            class="position-absolute top-50 start-50 translate-middle text-dark fw-bold
                        fs-lg-3 fs-md-4 fs-sm-5 fs-6 m-0">
                            @lang('message.RAMAHLINGKUNGAN')</p>
                        <p id="kamimenggunakan"
                            class="position-absolute top-50 start-50 translate-middle text-dark fw-bold m-0 w-90 text-center mt-5">
                            @lang('message.KAMIMENGGUNAKAN')
                        </p>
                    </div>
                </div>

                <!-- Gambar 2 -->
                <div class="col-4">
                    <div class="position-relative w-100">
                        <img src="images/dua.png" class="img-fluid w-100" alt="Gambar 2">
                        <p id="terjangkau"
                            class="position-absolute top-50 start-50 translate-middle text-dark fw-bold
                        fs-lg-3 fs-md-4 fs-sm-5 fs-6 m-0">
                            @lang('message.TERJANGKAU')</p>
                        <p id="kamimemberikaproduk"
                            class="position-absolute top-50 start-50 translate-middle text-dark fw-bold m-0 w-95 text-center mt-5">
                            @lang('message.KAMIMEMBERIKANPRODUK')
                        </p>
                    </div>
                </div>

                <!-- Gambar 3 -->
                <div class="col-4">
                    <div class="position-relative w-100">
                        <img src="images/tiga.png" class="img-fluid w-100" alt="Gambar 3">
                        <p id="kamidisini"
                            class="position-absolute top-50 start-50 translate-middle text-dark fw-bold
                        fs-lg-3 fs-md-4 fs-sm-5 fs-6 m-0">
                            @lang('message.KAMIDISINIUNTUKANDA')</p>
                        <p id="kamimemberikan"
                            class="position-absolute top-50 start-50 translate-middle text-dark fw-bold m-0 w-90 text-center mt-5">
                            @lang('message.KAMIMEMBERIKANYANGTERBAIK')
                        </p>
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div id="ramahlingkungan" class="col-4">
                    <img src="images/satu.png" alt="ramah lingkungan" />
                </div>
                <div class="box1">
                    <p class="textblockramahlingkungan">@lang('message.RAMAHLINGKUNGAN')</p>
                </div>
                <div class="box2">
                    <p class="textblockramahlingkungan1">@lang('message.KAMIMENGGUNAKAN')
                    </p>
                </div>

                <div id="terjangkau" class="col-4">
                    <img src="images/dua.png" alt="terjangkau" />
                </div>
                <div class="box3">
                    <p class="textblockterjangkau">@lang('message.TERJANGKAU')</p>
                </div>
                <div class="box4">
                    <p class="textblockterjangkau1">@lang('message.KAMIMEMBERIKANPRODUK')</p>
                </div>

                <div id="kamidisiniuntukanda" class="col-4">
                    <img src="images/tiga.png" alt="kami disini untuk anda" />
                </div>
                <div class="box5">
                    <p class="textblockterjangkau">@lang('message.KAMIDISINIUNTUKANDA')</p>
                </div>
                <div class="box6">
                    <p class="textblockterjangkau1">@lang('message.KAMIMEMBERIKANYANGTERBAIK')</p>
                </div>

            </div> --}}


            <!--
                                                                        <div class="d-flex p-3 justify-content-center">
                                                                            <div id="ramahlingkungan" class="p-2">
                                                                                <img src="images/satu.png" alt="" />
                                                                                <p class="textblockramahlingkungan">Ramah Lingkungan</p>
                                                                                <p class="textblockramahlingkungan1">Kami menggunakan formula
                                                                                    <br>biodegradable.
                                                                                </p>
                                                                            </div>
                                                                            <div id="terjangkau" class="p-2">
                                                                                <img src="images/dua.png" alt="" />
                                                                                <p class="textblockterjangkau">Terjangkau</p>
                                                                                <p class="textblockterjangkau1">Kami memberikan produk <br>dengan harga terjangkau</p>
                                                                            </div>
                                                                            <div id="kamidisiniuntukanda" class="p-2">
                                                                                <img src="images/tiga.png" alt="" />
                                                                                <p class="textblockkamidisiniuntukanda">Kami Disini Untuk Anda</p>
                                                                                <p class="textblockkamidisiniuntukanda1">Kami selalu memberikan <br> yang terbaik untuk kebutuhan anda
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    -->

        </div>
        <!-- End Content1-->

        <div class="row mt-3" data-aos="fade-up">
            <div class="col-12">
                <img src="images/garis.png" alt="" width="100%" />
            </div>
        </div>


        <!-- Content2 -->
        <div class="content-dua text-center" style="margin-top: 20px" data-aos="fade-up">
            <div class="caption2 mb-4">
                <h1 style="margin-bottom: 20px; color: #005EB8">
                    @lang('message.BRANDSKAMI')
                </h1>
            </div>

            <p class="text-center" style="font-size: 20px;">
                @lang('message.KAMIBERKOMITMENT')
                <br class="mobile-break">@lang('message.KAMIBERKOMITMENT2')
            </p>

            <div id="brandsid" class="d-flex p-3 justify-content-center">
                <div class=""><a href="https://www.instagram.com/yurihousehold/"
                        aria-label="Read more about yurihousehold" target="_blank"><img class="imagebrand1"
                            src="images/yuri bulet-edited.png" alt="" /></a></div>
                <div class="p-2"><a href="https://www.instagram.com/yurideedee.official/"
                        aria-label="Read more about yurideedee" target="_blank"><img class="imagebrand2"
                            src="images/dd bulet-8-edited.png" alt="" /></a></div>
                <div class="p-2"><a href="https://www.instagram.com/yuribabydee.official/"
                        aria-label="Read more about yuribabydee" target="_blank"><img class="imagebrand3"
                            src="images/bbd bulet-edited.png" alt="" /></a></div>
            </div>

            <p class="text-center" style="font-size: 20px;">@lang('message.TELUSURIPRODUK')</p>

            <div class="button-brand">
                <a href="{{ url('/brands') }}"><img src="images/bingkai klik-8.png" class="img-fluid"
                        alt="Responsive image" width="30%" height="20%">
                    <div class="centered fw-bold">@lang('message.BRANDKAMI')</div>
                </a>
            </div>

        </div>
        <!-- End Content2-->

        <div class="row mt-3" data-aos="fade-up">
            <div class="col-12">
                <img src="images/garis.png" alt="" width="100%" />
            </div>
        </div>

        <!-- Content3-->
        <div class="content-tiga text-center" style="margin-top: 20px" data-aos="fade-up">
            <div class="caption3 mb-4">
                <h1 style="margin-bottom: 20px; color: #005EB8">
                    Media
                </h1>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
                @forelse ($artikels as $artikel)
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="{{ asset('/storage/artikels/' . $artikel->image) }}" class="card-img-top"
                                alt="..." width="400px" height="230px">
                            <div class="card-body">
                                <a href="{{ $artikel->link }}" target="_blank">
                                    <p class="card-title" style="font-size: 20px; font-weight:bold;">
                                        {{ $artikel->title }}</p>
                                </a>
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="alert alert-danger" style="text-align: center">
                        Data Media belum Tersedia.
                    </div>
                @endforelse
            </div>

            <div class="button-media">
                <a href="{{ url('/media') }}"><img src="images/bingkai klik-8.png" class="img-fluid"
                        alt="Responsive image" width="30%" height="20%">
                    <div class="centered-media fw-bold">@lang('message.LIHATSEMUAMEDIA')</div>
                </a>
            </div>

        </div>
        <!-- End Content3-->

    </div>
    <!-- End Container -->

    <!-- Start Footer -->
    <div id="footerindex" class="card-footer text-body-secondary bg-dark" style="margin-top: 40px;">
        <div class="container">
            <div class="row" style="padding-top: 0px;">
                <div id="footercopyright" class="col-md-8">
                    <p style="font-size: 12px; color: white; padding-top: 5px;">Copyright © {{ date('Y') }} PT Joenoes
                        Ikamulya.</p>
                </div>
                <div id="footercopyright2" class="col-md-4">
                    <a class="petanyaan-privasi" href="#"
                        style="display: inline; color: white; font-size: 14px; ">@lang('message.PERTANYAANPRIVASI')</a>
                    <a class="footerfaq" href="{{ route('index.faq') }}" class=""
                        style="font-size: 14px; color: white; ">FAQ</a>
                </div>
            </div>
        </div>

    </div>
    <!-- End Footer -->

    <script>
        function myFunction() {
            location.replace("locale/en")
        }
    </script>
@endsection
