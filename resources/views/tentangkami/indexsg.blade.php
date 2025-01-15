@extends('layouts.master')

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
                                style="color: #005EB8">@lang('message.HOME')</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="{{ route('index.tentangkami') }}"
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
        <div class="banner-tentang-kami" data-aos="fade-up">
            <img src="images/Banner-Tentang-Kami.png" class="img-fluid" alt="..." width="100%">
        </div>
        <!-- End Banner Homepage -->

        <!-- Content1 -->
        <div class="tentang-kami-content-satu" style="margin-top: 20px" data-aos="fade-up">
            <h4 class="text-center fw-bold" style="color: #005EB8">
                @lang('message.YURIBERKOMITMENT')
                <br />@lang('message.YURIBERKOMITMENT2')
            </h4>

            <div class="tentangkamudesc" style="margin-top: 20px;">
                <p style="text-align: justify">
                    @lang('message.PTJOENOESIKAMULYAMERUPAKAN')
                </p>
            </div>
        </div>
        <!-- End Content1-->

        <div class="row mt-3">
            <div class="col-12">
                <img src="images/garis.png" alt="" width="100%" />
            </div>
        </div>

        <!-- Content2 -->
        <div class="tentang-kami-content-dua text-center" style="margin-top: 20px" data-aos="fade-up">
            <div class="caption1 mb-4">
                <h1 style="margin-bottom: 20px; color: #005EB8">
                    @lang('message.KOMITMENTKAMI')
                </h1>
            </div>

            <div class="d-flex p-3 justify-content-center">
                <div class="p-2"><img src="images/kualitas.png" alt="" /></div>
                <div class="p-2"><img src="images/nilai.png" alt="" /></div>
                <div class="p-2"><img src="images/keberlanjutan.png" alt="" /></div>
            </div>

            <div class="berikutadalah" style="margin-top: 20px;">
                <p style="text-align: justify">
                    @lang('message.BERIKUTADALAH')
                </p>
            </div>
        </div>
        <!-- End Content2-->

        <div class="row mt-3" data-aos="fade-up">
            <div class="col-12">
                <img src="images/garis.png" alt="" width="100%" />
            </div>
        </div>

        <!-- Content3 -->
        <div class="tentang-kami-content-tiga text-center" style="margin-top: 20px" data-aos="fade-up">
            <div class="caption1 mb-4">
                <h1 style="margin-bottom: 20px; color: #005EB8">
                    @lang('message.VISIMISI')
                </h1>
            </div>

            <div class="visi">
                <div class="d-flex p-3 justify-content-center">
                    <div class="p-2"><img src="images/visi.png" alt="" /></div>
                    <div class="p-2">
                        <h4 style="text-align: left; color: #005EB8; font-weight: bold;">@lang('message.VISI')</h4>
                        <p style="text-align: justify; word-break: break-all;">@lang('message.TEKAD')</p>

                    </div>
                </div>
            </div>

            <div class="misi">
                <div class="d-flex p-3 justify-content-center">
                    <div class="p-2"><img src="images/misi.png" alt="" /></div>
                    <div class="p-2">
                        <h4 style="text-align: left; color: #005EB8; font-weight: bold;">@lang('message.MISI')</h4>
                        <p style="text-align: justify; word-break: break-all;">@lang('message.INIADALAH')
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Content3-->

        <div class="row mt-3" data-aos="fade-up">
            <div class="col-12">
                <img src="images/garis.png" alt="" width="100%" />
            </div>
        </div>

        <div class="tentang-kami-content-empat text-center" data-aos="fade-up">
            <img src="images/frame-8.png" alt="" width="100%">
            <div class="textblock">
                <h4 class="tetangkamiptjoenoes mb-3" style="color: white">PT. JOENOES IKAMULYA</h4>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <p class="textblock1" style="color: white; text-align:justify">
                            @lang('message.KAMISANGATPERCAYA')
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12">
                        <p class="textblock2" style="color: white; text-align:justify">
                            @lang('message.DENGANBERBAGAIPERUBAHAN')
                        </p>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <!-- End Container -->
    </div>


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
