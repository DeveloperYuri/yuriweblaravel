@extends('frontend.layouts.app')

@section('title', 'Brands')

@section('content')
    <div class="container">

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
@endsection
