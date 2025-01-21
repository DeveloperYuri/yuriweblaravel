@extends('layouts.master')

@section('head')

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Yuri - Kontak</title>
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
                <a href="{{ route('index') }}"><img src="images/logo-8.png" width="100px" height="50px" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index') }}"
                                style="color: #005EB8">@lang('message.HOME')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index.tentangkami') }}"
                                style="color: #005EB8">@lang('message.TENTANGKAMI')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index.brands') }}"
                                style="color: #005EB8">@lang('message.BRANDS')
                            </a>
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
                            <a class="nav-link active fw-bold" aria-current="page" href="{{ route('index.kontak') }}"
                                style="color: #005EB8">@lang('message.KONTAK')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index.distributor') }}"
                                style="color: #005EB8">@lang('message.DISTRIBUTOR')</a>
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

        <div class="text-center">
            <h1 style="color: #005EB8">@lang('message.KONTAK')</h1>
        </div>

        <!-- Banner Homepage-->
        <div class="banner-kontak" data-aos="fade-up">
            <img src="images/Banner-kontak.png" class="img-fluid" alt="..." width="100%">
        </div>
        <!-- End Banner Homepage -->

        <div class="hubungikami">
            <h1 style="color: white">@lang('message.HUBUNGIKAMIKONTAK')</h1>
            <h3 style="color: white; font-wight: bold">@lang('message.KAMIHADIR')</h3>
        </div>

        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4822898191064!2d106.9152784740248!3d-6.19992546073466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b4c1e967e9f%3A0x7b0d84b40363198d!2sJoenoes%20Ikhamulya%20Pt.%2C%20Jl.%20Pulogadung%20No.43%2C%20RW.9%2C%20Jatinegara%2C%20Kec.%20Cakung%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013930!5e0!3m2!1sid!2sid!4v1730163508050!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="row" data-aos="fade-up">
            <h5 class="fw-bold mt-4" style="margin-bottom: 20px; color: #005EB8; font-size: 28px;">
                @lang('message.TERHUBUNGDENGANKAMI')
            </h5>
            <p style="font-size: 16px;">
                @lang('message.APABILAANDA')
            </p>

            <div class="col-md-4">
                <form style="font-size: 12px">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">@lang('message.NAMA')</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">@lang('message.EMAIL')</label>
                        <input type="email" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">@lang('message.TELEPON')</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">@lang('message.SUBJEK')</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">@lang('message.PERTANYAAN')</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <button type="submit" class="btn btn-primary">@lang('message.KIRIM')</button>
                </form>
            </div>
        </div>


    </div>
    <!-- End Container -->

    <!-- Start Footer -->
    <div id="footerindex" class="card-footer text-body-secondary bg-dark" style="margin-top: 40px;">
        <div class="container">
            <div class="row" style="padding-top: 0px;">
                <div id="footercopyright" class="col-md-8">
                    <p style="font-size: 12px; color: white; padding-top: 5px;">Copyright © 2024 PT Joenoes Ikamulya.</p>
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
