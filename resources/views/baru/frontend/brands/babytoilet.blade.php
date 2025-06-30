@extends('baru.frontend.layouts.app')

@section('title', 'Baby Toilet')

@section('content')
    <!-- Container -->
    <div class="container">
        {{-- <div class="caption text-center mt-3">
            <img src="images/logobabydee.png" alt="">
        </div> --}}

         <div class="babydeegeneral">
            <img src="images/infografisproduk/babydee/bbdinfographic-01.jpg" alt="" />
        </div>

        <div id="imagebrandbabydee" class="row mt-3">
            <div class="col-6">
                <img class="babydee1" src="images/infografisproduk/babydee/testbrandimage.png" alt="" width="100%"
                    style="border-radius: 10%;">
            </div>
            <div class="col-6">
                <img class="babydee2" src="images/infografisproduk/babydee/testbrandimagebabylotion.png" alt=""
                    width="100%" style="border-radius: 10%;">
            </div>
            <div class="col-6">
                <img class="babydee3 mt-3 " src="images/infografisproduk/babydee/testbrandimagebabypowder.png"
                    alt="" width="100%" style="border-radius: 10%;">
            </div>
            <div class="col-6">
                <img class="babydee4 mt-3 " src="images/infografisproduk/babydee/testbrandimagediaper.png" alt=""
                    width="100%" style="border-radius: 10%;">
            </div>
        </div>

        <div class="button-brand">
            <a href="https://www.yurishop.co/id/category/baby" target="_blank"><img src="images/bingkai klik-8.png" class="img-fluid"
                    alt="Responsive image" width="30%" height="10%">
                <div class="centered">Beli Sekarang</div>
            </a>
        </div>

    </div>
    <!-- End Container -->
@endsection
