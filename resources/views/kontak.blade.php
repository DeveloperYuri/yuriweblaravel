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
                            class="nav-link active fw-bold"
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
    <div class="banner-kontak" data-aos="fade-up">
        <img src="images/Banner-kontak.png" class="img-fluid" alt="..." width="100%">
    </div>
    <!-- End Banner Homepage -->

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4822898191064!2d106.9152784740248!3d-6.19992546073466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b4c1e967e9f%3A0x7b0d84b40363198d!2sJoenoes%20Ikhamulya%20Pt.%2C%20Jl.%20Pulogadung%20No.43%2C%20RW.9%2C%20Jatinegara%2C%20Kec.%20Cakung%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013930!5e0!3m2!1sid!2sid!4v1730163508050!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="row" data-aos="fade-up">
        <h5
            class="fw-bold mt-4"
            style="margin-bottom: 20px; color: #005EB8; font-size: 28px;">
            Terhubung Dengan Kami
        </h5>
        <p style="font-size: 16px;">
            Apabila Anda memiliki pertanyaan mengenai produk Yuri, silahkan
            mengisi formulir dibawah ini
        </p>

        <div class="col-md-4">
            <form style="font-size: 12px">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Subjek</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pertanyaan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>


</div>
<!-- End Container -->

<!-- Start Footer -->
<div
    class="media-footer card-footer text-body-secondary bg-dark text-center"
    style="margin-top: 30px; height: 40px; padding-top: 5px;">
    <div style="margin-top: 5px;">
        <p style="font-size: 12px; color: white">Copyright © 2024 PT Joenoes Ikamulya.</p>
    </div>

</div>
<!-- End Footer -->
@endsection