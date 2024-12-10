@extends('layouts.master')

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
                            <a class="nav-link fw-bold" aria-current="page" href="{{ url('/') }}"
                                style="color: #005EB8">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ url('/tentangkami') }}"
                                style="color: #005EB8">TENTANG KAMI</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ url('/brands') }}"
                                style="color: #005EB8">BRANDS</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" href="{{ url('/onlineshop') }}" role="button"
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
                            <a class="nav-link fw-bold" aria-current="page" href="{{ url('/media') }}"
                                style="color: #005EB8">MEDIA</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ url('/produkbaru') }}"
                                style="color: #005EB8">PRODUK BARU</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ url('/kontak') }}"
                                style="color: #005EB8">KONTAK</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="{{ url('/distributor') }}"
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

        <!-- Content1 -->
        <div class="content-satu text-center" style="margin-top: 20px" data-aos="fade-up">
            <div class="caption1">
                <h1 style="margin-bottom: 20px; color: #005EB8">
                    Pertanyaan Umum
                </h1>
                <h5 style="margin-bottom: 20px; color: #005EB8">Pertanyaan yang sering dicari</h5>
            </div>

            <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne" style="color: #748087">
                            Bagaimana cara saya melakukan pemesanan produk?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>Anda bisa melakukan pemesanan melalui website www.yurishop.co. Anda akan menerima email
                                konfirmasi pesanan beserta nomor pemesanan Anda. Jika Anda ingin memesan melalui telepon,
                                hubungi kami ke (021)460-2447</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo" style="color: #748087">
                            Kapan waktu operasional yurishop.co ?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>Jam operasional kami dari hari Senin-Jumat pada pukul 09.00-17.00 WIB (kecuali hari libur).
                                Apabila di luar waktu tersebut, akan diproses keesokan harinya</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThree" style="color: #748087">
                            Metode pembayaran apa saja yang dapat saya gunakan?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>Kami menerima pembayaran melalui Visa, MasterCard, Credit Card Installment, Mandiri Clickpay,
                                BCA Klikpay, Bank Transfer, Virtual Account, Internet Banking, Doku Wallet</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFour" style="color: #748087">
                            Apakah saya dapat menerima pesanan di hari yang sama saya melakukan pemesanan?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>Tidak, kami membutuhkan 2 – 3 hari kerja tergantung dari stok barang yang tersedia saat itu.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFive" style="color: #748087">
                            Kapan estimasi perkiraan pesanan dapat saya terima?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>Pesanan dengan pengiriman standar biasanya memerlukan waktu 3 – 5 hari. Waktu pengiriman
                                tergantung pada jarak atau hal-hal lainnya. Pengiriman ke beberapa alamat terpencil
                                memerlukan waktu hingga 2 hari tambahan</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseSix" style="color: #748087">
                            Siapa yang akan mengirimkan pesanan?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingSix">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>Kami bekerjasama dengan jasa pengiriman seperti JNE untuk mengirimkan pesanan ke seluruh kota
                                di Indonesia</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseSeven" style="color: #748087">
                            Bagaimana jika saya ingin memesan dalam jumlah yang banyak?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingSeven">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>Anda dapat menghubungi kami di (021)460-2447 atau melalui email cs@yurishop.co atau Anda bisa
                                melakukan pemesanan secara berulang-ulang pada website kami</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseEight" style="color: #748087">
                            Bagaimana saya mengetahui bahwa pesanan saya sudah dikirim?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingEight">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>Kami akan mengirimkan pesan konfirmasi melalui email. Anda juga dapat menghubungi kami di
                                (021)460-2447 atau melalui email cs@yurishop.co.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseNine" style="color: #748087">
                            Bagaimana cara untuk cek status pengiriman pesanan saya?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingNine">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>Anda dapat melacak status pengiriman pada menu Cek Order yang tersedia di halaman utama. Kami
                                tidak dapat memastikan pesanan Anda tiba tepat waktu, tetapi kami dapat memberitahu Anda
                                jika pesanan Anda telah dikirim atau jika terjadi masalah pada pengiriman tersebut</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTen">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTen" style="color: #748087">
                            Apakah pengiriman hanya berlaku untuk daerah Jabodetabek saja?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTen">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>Saat ini kami membatasi pengiriman hanya ke Jabodetabek saja. Untuk mengetahui apakah produk
                                yang Anda inginkan tersedia di kota Anda,hubungi cs@yurishop.co.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingEleven">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseEleven" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseEleven" style="color: #748087">
                            Apakah harga yang tertera sudah termasuk biaya pengiriman?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseEleven" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingEleven">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>Tidak. Harga produk yang tertera pada website belum termasuk dengan biaya pengiriman.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwelve">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwelve" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwelve" style="color: #748087">
                            Apakah yurishop.co memberikan biaya pengiriman gratis?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwelve" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTwelve">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>Tidak. Pastikan Anda untuk selalu cek promo terbaru di yurishop.co untuk mendapatkan
                                pengiriman gratis dari kami.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThirteen">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThirteen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThirteen" style="color: #748087">
                            Berapa biaya pengiriman yang harus saya bayar?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThirteen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThirteen">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>Biaya pengiriman dihitung flat berdasarkan penghitungan berat serta volume produk dan lokasi
                                pengiriman. Biaya pengiriman akan otomatis tertera pada halaman checkout.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFourteen">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFourteen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFourteen" style="color: #748087">
                            Bagaimana cara mengganti alamat pengiriman?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFourteen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingFourteen">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>Jika Anda ingin mengganti alamat pengiriman setelah melakukan pemesanan, Anda dapat
                                menghubungi kami di (021)460-2447 atau melalui email cs@yurishop.co sesegera mungkin selama
                                pesanan Anda masih diproses. Jika pesanan belum dikirim, kami akan mengirimkan ke alamat
                                yang baru. Jika pesanan sudah dikirim maka alamat pengiriman tidak dapat diganti lagi.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFiveteen">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFiveteen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFiveteen" style="color: #748087">
                            Bagaimana jika barang pesanan yang saya terima tidak sesuai atau tidak lengkap?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFiveteen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingFiveteen">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>Anda dapat menghubungi kami di (021)460-2447 atau melalui email cs@yurishop.co Kami akan
                                melakukan verifikasi dan konfirmasi semua barang yang tidak sesuai tersebut.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSixteen">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseSixteen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseSixteen" style="color: #748087">
                            Bagaimana cara mengembalikan produk yang rusak pada saat saya terima?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSixteen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingSixteen">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>Hubungi kami di (021)460-2447 atau melalui email cs@yurishop.co beserta informasi berikut:
                                1. Nomor order
                                2. Alasan pengembalian barang
                                3. Sertakan foto jelas yang menunjukkan kerusakan barang
                                4. Detail produk: jumlah, nama, varian, dan ukuran produk yang ingin dikembalikan
                                5. Alamat lengkap dan nomor telepon Anda
                                Kami tidak akan memproses pengembalian barang yang telah dikirimkan tanpa persetujuan kami
                                sebelumnya.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSeventeen">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseSeventeen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseSeventeen" style="color: #748087">
                            Ketentuan produk rusak?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSeventeen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingSeventeen">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>a.Produk cacat produksi, dan bukan terjadi karena kesalahan penggunaan seperti halnya: jatuh,
                                masuk air, tergores, produk sudah digunakan, dan lain sebagainya yang diakibatkan human
                                error.
                                <br>b.Kerusakan produk yang disebabkan karena proses pengiriman.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingEightteen">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseEightteen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseEightteen" style="color: #748087">
                            Apakah ada batas waktu pengajuan retur?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseEightteen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingEightteen">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>Ya. Batas waktu pengajuan retur atau pengembalian barang maksimal 7x24 jam dari feedback Anda
                                kepada Customer Service kami</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="button-brand">
                <a href={{ route('index') }} target="_blank"><img src="images/bingkai klik-8.png" class="img-fluid"
                        alt="Responsive image" width="30%" height="10%">
                    <div class="centered"><strong>Selengkapnya</strong></div>
                </a>
            </div>
        </div>
        <!-- End Content1-->

    </div>
    <!-- End Container -->

    <!-- Start Footer -->
    <div id="faq-footer" class="card-footer text-body-secondary bg-dark text-center"
        style="margin-top: 30px; height: 40px; padding-top: 5px;">
        <div style="margin-top: 5px;">
            <p style="font-size: 12px; color: white">Copyright © 2024 PT Joenoes Ikamulya.</p>
        </div>

    </div>
    <!-- End Footer -->
@endsection
