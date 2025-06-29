@extends('layouts.master')

@section('head')

    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Yuri Artikel">
        <meta name="keywords" content="yuri artikel">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Yuri - Artikel</title>
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
                            <a class="nav-link active fw-bold" aria-current="page" href="{{ route('artikelbaru.index') }}"
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

        <!-- Content1 -->
        <div class="media-content-satu text-center" style="margin-top: 20px" data-aos="fade-up">
            <div class="caption1 mb-5">
                <h1 style="margin-bottom: 20px; color: #005EB8">
                    ARTIKEL
                </h1>
            </div>

            <!--
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
                    @forelse ($artikelbaru as $artikel)
    <div class="col-md-4">
                            <div class="card h-100">
                                <img src="{{ asset('/storage/artikelbaru/' . $artikel->image) }}"
                                    class="card-img-top" alt="..." width="400px" height="170px">
                                <div class="card-body">
                                    <a href="{{ route('indexartikelbaru.show', $artikel->id) }}">
                                        <h5 class="card-title" style="font-size: 15px;">{{ $artikel->title }}</h5>
                                    </a>
                                </div>

                            </div>
                        </div>
                @empty
                        <div class="alert alert-danger">
                            Data Products belum Tersedia.
                        </div>
    @endforelse

                </div>

                <div class="mt-5 mb-5">
                    {!! $artikelbaru->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            -->

            <div class="row">
                <div class="col-lg-8">
                    <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
                        @forelse ($artikelbaru as $artikel)
                            <div class="col-md-4">
                                <div class="card h-100">
                                    <img src="{{ asset('/storage/artikelbaru/' . $artikel->image) }}"
                                        class="card-img-top" alt="..." width="400px" height="170px" style="object-fit:cover">
                                    <div class="card-body">
                                        <a href="{{ route('indexartikelbaru.show', $artikel->id) }}">
                                            <h5 class="card-title" style="font-size: 15px;">{{ $artikel->title }}</h5>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        @empty
                            <div class="alert alert-danger">
                                Data Products belum Tersedia.
                            </div>
                        @endforelse

                    </div>

                    <div class="mt-5 mb-5">
                        {!! $artikelbaru->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <h5>Category</h5>
                    <ul class="list-group">
                        <li class="list-group-item active" aria-current="true"><a href=""
                                style="color: white; font-weight:bold">Pembersih Rumah Tangga</a></li>
                        <li class="list-group-item"><a href=""
                                style="color: #005EB8; font-weight:bold">Anak-Anak</a></li>
                        <li class="list-group-item"><a href="" style="color: #005EB8; font-weight:bold">Bayi</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- End Content1-->

    </div>
    <!-- End Container -->
@endsection
