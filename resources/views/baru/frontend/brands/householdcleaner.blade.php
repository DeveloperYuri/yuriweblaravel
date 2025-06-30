@extends('baru.frontend.layouts.app')

@section('title', 'Brands')

@section('content')
    <!-- Container -->
    <div class="container">

        <h3 class="text-center fw-bold mt-3 mb-3" style="color: #005EB8">
            Household Cleaner
        </h3>

        <!-- Banner Homepage-->
        <div class="banner-tentang-kami" data-aos="fade-up">
            <img src="images/householdcleaner.webp" class="img-fluid" alt="..." width="100%">
        </div>
        <!-- End Banner Homepage -->

        <!-- Content -->
        <div class="content-household">
            <div class="d-flex p-3 justify-content-center">
                <div class="p-2"><a href="{{ route('aganolupdate') }}"><img src="images/household1.png"
                            alt="" /></a></div>
                <div class="p-2"><a href="{{ route('babysoftupdate') }}"><img src="images/household2.png"
                            alt="" /></a></div>
                <div class="p-2"><a href="{{ route('biosoftdetergenupdate') }}"><img src="images/household3.png"
                            alt="" /></a></div>
            </div>

            <div class="d-flex p-3 justify-content-center">
                <div class="p-2"><a href="{{ route('biosoftupdate') }}"><img src="images/household4.png"
                            alt="" /></a></div>
                <div class="p-2"><a href="{{ route('bathroomcleanerupdate') }}"><img src="images/household5.png"
                            alt="" /></a></div>
                <div class="p-2"><a href="{{ route('yuribleachupdate') }}"><img src="images/household6.png"
                            alt="" /></a></div>
            </div>

            <div class="d-flex p-3 justify-content-center">
                <div class="p-2"><a href="{{ route('yurisolupdate') }}"><img src="images/household15.png"
                            alt="" /></a></div>
                <div class="p-2"><a href="{{ route('glasscleanerupdate') }}"><img src="images/household8.png"
                            alt="" /></a></div>
                <div class="p-2"><a href="{{ route('handgelupdate') }}"><img src="images/household9.png"
                            alt="" /></a></div>
            </div>

            <div class="d-flex p-3 justify-content-center">
                <div class="p-2"><a href="{{ route('handsoapupdate') }}"><img src="images/household10.png"
                            alt="" /></a></div>
                <div class="p-2"><a href="{{ route('ligentupdate') }}"><img src="images/brandligentbio.webp"
                            alt="" /></a></div>
                <div class="p-2"><a href="{{ route('ligentbabyupdate') }}"><img src="images/ligentbaby.webp"
                            alt="" /></a></div>
            </div>

            <div class="d-flex p-3 justify-content-center">
                <div class="p-2"><a href="{{ route('porstexupdate') }}"><img src="images/household14.png"
                            alt="" /></a></div>
                <div class="p-2"><a href="{{ route('porstexklosetupdate') }}"><img src="images/household22.png"
                            alt="" /></a></div>
                <div class="p-2"><a href="{{ route('porstexregulerupdate') }}"><img src="images/household23.png"
                            alt="" /></a></div>
            </div>

            <div class="d-flex p-3 justify-content-center">
                <div class="p-2"><a href="{{ route('tafupdate') }}"><img src="images/household16.png"
                            alt="" /></a></div>
                <div class="p-2"><a href="{{ route('yurimaticupdate') }}"><img src="images/household17.png"
                            alt="" /></a></div>
                <div class="p-2"><a href="{{ route('trilupdate') }}"><img src="images/household18.png"
                            alt="" /></a></div>
            </div>

            <div class="d-flex p-3 justify-content-center">
                <div class="p-2"><a href="{{ route('laundrydisinfektantupdate') }}"><img
                            src="images/household19.png" alt="" /></a></div>
                <div class="p-2"><a href="{{ route('disinfektantsprayupdate') }}"><img src="images/household20.png"
                            alt="" /></a></div>
                <div class="p-2"><a href="{{ route('handmoisturizerupdate') }}"><img src="images/household21.png"
                            alt="" /></a></div>
            </div>

            <div class="d-flex p-3 justify-content-center">
                <div id="yurisoftbrands" class="p-2"><a href="{{ route('yurisoftupdate') }}"><img
                            src="images/household13.png" alt="" /></a></div>
                <div class="p-2"><a href="{{ route('lysorinupdate') }}"><img src="images/household12.png"
                            alt="" /></a></div>
                <div class="p-2"><a href="#"></a></div>

            </div>
        </div>
        <!-- End Content-->

    </div>
    <!-- End Container -->
@endsection