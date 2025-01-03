@extends('layouts.master')

@section('navbar')
    <!-- Navbar Menu -->
    <div class="menubar">
        <nav class="navbar navbar-expand-lg bg-body-white">
            <div class="container-fluid">
                <img src="images/logo-8.png" width="100px" height="50px" />
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="{{ route('index')}}"
                                style="color: #005EB8">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index.tentangkami') }}"
                                style="color: #005EB8">TENTANG KAMI</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ route('index.brands') }}"
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
    <!-- Container -->
    <div class="container">

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
                    Nilai & Keunggulan
                </h1>
            </div>

            <div class="d-flex p-3 justify-content-center">
                <div class="p-2"><img src="images/ramah lingkungan.png" alt="" /></div>
                <div class="p-2"><img src="images/terjangkau.png" alt="" /></div>
                <div class="p-2"><img src="images/kami disini untuk anda.png" alt="" /></div>
            </div>

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
                    Brand Kami
                </h1>
            </div>

            <p class="text-center" style="font-size: 20px;">
                Kami berkomitmen untuk menghasilkan produk berkualitas internasional
                <br class="mobile-break">yang terjangkau oleh semua lapisan masyarakat.
            </p>

            <div id="brandsid" class="d-flex p-3 justify-content-center">
                <div class=""><a href="https://www.instagram.com/yurihousehold/" target="_blank"><img
                            class="imagebrand1" src="images/yuri bulet-edited.png" alt="" /></a></div>
                <div class="p-2"><a href="https://www.instagram.com/yurideedee.official/" target="_blank"><img
                            class="imagebrand2" src="images/dd bulet-8-edited.png" alt="" /></a></div>
                <div class="p-2"><a href="https://www.instagram.com/yuribabydee.official/" target="_blank"><img
                            class="imagebrand3" src="images/bbd bulet-edited.png" alt="" /></a></div>
            </div>

            <p class="text-center" style="font-size: 20px;">Telusuri product kami selengkapnya.</p>

            <div class="button-brand">
                <a href="{{ url('/brands') }}"><img src="images/bingkai klik-8.png" class="img-fluid"
                        alt="Responsive image" width="30%" height="20%">
                    <div class="centered fw-bold">Brand Kami</div>
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

            <div class="row row-cols-1 row-cols-md-3 g-4 mb-3 justify-content-center">
                @forelse ($artikels as $artikel)
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="{{ asset('/storage/artikels/' . $artikel->image) }}" class="card-img-top"
                                alt="..." width="400px" height="230px">
                            <div class="card-body">
                                <a href="{{ route('media.show', $artikel->id) }}">
                                    <h5 class="card-title" style="font-size: 17px;">{{ $artikel->title }}</h5>
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

            <div class="button-media">
                <a href="{{ url('/media') }}"><img src="images/bingkai klik-8.png" class="img-fluid"
                        alt="Responsive image" width="30%" height="20%">
                    <div class="centered-media fw-bold">Lihat Semua Media</div>
                </a>
            </div>

        </div>
        <!-- End Content3-->

    </div>
    <!-- End Container -->

    <!-- Start Footer -->
    <div id="footerindex"
      class="card-footer text-body-secondary bg-dark"
      style="margin-top: 40px;"
    >
    <div class="container">
      <div class="row" style="padding-top: 0px;">
        <div id="footercopyright" class="col-md-8">
          <p style="font-size: 12px; color: white; padding-top: 5px;">Copyright © 2024 PT Joenoes Ikamulya.</p>
        </div>
        <div id="footercopyright2" class="col-md-4">
            <a class="petanyaan-privasi" href="#" style="display: inline; color: white; font-size: 14px; ">Pertanyaan privasi</a>
            <a class="footerfaq" href="{{ route('index.faq')}}" class="" style="font-size: 14px; color: white; ">FAQ</a>
        </div>
      </div>
    </div>

    </div>
    <!-- End Footer -->
    
@endsection
