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
                    class="nav-link active fw-bold"
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
<div class="container">
    <!-- Banner Homepage-->
    <div class="banner-tentang-kami" data-aos="fade-up">
        <img src="images/Banner-Tentang-Kami.png" class="img-fluid" alt="..." width="100%">
    </div>
    <!-- End Banner Homepage -->

    <!-- Content1 -->
    <div class="tentang-kami-content-satu" style="margin-top: 20px" data-aos="fade-up">
        <h4 class="text-center fw-bold" style="color: #005EB8">
            YURI berkomitment membangun masa depan yang lebih sehat
            <br />dengan menciptakan gaya hidup, bumi dan juga ekosistem yang
            sehat
        </h4>

        <div class="tentangkamudesc" style="margin-top: 20px;">
            <p style="text-align: justify">
                PT Joenoes Ikamulya merupakan sebuah perusahaan yang bergerak dalam pengembangan dan produksi barang konsumsi, mulai dari berbagai jenis deterjen hinggal perlengkapan mandi untuk segala usia, dengan tren dan waktu yang selalu berubah, PT Joenoes Ikamulya berupaya terus berinovasi untuk meningkatkan layanannya sehingga dapat memenuhi kebutuhan konsumen dengan lebih baik
            </p>
        </div>
    </div>
    <!-- End Content1-->

    <div class="row mt-3">
        <div class="col-12">
            <img src="images/garis.png" alt="" width="100%" />
        </div>
    </div>

    <!-- Content2 -->
    <div class="tentang-kami-content-dua text-center" style="margin-top: 20px" data-aos="fade-up">
        <div class="caption1 mb-4">
            <h1 style="margin-bottom: 20px; color: #005EB8">
                Komitment Kami
            </h1>
        </div>

        <div class="d-flex p-3 justify-content-center">
            <div class="p-2"><img src="images/kualitas.png" alt="" /></div>
            <div class="p-2"><img src="images/nilai.png" alt="" /></div>
            <div class="p-2"><img src="images/keberlanjutan.png" alt="" /></div>
        </div>

        <div class="berikutadalah" style="margin-top: 20px;">
            <p style="text-align: justify">
                Berikut adalah tiga nilai inti yang ada di setiap produk Yuri.
                Dipercaya oleh keluarga selama lebih dari tiga dekade. Kami
                bertujuan untuk memberi anda produk berkualitas terbaik dengan nilai
                terbaik. Dengan pengalaman lebih dari tiga dekade dan beberapa tim
                penelitian dan pengmbangan di Indonesia dan Singapura. Kami selalu
                berusaha untuk menciptakan produk yang lebih baik untuk memberikan
                nilai yang lebih baik bagi anda dan lingkungan kita
            </p>
        </div>
    </div>
    <!-- End Content2-->

    <div class="row mt-3" data-aos="fade-up">
        <div class="col-12">
            <img src="images/garis.png" alt="" width="100%" />
        </div>
    </div>

    <!-- Content3 -->
    <div class="tentang-kami-content-tiga text-center" style="margin-top: 20px" data-aos="fade-up">
        <div class="caption1 mb-4">
            <h1 style="margin-bottom: 20px; color: #005EB8">
                Visi & Misi
            </h1>
        </div>

        <div class="visi">
            <div class="d-flex p-3 justify-content-center">
                <div class="p-2"><img src="images/visi.png" alt="" /></div>
                <div class="p-2">
                    <h4 style="text-align: left; color: #005EB8; font-weight: bold;">VISI</h4>
                    <p style="text-align: justify; word-break: break-all;">Tekad telah menjadi landasan fundamental kami dalam proses pengambilan keputusan, mengatasi masalah, dan akhirnya mencapai tujuan jangka pendek dan jangka panjang </p>

                </div>
            </div>
        </div>

        <div class="misi">
            <div class="d-flex p-3 justify-content-center">
                <div class="p-2"><img src="images/misi.png" alt="" /></div>
                <div class="p-2">
                    <h4 style="text-align: left; color: #005EB8; font-weight: bold;">MISI</h4>
                    <p style="text-align: justify; word-break: break-all;">ini adalah janji kami untuk bekerja secara konsisten dan memenuhi
                        standar dan harapan anda
                    </p>
                </div>
            </div>
        </div>

    </div>
    <!-- End Content3-->

    <div class="row mt-3" data-aos="fade-up">
        <div class="col-12">
            <img src="images/garis.png" alt="" width="100%" />
        </div>
    </div>

    <div class="tentang-kami-content-empat text-center" data-aos="fade-up">
        <img src="images/dijoenoesikamulya.png" alt="" width="100%">
    </div>


</div>
<!-- End Container -->
</div>


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