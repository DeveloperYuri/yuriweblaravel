@extends('master')

@section('navbar')
<!-- Navbar Menu -->
<div class="menubar">
    <nav class="navbar navbar-expand-lg bg-body-white">
        <div class="container-fluid">
            <img src="images/logo-8.png" width="100px" height="50px" />
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a
                            class="nav-link fw-bold"
                            aria-current="page"
                            href="{{ url('/') }}"
                            style="color: #005EB8">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link fw-bold"
                            aria-current="page"
                            href="{{ url('/tentangkami') }}"
                            style="color: #005EB8">TENTANG KAMI</a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link active fw-bold"
                            aria-current="page"
                            href="{{ url('/brands') }}"
                            style="color: #005EB8">BRANDS</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold" href="{{ url('/onlineshop') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #005EB8">
                            ONLINE SHOP
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://shopee.co.id/yuriofficialshop" target="_blank">SHOPEE</a></li>
                            <li><a class="dropdown-item" href="https://www.tokopedia.com/yuri-official" target="_blank">TOKOPEDIA</a></li>
                            <li><a class="dropdown-item" href="https://www.lazada.co.id/shop/yuri-official-store/?spm=a2o4j.pdp_revamp.seller.1.28fa76118mbGvu&itemId=1769620279&channelSource=pdp" target="_blank">LAZADA</a></li>
                            <li><a class="dropdown-item" href="https://www.blibli.com/brand/yuri-official-store" target="_blank">BLIBLI</a></li>
                            <li><a class="dropdown-item" href="https://www.yurishop.co/id/" target="_blank">YURI SHOP</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link fw-bold"
                            aria-current="page"
                            href="{{ url('/media') }}"
                            style="color: #005EB8">MEDIA</a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link fw-bold"
                            aria-current="page"
                            href="{{ url('/produkbaru') }}"
                            style="color: #005EB8">PRODUK BARU</a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link fw-bold"
                            aria-current="page"
                            href="{{ url('/kontak') }}"
                            style="color: #005EB8">KONTAK</a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link fw-bold"
                            aria-current="page"
                            href="{{ url('/distributor') }}"
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
    <!-- Banner Homepage-->
    <div class="banner-home" data-aos="fade-up">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="images/brandcarousel1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/brandcarousel2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/brandcarousel3.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/brandcarousel4.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- End Banner Homepage -->

    <!-- Content1 -->
    <div class="brand-content-satu" style="margin-top: 20px" data-aos="fade-up">
        <h4 class="text-center fw-bold" style="color: #005EB8">
            YURI telah diakui sebagai merek terkemuka
            <br class="mobile-break" />untuk perawatan rumah serta perawatan anak & pribadi
        </h4>

        <div class="tentangkamudesc" style="margin-top: 20px;">
            <p style="text-align: justify">
                Menjadi grup bisnis yang dinamis dan beragam. Yuri berkomitment akan
                selalu meningkatkan layanan kami untuk lebih memenuhi kebutuhan
                konsumen dalam membuat hidup lebih baik bagi konsumen Indonesia
                dengan menyediakan kualitas produk tanpa komporomi </p>
        </div>
    </div>
    <!-- End Content1-->

    <div class="brand1 text-center" data-aos="fade-up">
        <a href="{{ url('/householdcleaner') }}"><img src="images/brand1.png" alt="" width="100%" /></a>
    </div>
    <div class="brand2 text-center" data-aos="fade-up">
        <a href="{{ url('/childrentoilet') }}"><img src="images/brand2.png" alt="" width="100%" /></a>
    </div>
    <div class="brand3 text-center" data-aos="fade-up">
        <a href="{{ url('/babytoilet') }}"><img src="images/brand3.png" alt="" width="100%" /></a>
    </div>
    <div class="brand4 text-center" data-aos="fade-up">
        <a href="{{ url('/adulttoilet') }}"><img src="images/brand4.png" alt="" width="100%" /></a>
    </div>


</div>
<!-- End Container -->

<!-- Start Footer -->
<div
    class="card-footer text-body-secondary bg-dark text-center"
    style="margin-top: 30px; height: 40px; padding-top: 5px;">
    <div style="margin-top: 5px;">
        <p style="font-size: 12px; color: white">Copyright © 2024 PT Joenoes Ikamulya.</p>
    </div>

</div>
<!-- End Footer -->
@endsection