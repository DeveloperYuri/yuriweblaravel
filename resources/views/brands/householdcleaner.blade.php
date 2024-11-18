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
<!-- Container -->
<div class="container">

    <h3 class="text-center fw-bold mt-3 mb-3" style="color: #005EB8">
        Household Cleaner
    </h3>

    <!-- Banner Homepage-->
    <div class="banner-tentang-kami" data-aos="fade-up">
        <img src="images/householdcleaner.png" class="img-fluid" alt="..." width="100%">
    </div>
    <!-- End Banner Homepage -->

    <!-- Content -->
    <div class="content-household">
        <div class="d-flex p-3 justify-content-center">
            <div class="p-2"><a href="{{ url('/aganol') }}" ><img src="images/household1.png" alt="" /></a></div>
            <div class="p-2"><a href="{{ url('/babysoft') }}" ><img src="images/household2.png" alt="" /></a></div>
            <div class="p-2"><a href="{{ url('/biosoftdetergen') }}" ><img src="images/household3.png" alt="" /></a></div>
        </div>

        <div class="d-flex p-3 justify-content-center">
            <div class="p-2"><a href="{{ url('/biosoft') }}" ><img src="images/household4.png" alt="" /></a></div>
            <div class="p-2"><a href="{{ url('/bathroomcleaner') }}" ><img src="images/household5.png" alt="" /></a></div>
            <div class="p-2"><a href="{{ url('/yuribleach') }}" ><img src="images/household6.png" alt="" /></a></div>
        </div>

        <div class="d-flex p-3 justify-content-center">
            <div class="p-2"><a href="{{ url('/fabriccare') }}" ><img src="images/household7.png" alt="" /></a></div>
            <div class="p-2"><a href="{{ url('/glasscleaner') }}" ><img src="images/household8.png" alt="" /></a></div>
            <div class="p-2"><a href="{{ url('/handgel') }}" ><img src="images/household9.png" alt="" /></a></div>
        </div>

        <div class="d-flex p-3 justify-content-center">
            <div class="p-2"><a href="{{ url('/handsoap') }}" ><img src="images/household10.png" alt="" /></a></div>
            <div class="p-2"><a href="{{ url('/ligent') }}" ><img src="images/household11.png" alt="" /></a></div>
            <div class="p-2"><a href="{{ url('/lysorin') }}" ><img src="images/household12.png" alt="" /></a></div>
        </div>

        <div class="d-flex p-3 justify-content-center">
            <div class="p-2"><a href="{{ url('/yurisoft') }}" ><img src="images/household13.png" alt="" /></a></div>
            <div class="p-2"><a href="{{ url('/porstex') }}" ><img src="images/household14.png" alt="" /></a></div>
            <div class="p-2"><a href="{{ url('/yurisol') }}" ><img src="images/household15.png" alt="" /></a></div>
        </div>

        <div class="d-flex p-3 justify-content-center">
            <div class="p-2"><a href="{{ url('/taf') }}" ><img src="images/household16.png" alt="" /></a></div>
            <div class="p-2"><a href="{{ url('/yurimatic') }}" ><img src="images/household17.png" alt="" /></a></div>
            <div class="p-2"><a href="{{ url('/trill') }}" ><img src="images/household18.png" alt="" /></a></div>
        </div>

        <div class="d-flex p-3 justify-content-center">
            <div class="p-2"><a href="{{ url('/laundrydisinfektant') }}" ><img src="images/household19.png" alt="" /></a></div>
            <div class="p-2"><a href="{{ url('/disinfektantspray') }}" ><img src="images/household20.png" alt="" /></a></div>
            <div class="p-2"><a href="{{ url('/handmoisturizer') }}" ><img src="images/household21.png" alt="" /></a></div>
        </div>
    </div>
    <!-- End Content-->

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