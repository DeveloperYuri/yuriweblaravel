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
        <h4 class="mb-4 mt-4" style="color: #005EB8;">9 Tips Cerdas Membersihkan Rumah dan Dapur</h4>
    </div>

    <!-- Banner Homepage-->
    <div class="banner-article1" data-aos="fade-up">
        <img src="images/mediatipscerdasmembersihkanrumah.png" class="img-fluid" alt="...">
    </div>
    <!-- End Banner Homepage -->

    <!-- Content1 -->
    <div class="artikel-content-satu" style="margin-top: 20px" data-aos="fade-up">

        <p style="text-align: justify;">Pekerjaan rumah tangga memang tak pernah ada hentinya dan tak pernah pula ada habisnya. Jika Anda ingin membersihkan rumah tetapi tidak memiliki banyak waktu untuk berbelanja berbagai macam pembersih, yuk, pelajari 9 cara praktis yang bisa mempersingkat dan memudahkan tugas kita di dalam rumah berikut ini.</p>

        <ul>
            <li style="font-weight: bold;">Bubuk Kopi</li>
            <p>Gunakan bubuk kopi untuk menghilangkan bau tidak sedap pada lemari pendingin atau lemari penyimpanan lainnya. Anda hanya perlu meletakkan beberapa sendok bubuk kopi, baik yang sudah digunakan atau masih baru, pada sebuah wadah lalu letakkan di daerah yang Anda inginkan. Ganti bubuk kopi tersebut setiap dua bulan sekali untuk menjaga kesegaran dan menghindari bau kafein mendominasi lemari Anda.</p>

            <li style="font-weight: bold;">Selotip</li>
            <p>Gunakan selotip untuk membersihkan pecahan beling tipis-tipis yang seringkali luput dari penglihatan pada permukaan lantai. Ambil selotip yang paling besar, lalu tempelkan ke tempat pecahan kaca tadi berada. Maka pecahan kaca bisa terangkat dengan sendirinya melalui selotip tersebut.</p>

            <li style="font-weight: bold;">Blender</li>
            <p>Blender merupakan alat rumah tangga yang cukup sulit dibersihkan karena bentuk yang bagian bawahnya memiliki pisau yang menyulitkan kita sehingga harus dibongkar dahulu. Namun kini ada yang lebih mudah yaitu dengan menuangkan sabun cuci piring beserta air panas kedalamnya. Selanjutnya nyalakan mesin blender beberapa menit dan cuci bersih serta bersihkan. Jadi tidak perlu repot melepas bagian-bagian dalam blender untuk hasil yang maksimal.</p>

            <li style="font-weight: bold;">Wastafel yang Tersumbat</li>
            <p>Wastafel yang tersumbat pasti akan menyulitkan kita dalam membersihkannya seperti harus membongkarnya ataupun memanggil tukang yang lebih ahli. Padahal ada cara yang lebih mudah lho yaitu dengan mendidihkan terlebih dahulu campuran antara baking soda dengan cuka. Setelah tercampur, masukkan ke lubang wastafel dan tunggu beberapa menit. Coba alirkan kembali air ke lubang wastafel tersebut dan lihatlah wastafel kembali lancar.</p>

            <li style="font-weight: bold;">Sepatu Basah</li>
            <p>Musim hujan seperti ini seringkali menimbulkan permasalahan baru seperti sepatu yang kotor dan susah dikeringkan karena cuaca yang tidak mendukung. Untuk bisa mempercepat pengeringan, masukkan gulungan koran atau majalah dalam sepatu tersebut. kadar air dalam sepatu pun akan sedikit demi sedikit terserap dan mempercepat pengeringan.</p>

            <li style="font-weight: bold;">Noda pada Karpet</li>
            <p>Noda pada karpet sangatlah susah untuk dibersihkan. Nah ada cara yang lebih mudah untuk menghilangkannya yaitu dengan menyemprotkan larutan dari campuran 2 gelas air dengan 1 gelas cuka. Tutup noda dengan kain yang basah dan setrika sebentar. Sekitar 1 menit kemudian noda di karpet pun hilang.</p>

            <li style="font-weight: bold;">Bubuk Kopi</li>
            <p>Gunakan bubuk kopi untuk menghilangkan bau tidak sedap pada lemari pendingin atau lemari penyimpanan lainnya. Anda hanya perlu meletakkan beberapa sendok bubuk kopi, baik yang sudah digunakan atau masih baru, pada sebuah wadah lalu letakkan di daerah yang Anda inginkan. Ganti bubuk kopi tersebut setiap dua bulan sekali untuk menjaga kesegaran dan menghindari bau kafein mendominasi lemari Anda.</p>

            <li style="font-weight: bold;">Beking Soda</li>
            <p>Tak bisa dipungkiri, bagi kamu yang memiliki anak yang masih kecil akan merasakan yang namanya bekas muntahan di rumah seperti di karpet atau di tempat lainnya. Untuk membersihkannya, tuang baking soda yang dicampur dengan air pada muntahan sebelum dibersihkan. Cukup jeda semalaman, muntahan pun bisa dibersihkan dengan maksimal.</p>

            <li style="font-weight: bold;">Spons dan Sikat Arang</li>
            <p>Spon ataupun sikat arang sering digunakan setiap harinya pada peralatan makan seperti piring ataupun wajan. Kamu tahu gak kalau sebenarnya didalam spon tersebut terdapat bakteri yang saat ditempelkan pada piring, maka bakteri tersebut akan menempel dan masuk dalam tubuh kita. Untuk membersihkan spon ataupun sikat arang tersebut agar terhindar dari penyebaran bakteri, letakkan spon dalam microwave dan panaskan selama 2 menit guna menghilangkan 99% bakteri atau kuman di dalamnya.</p>

            <li style="font-weight: bold;">Peralatan Berbahan Perak</li>
            <p>Peralatan yang terbuat dari bahan perak seperti alat makan ataupun aksesoris dapur lainnya jika digunakan secara terus menerus akan menimbulkan warna yang lebih pudar dan tak secerah dahulu. Untuk solusinya, rendam peralatan tersebut dalam campuran air panas dan baking soda. Setalah beberapa saat, peralatan tersebut akan berubah seperti baru pertama beli.</p>
        </ul>

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