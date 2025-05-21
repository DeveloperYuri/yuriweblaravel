@extends('layouts.master')

@section('head')

    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Yuri Adult Toiletries Produk">
        <meta name="keywords" content="adult toiletries, yuri adult toiletries">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Yuri - Adult Toiletries</title>
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
                <img src="images/logo-8.png" width="100px" height="50px" alt="logo" />
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index') }}"
                                style="color: #005EB8">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index.tentangkami') }}"
                                style="color: #005EB8">TENTANG KAMI</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="{{ route('index.brands') }}"
                                style="color: #005EB8">BRANDS</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" style="color: #005EB8">
                                ONLINE SHOP
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
                                style="color: #005EB8">ARTIKEL
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('media.index') }}"
                                style="color: #005EB8">MEDIA</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index.produkbaru') }}"
                                style="color: #005EB8">PRODUK BARU</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index.kontak') }}"
                                style="color: #005EB8">KONTAK</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index.distributor') }}"
                                style="color: #005EB8">DISTRIBUTOR</a>
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

        {{-- <div class="caption text-center">
            <img src="images/infografisproduk/evany/logoevany.webp" alt="" width="150px">
        </div> --}}

        <div class="aganolgeneral">
            <img src="images/infografisproduk/evany/evanyinfograph-01.webp" alt="" />
            {{-- <img src="images/infografisproduk/evany/evanyinfograph-05.webp" alt="" /> --}}
        </div>

        <div id="imagebrand" class="row mt-3">
            <div class="col-6">
                <img class="aganol1" src="images/infografisproduk/evany/evanyinfograph-05.webp" alt=""
                    width="100%" style="border-radius: 10%;">
            </div>
            <div class="col-6">
                <img class="aganol2" src="images/infografisproduk/evany/evanyinfograph-02.webp" alt=""
                    width="100%" width="100%" style="border-radius: 10%;">
            </div>
            <div class="col-6 mt-3">
                <img class="aganol3" src="images/infografisproduk/evany/evanyinfograph-03.webp" alt=""
                    width="100%" alt="" width="100%" style="border-radius: 10%;">
            </div>
            <div class="col-6 mt-3">
                <img class="aganol4" src="images/infografisproduk/evany/evanyinfograph-04.webp" alt=""
                    width="100%" width="100%" style="border-radius: 10%;">
            </div>
        </div>

        <div class="button-brand">
            <a href="https://www.yurishop.co/id/category/adult/Shower-Cream" target="_blank"><img
                    src="images/bingkai klik-8.png" class="img-fluid" alt="Responsive image" width="30%"
                    height="10%">
                <div class="centered"><strong>Beli Sekarang</strong></div>
            </a>
        </div>

    </div>
    <!-- End Container -->

    <!-- Start Footer -->
    <div id="footer-adulttoilet" class="card-footer text-body-secondary bg-dark text-center"
        style="margin-top: 30px; height: 40px; padding-top: 5px;">
        <div style="margin-top: 5px;">
            <p style="font-size: 12px; color: white">Copyright © {{ date('Y') }} PT Joenoes Ikamulya.</p>
        </div>

    </div>
    <!-- End Footer -->
@endsection
