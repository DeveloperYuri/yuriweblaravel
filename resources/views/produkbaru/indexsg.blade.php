@extends('layouts.master')

@section('head')

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Yuri - New Product</title>
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
                                <li><a class="dropdown-item" href="#">SHOPEE</a></li>
                                <li><a class="dropdown-item" href="#">TOKOPEDIA</a></li>
                                <li><a class="dropdown-item" href="#">LAZADA</a></li>
                                <li><a class="dropdown-item" href="#">BLIBLI</a></li>
                                <li><a class="dropdown-item" href="#">YURI
                                        SHOP</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('media.index') }}"
                                style="color: #005EB8">@lang('message.MEDIA')
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="{{ route('index.produkbaru') }}"
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
    <div class="container mb-5">

        <!-- Start Button Language -->
        <div class="language mb-2" style="display:flex; justify-content:flex-end;">
            <div class="btn-group">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Language
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="locale/id">Indonesia</a></li>
                    <li><a class="dropdown-item" href="locale/en">English</a></li>
                </ul>
            </div>
        </div>
        <!-- Start Button Language -->


        <div class="text-center mt-2 mb-2">
            <h1 style="color: #005EB8;">@lang('message.PRODUKBARUJUDUL')</h1>
        </div>
        <div class="row mt-2">

            @forelse ($produkbaru as $produks)
                <div class="col-lg-4 mt-4">
                    <img src="{{ asset('/storage/produkbaru/' . $produks->image) }}" class="card-img-top" alt="..."
                        width="450px" height="350px" style="border-radius: 4%;">
                </div>

            @empty
                <div class="alert alert-danger">
                    Data Products belum Tersedia.
                </div>
            @endforelse

        </div>

    </div>

    </div>
    <!-- End Container -->

    <!-- Start Footer -->
    <div id="footerindexprodukbaru" class="card-footer text-body-secondary bg-dark" style="margin-top: 40px;">
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
