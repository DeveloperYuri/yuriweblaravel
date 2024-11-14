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
                    class="nav-link active fw-bold"
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
     <div class="content-satu text-center" style="margin-top: 20px" data-aos="fade-up">
      <div class="caption1">
        <h1 style="margin-bottom: 20px; color: #005EB8">
          Nilai & Keunggulan
        </h1>
      </div>

      <div class="d-flex p-3 justify-content-center">
        <div class="p-2"><img src="images/ramah lingkungan.png" alt=""/></div>
        <div class="p-2"><img src="images/terjangkau.png" alt=""/></div>
        <div class="p-2"><img src="images/kami disini untuk anda.png" alt=""/></div>
      </div>
      
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
          Brand Kami
        </h1>
      </div>
      
      <p class="text-center" style="font-size: 20px;">
        Kami berkomitmen untuk menghasilkan produk berkualitas internasional
        <br class="mobile-break">yang terjangkau oleh semua lapisan masyarakat.
      </p>

      <div id="brandsid" class="d-flex p-3 justify-content-center">
        <div class=""><a href="https://www.instagram.com/yurihousehold/" target="_blank"><img class="imagebrand1" src="images/yuri bulet-edited.png" alt="" /></a></div>
        <div class="p-2"><a href="https://www.instagram.com/yurideedee.official/" target="_blank"><img class="imagebrand2" src="images/dd bulet-8-edited.png" alt=""/></a></div>
        <div class="p-2"><a href="https://www.instagram.com/yuribabydee.official/" target="_blank"><img class="imagebrand3" src="images/bbd bulet-edited.png" alt="" /></a></div>
      </div>

       <p class="text-center" style="font-size: 20px;">Telusuri product kami selengkapnya.</p>

       <div class="button-brand">
        <a
        href="brand.html"
        ><img src="images/bingkai klik-8.png" class="img-fluid" alt="Responsive image" width="30%" height="20%"><div class="centered fw-bold">Brand Kami</div></a
      >
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

      <div class="row row-cols-1 row-cols-md-3 g-4 mb-3 justify-content-center">
        <div class="col-md-4">
          <div class="card h-70">
            <img src="images/mediacucitangan.png" class="card-img-top" alt="...">
            <div class="card-body">
              <a href="{{ url('/article1') }}"><h5 class="card-title" style="font-size: 17px;">7 Langkah Efektif Mencuci Tangan Dengan Sabun</h5></a>
            </div>
            
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <img src="images/media7cirianaksehat.png" class="card-img-top" alt="...">
            <div class="card-body">
              <a href="{{ url('/article2') }}"><h5 class="card-title" style="font-size: 17px;">7 Ciri-Ciri Anak Sehat</h5></a>
            </div>
            
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-70">
            <img src="images/mediatipscerdasmembersihkanrumah.png" class="card-img-top" alt="...">
            <div class="card-body">
              <a href="{{ url('/article3') }}"><h5 class="card-title" style="font-size: 17px;">9 Tips Cerdas Membersihkan Rumah dan Dapur</h5></a>
            </div>
            
          </div>
        </div>
      </div>

      <div class="button-media">
        <a
        href="media.html"
        ><img src="images/bingkai klik-8.png" class="img-fluid" alt="Responsive image" width="30%" height="20%"><div class="centered-media fw-bold">Lihat Semua Media</div></a
      >
       </div>

     </div>
     <!-- End Content3-->

  </div>
  <!-- End Container -->

  <!-- Start Footer -->
  <div
    class="card-footer text-body-secondary bg-dark text-center"
    style="margin-top: 30px; height: 40px; padding-top: 5px;"
  >
  <div style="margin-top: 5px;">
    <p style="font-size: 12px; color: white">Copyright © 2024 PT Joenoes Ikamulya.</p>
  </div>

  </div>
  <!-- End Footer -->

@endsection