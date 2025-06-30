@extends('baru.frontend.layouts.app')

@section('title', 'Brands')

@section('content')
    <div class="container">
        
        <!-- Banner Homepage-->
        <div class="banner-home" data-aos="fade-up">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="images/householdcleaner.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="images/infografisproduk/deedee/infographicdeedee-03.webp" class="d-block w-100"
                            alt="..." style="border-radius: 2%">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="images/bannerbabydee.webp" class="d-block w-100" alt="..."
                            style="border-radius: 2%">
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

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="images/householdcleaner.webp" class="card-img-top" alt="..."
                        style="height: 100%; width: 100%; object-fit: cover;">
                    <div class="card-body">
                        <h4 class="card-title fw-bold" style="color: #005EB8">Household Cleaner</h4>
                        <a href="{{ route('brands.householdcleaner') }}"
                            style="position: relative; display: inline-block; width: 150px; height: 45px; text-align: center; text-decoration: none;"
                            onmouseover="this.querySelector('img').style.filter='brightness(80%)';"
                            onmouseout="this.querySelector('img').style.filter='brightness(100%)';">

                            <img src="images/bingkai klik-8.png" alt="Selengkapnya"
                                style="width: 110%; height: 110%; object-fit: cover; display: block; transition: 0.3s;">

                            <span
                                style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
             color: white; font-weight: bold; font-size: 14px; pointer-events: none;">
                                @lang('message.SELENGKAPNYA')
                            </span>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/deebrand.png" class="card-img-top" alt="..."
                        style="height: 100%; width: 100%; object-fit: cover;">
                    <div class="card-body">
                        <h4 class="card-title fw-bold" style="color: #005EB8">Children Toiletries</h4>
                        <a href="{{ route('brands.childrentoilet') }}"
                            style="position: relative; display: inline-block; width: 150px; height: 45px; text-align: center; text-decoration: none;"
                            onmouseover="this.querySelector('img').style.filter='brightness(80%)';"
                            onmouseout="this.querySelector('img').style.filter='brightness(100%)';">

                            <img src="images/bingkai klik-8.png" alt="Selengkapnya"
                                style="width: 110%; height: 110%; object-fit: cover; display: block; transition: 0.3s;">

                            <span
                                style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
                 color: white; font-weight: bold; font-size: 14px; pointer-events: none;">
                                @lang('message.SELENGKAPNYA')
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/babydeebrand.png" class="card-img-top" alt="..."
                        style="height: 100%; width: 100%; object-fit: cover;">
                    <div class="card-body">
                        <h4 class="card-title fw-bold" style="color: #005EB8">Baby Toiletries</h4>
                        <a href="{{ route('brands.babytoilet') }}"
                            style="position: relative; display: inline-block; width: 150px; height: 45px; text-align: center; text-decoration: none;"
                            onmouseover="this.querySelector('img').style.filter='brightness(80%)';"
                            onmouseout="this.querySelector('img').style.filter='brightness(100%)';">

                            <img src="images/bingkai klik-8.png" alt="Selengkapnya"
                                style="width: 110%; height: 110%; object-fit: cover; display: block; transition: 0.3s;">

                            <span
                                style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
             color: white; font-weight: bold; font-size: 14px; pointer-events: none;">
                                @lang('message.SELENGKAPNYA')
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 position-relative">
                    <div style="position: relative;">
                        <img src="images/evanybaru.png" class="card-img-top" alt="..."
                            style="height: 100%; width: 100%; object-fit: cover;">

                        <!-- Box Coming Soon -->
                        <div
                            style="position: absolute; top: 50%; left: 50%; 
                    transform: translate(-50%, -50%);
                    background-color: rgba(0, 0, 0, 0.6); 
                    color: white; padding: 10px 20px; 
                    border-radius: 8px; font-weight: bold; 
                    font-size: 18px; z-index: 10;">
                            Coming Soon
                        </div>
                    </div>

                    <div class="card-body">
                        <h4 class="card-title fw-bold" style="color: #005EB8">Adult Toiletries</h4>
                        <a href="{{ route('brands.adulttoilet') }}"
                            style="position: relative; display: inline-block; width: 150px; height: 45px; text-align: center; text-decoration: none;"
                            onmouseover="this.querySelector('img').style.filter='brightness(80%)';"
                            onmouseout="this.querySelector('img').style.filter='brightness(100%)';">

                            <img src="images/bingkai klik-8.png" alt="Selengkapnya"
                                style="width: 110%; height: 110%; object-fit: cover; display: block; transition: 0.3s;">
                            <span
                                style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); 
                       color: white; font-weight: bold; font-size: 14px; pointer-events: none;">
                                @lang('message.SELENGKAPNYA')
                            </span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- End Container -->
@endsection
