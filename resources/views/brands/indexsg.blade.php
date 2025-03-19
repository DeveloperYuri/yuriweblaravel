@extends('layouts.master')

@section('head')

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Yuri Brands">
    <meta name="keywords" content="yuri brands">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Yuri - Brands</title>
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
                <a href="{{ route('index') }}"><img src="images/logo-8.png" width="100px" height="50px" alt="logo"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index') }}"
                                style="color: #005EB8">@lang('message.HOME')</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index.tentangkami') }}"
                                style="color: #005EB8">@lang('message.TENTANGKAMI')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="{{ route('index.brands') }}"
                                style="color: #005EB8">@lang('message.BRANDS')
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" style="color: #005EB8">
                                @lang('message.ONLINESHOP')

                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">SHOPEE</a></li>
                                <li><a class="dropdown-item" href="#">TOKOPEDIA</a></li>
                                <li><a class="dropdown-item" href="#">LAZADA</a></li>
                                <li><a class="dropdown-item" href="#">BLIBLI</a></li>
                                <li><a class="dropdown-item" href="#">YURI
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
                                style="color: #005EB8">@lang('message.MEDIA')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index.produkbaru') }}"
                                style="color: #005EB8">@lang('message.PRODUKBARU')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index.kontak') }}"
                                style="color: #005EB8">@lang('message.KONTAK')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index.distributor') }}"
                                style="color: #005EB8">@lang('message.DISTRIBUTOR')
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--End Navbar Menu-->
@endsection

@section('content')
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

        <!-- Banner Homepage-->
        <div class="banner-home" data-aos="fade-up">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="images/householdcleaner.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="images/infografisproduk/deedee/infographicdeedee-03.jpg" class="d-block w-100"
                            alt="..." style="border-radius: 2%">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="images/bannerbabydee.png" class="d-block w-100"
                            alt="..." style="border-radius: 2%">
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
        <div class="brand-content-satu" style="margin-top: 20px" data-aos="fade-up">
            <h4 class="text-center fw-bold" style="color: #005EB8">
                @lang('message.YURITELAH')
                <br class="mobile-break" />@lang('message.YURITELAH2')
            </h4>

            <div class="tentangkamudesc" style="margin-top: 20px;">
                <p style="text-align: justify">
                    @lang('message.MENJADIGROUP') </p>
            </div>
        </div>
        <!-- End Content1-->

        <!-- Content Satu -->
        <div class="row text-center">
            <div id="gambarhousehold" class="col-4">
                <img src="images/brands-satu.png" alt="">
            </div>
            <div id="logohousehold" class="col-4">
                <img src="images/logo-8.png" alt="">
            </div>
            <div id="texthousehold" class="col-4">
                <h5>Household Cleaner</h5>
                <a href="{{ route('brands.householdcleaner') }}"><img src="images/bingkai klik-8.png" alt="">
                    <p style="color: white; font-weight: bold">@lang('message.SELENGKAPNYA')</p>
                </a>
            </div>
        </div>

        <!-- Content Dua -->
        <div class="row text-center">
            <div id="textdeedee" class="col-4">
                <h5>Children Toiletries</h5>
                <a href="{{ route('brands.childrentoilet') }}"><img src="images/bingkai klik-8.png" alt="">
                    <p style="color: white; font-weight: bold">@lang('message.SELENGKAPNYA')</p>
                </a>
            </div>
            <div id="logodeedee" class="col-4">
                <img src="images/brands-dua-logo.png" alt="">
            </div>
            <div id="gambardeedee" class="col-4">
                <img src="images/brands-dua.png" alt="">
            </div>
        </div>

        <!-- Content Tiga -->
        <div class="row text-center">
            <div id="gambarbabydee" class="col-4">
                <img src="images/brands-tiga.png" alt="">
            </div>
            <div id="logobabydee" class="col-4">
                <img src="images/brands-tiga-logo.png" alt="">
            </div>
            <div id="textbabydee" class="col-4">
                <h5>Baby Toiletries</h5>
                <a href="{{ route('brands.babytoilet') }}"><img src="images/bingkai klik-8.png" alt="">
                    <p style="color: white; font-weight: bold">@lang('message.SELENGKAPNYA')</p>
                </a>
            </div>
        </div>

        <!-- Content Empat -->
        <div class="row text-center">
            <div id="textevany" class="col-4">
                <h5>Adult Toiletries</h5>
                <a href="{{ route('brands.adulttoilet') }}"><img src="images/bingkai klik-8.png" alt="">
                    <p style="color: white; font-weight: bold">@lang('message.SELENGKAPNYA')</p>
                </a>
            </div>
            <div id="logoevany" class="col-4">
                <img src="images/brands-empat-logo.png" alt="">
            </div>
            <div id="gambarevany" class="col-4">
                <img src="images/brands-empat.png" alt="">
            </div>
        </div>

    </div>
    <!-- End Container -->

    <!-- Start Footer -->
    <div id="footerindex" class="card-footer text-body-secondary bg-dark" style="margin-top: 40px;">
        <div class="container">
            <div class="row" style="padding-top: 0px;">
                <div id="footercopyright" class="col-md-8">
                    <p style="font-size: 12px; color: white; padding-top: 5px;">Copyright © {{ date('Y')}} PT Joenoes Ikamulya.</p>
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
@endsection
