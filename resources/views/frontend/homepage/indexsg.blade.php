@extends('frontend.layouts.app')

@section('title', 'Home Page')

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
                    @lang('message.NILAIKEUNGGULAN')
                </h1>
            </div>

            <div class="row">
                <div id="ramahlingkungan" class="col-4">
                    <img src="images/satu.png" alt="" />
                    <p class="textblockramahlingkungan">Ramah Lingkungan</p>
                    <p class="textblockramahlingkungan1">Kami menggunakan formula
                        <br>biodegradable.
                    </p>
                </div>
                <div id="terjangkau" class="col-4">
                    <img src="images/dua.png" alt="" />
                    <p class="textblockterjangkau">Terjangkau</p>
                    <p class="textblockterjangkau1">Kami memberikan produk <br>dengan harga terjangkau</p>
                </div>
                <div id="kamidisiniuntukanda" class="col-4">
                    <img src="images/tiga.png" alt="" />
                    <p class="textblockkamidisiniuntukanda">Kami <span class="disini">Disini</span> Untuk Anda</p>
                    <p class="textblockkamidisiniuntukanda1">Kami memberikan yang <br> terbaik untuk anda
                    </p>
                </div>
            </div>

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
                <div class=""><a href="https://www.instagram.com/yurihousehold/" aria-label="Read more about yurihousehold" target="_blank"><img
                            class="imagebrand1" src="images/yuri bulet-edited.png" alt="" /></a></div>
                <div class="p-2"><a href="https://www.instagram.com/yurideedee.official/" aria-label="Read more about yurideedee" target="_blank"><img
                            class="imagebrand2" src="images/dd bulet-8-edited.png" alt="" /></a></div>
                <div class="p-2"><a href="https://www.instagram.com/yuribabydee.official/" aria-label="Read more about yuribabydee" target="_blank"><img
                            class="imagebrand3" src="images/bbd bulet-edited.png" alt="" /></a></div>
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
                                    <h5 class="card-title" style="font-size: 20px;">{{ $artikel->title }}</h5>
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
                    <div class="centered-media fw-bold">@lang('message.LIHATSEMUAMEDIA')</div>
                </a>
            </div>

        </div>
        <!-- End Content3-->

    </div>
    <!-- End Container -->

   
@endsection
