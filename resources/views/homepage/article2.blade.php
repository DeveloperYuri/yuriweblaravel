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
        <h4 class="mb-4 mt-4" style="color: #005EB8;">7 Ciri-ciri Anak Sehat</h4>
    </div>

    <!-- Banner Homepage-->
    <div class="banner-article1" data-aos="fade-up">
        <img src="images/media7cirianaksehat.png" class="img-fluid" alt="...">
    </div>
    <!-- End Banner Homepage -->

    <!-- Content1 -->
    <div class="artikel-content-satu" style="margin-top: 20px" data-aos="fade-up">

        <p style="text-align: justify;">Anak yang sehat dengan pertumbuhan dan perkembangan yang normal tentu menjadi idaman semua orang tua. Ciri-ciri anak yang sehat tidak hanya dapat dilihat dari fisiknya, namun juga dari psikis dan sosialisasi terhadap lingkungan di sekitarnya. Seperti apa ciri-ciri anak sehat tersebut? Berikut ulasannya:</p>

        <ol>
            <li style="font-weight: bold;">Memiliki nafsu makan yang baik</li>
            <p>Anak yang memiliki nafsu makan yang baik tentu kebutuhan nutrisi dan asupan gizinya tercukupi. Anak yang sehat pun pasti pernah mengalami saat dimana mereka malas makan. Namun, jika nafsu makan anak tidak meningkat dalam jangka waktu cukup lama dan disertai dengan penurunan berat badan, ada baiknya Anda berkonsultasi ke dokter.</p>

            <li style="font-weight: bold;">Pernapasan tidak berbau</li>
            <p>Mayoritas penyebab kondisi nafas bau pada si buah hati disebabkan karena minimnya perawatan kebersihan mulut dan gigi mereka. Agar anak terhindar dari bau nafas, biasakan si kecil untuk merawat dan membersihkan gigi dan mulutnya melalui gosok gigi setidaknya dua kali sehari saat akan pergi tidur dan bangun pagi.</p>

            <li style="font-weight: bold;">Memiliki gigi cemerlang dan gusi berwarna merah muda</li>
            <p>Gigi anak yang cemerlang serta gusi merah muda berkilat menunjukkan anak memiliki kecukupan asupan niasin, asam folat, riboflavin, dan vitamin B 12.</p>

            <li style="font-weight: bold;">Kulit bersih dan apabila terluka mudah sembuh</li>
            <p>Kesehatan kulit juga merupakan ciri anak yang sehat. Kulit lembab dan tidak bersisik itu menandakan cukupnya asupan vitamin A, C, dan E. </p>

            <li style="font-weight: bold;">Suhu tubuh berada di antara 36,3oC - 37,7oC</li>
            <p>Suhu tubuh normal dapat berubah – ubah sepanjang hari. Suhu tubuh terendah terutama terjadi pada pagi hari, suhu tubuh dapat meningkat hingga 0,6 derajat Celcius pada sore hari. </p>

            <li style="font-weight: bold;">Rambut tidak kusam dan rontok</li>
            <p>Rambut dapat menjadi cerminan kondisi kesehatan secara keseluruhan. Asupan gizi yang cukup jelas akan memengaruhi tekstur rambut. Mereka yang asupan gizi-nya kurang biasanya rambutnya lebih tipis, kering, gampang patah dan rontok, serta cenderung berwarna kemerah-merahan.</p>

            <li style="font-weight: bold;">Antusias bermain</li>
            <p>Sejauh anak lincah dan ceria serta aktif bergerak dan bermain, berarti dia dalam keadaan sehat dan bugar. Karena balita sehat adalah balita lincah dan ceria serta aktif bergerak dan bermain.</p>
        </ol>

    </div>
    <!-- End Content1-->


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