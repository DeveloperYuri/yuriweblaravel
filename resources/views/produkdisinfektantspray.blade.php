@extends('master')

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
                            <a class="nav-link fw-bold" aria-current="page" href="index.html"
                                style="color: #005EB8">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="tentang-kami.html"
                                style="color: #005EB8">TENTANG KAMI</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="brand.html"
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
                            <a class="nav-link fw-bold" aria-current="page" href="media.html"
                                style="color: #005EB8">MEDIA</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="produk-baru.html"
                                style="color: #005EB8">PRODUK BARU</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="kontak.html"
                                style="color: #005EB8">KONTAK</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="distributor.html"
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
    <div class="disinfektanspray-produk mt-4" data-aos="fade-up">
        <div class="card mb-3 mx-auto" style="max-width: 900px;">
            <div class="row g-0">
                <div class="col-lg-4">
                    <img src="images/produkdisinfektantspray.png" class="img-fluid rounded-start">
                </div>
                <div class="col-lg-8">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #005EB8;">
                            Yuri Disinfectant Spray </h5>
                        <p class="card-text mt-3" style="text-align: justify;">
                            Yuri Disinfectant Spray, merupakan cairan dengan pH netral serta mengandung bahan aktif
                            Benzalkonium Chloride yang berguna untuk membunuh bakteri atau kuman penyakit pada permukaan
                            benda yang sering disentuh tangan dan bagian tubuh yang lain, membersihkan kain atau pakaian,
                            alas kaki, yang terpapar bakteri dan kuman penyakit.
                        </p>
                        <a href="https://www.yurishop.co/id/category/Pembersih-Rumah/Surface-Cleaner"
                            class="btn btn-primary fw-bold" role="button" target="_blank">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- End Container -->

    <!-- Start Footer -->
    <div id="footerprodukaganol" class="card-footer text-body-secondary bg-dark text-center"
        style="margin-top: 30px; height: 40px; padding-top: 5px;">
        <div style="margin-top: 5px;">
            <p style="font-size: 12px; color: white">Copyright © 2024 PT Joenoes Ikamulya.</p>
        </div>

    </div>
    <!-- End Footer -->
@endsection
