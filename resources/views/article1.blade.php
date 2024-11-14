@extends('master')

@section('navbar')
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
                            class="nav-link fw-bold"
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

    <div class="article1">
        <h4 class="mb-4 mt-4" style="color: #005EB8;">7 Langkah Efektif Mencuci Tangan Dengan Sabun</h4>
    </div>

    <!-- Banner Homepage-->
    <div class="banner-article1" data-aos="fade-up">
        <img src="images/mediacucitangan.png" class="img-fluid" alt="...">
    </div>
    <!-- End Banner Homepage -->

    <!-- Content1 -->
    <div class="artikel-content-satu" style="margin-top: 20px" data-aos="fade-up">

        <p style="text-align: justify;">Cara yang paling dianjurkan oleh WHO untuk membersihkan tangan ialah dengan cara mencuci tangan dengan sabun dan menggunakan air bersih yang mengalir dari keran selama 30 detik. Lalu bagaimana cara yang tepat untuk mencuci tangan?</p>

        <ul>
            <li>Basahi kedua telapak setinggi pertengahan lengan memakai air yang mengalir, ambil sabun kemudian usap lalu gosok kedua telapak secara lembut.</li>
            <li>Usap dan gosok juga kedua punggung tangan secara bergantian, jangan terburu-buru.</li>
            <li>Jangan lupa jari-jari anda, gosok sela-sela jari hingga bersih.</li>
            <li>Bersihkan ujung jari secara bergantian dengan mengatupkannya.</li>
            <li>Gosok dan putar kedua ibu jari secara bergantian.</li>
            <li>Letakkan ujung jari ke telapak tangan kemudian gosok perlahan.</li>
            <li>Bersihkan kedua pergelangan secara bergantian dengan cara memutar, kemudian diakhiri dengan membilas seluruh bagian tangan dengan air bersih yang mengalir lalu keringkan memakai handuk atau tisu</li>
        </ul>

    </div>
    <!-- End Content1-->


</div>
<!-- End Container -->

<!-- Start Footer -->
<div id="footercopyrightarticle1"
    class="card-footer text-body-secondary bg-dark text-center"
    style="margin-top: 30px; height: 40px; padding-top: 5px;">
    <div style="margin-top: 5px;">
        <p style="font-size: 12px; color: white">Copyright © 2024 PT Joenoes Ikamulya.</p>
    </div>

</div>
<!-- End Footer -->

@endsection