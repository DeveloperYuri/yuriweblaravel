@extends('baru.frontend.layouts.app')

@section('title', 'Children Toilet')

@section('content')
    <!-- Container -->
    <div class="container">

        <!-- Banner Homepage-->
        <div class="banner-tentang-kami" data-aos="fade-up">
            <img src="images/infografisproduk/deedee/infographicdeedee-03.webp" class="img-fluid" alt="..." width="100%"
                style="border-radius: 2%">
        </div>
        <!-- End Banner Homepage -->

        <!-- Content -->
        <div class="content-household">
            <div class="d-flex p-3 justify-content-center">
                <div class="p-2"><a href="{{ route('childrenshairshampooupdate') }}"><img
                            src="images/infografisproduk/deedee/hairshampoo.webp" alt="" /></a></div>
                <div class="p-2"><a href="{{ route('childrensbodywashupdate') }}"><img
                            src="images/infografisproduk/deedee/bodywash.webp" alt="" /></a></div>
                <div class="p-2"><a href="{{ route('mosquitoreppellentlotionupdate') }}"><img
                            src="images/infografisproduk/deedee/mosquitoreppellentlotion.webp" alt="" /></a></div>
            </div>

            <div class="d-flex p-3 justify-content-center">
                <div class="p-2"><a href="{{ route('childrensshowerfoamingupdate') }}"><img
                            src="images/infografisproduk/deedee/childrensshowerfoaming.webp" alt="" /></a></div>
                <div class="p-2"><a href="{{ route('childrenstalcumpowderupdate') }}"><img
                            src="images/infografisproduk/deedee/TalcumPowder.webp" alt="" /></a></div>
                <div class="p-2"><a href="{{ route('childrenstoothpastaupdate') }}"><img
                            src="images/infografisproduk/deedee/ToothPasta.webp" alt="" /></a></div>
            </div>

            <div class="d-flex p-3 justify-content-center mb-5">
                <div class="p-2"><a href="{{ route('shampoolonghairupdate') }}"><img
                            src="images/infografisproduk/deedee/shampoolonghair.webp" alt="" /></a></div>
                <div class="p-2"><a href="{{ route('childrensfacialwashupdate') }}"><img
                            src="images/infografisproduk/deedee/facialwash.webp" alt="" /></a></div>
            </div>
        </div>
        <!-- End Content-->

    </div>
@endsection
