@extends('baru.frontend.layouts.app')

@section('title', 'Tentang Kami')

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
                @lang('message.YURIBERKOMITMENT')
                <br />@lang('message.YURIBERKOMITMENT2')
            </h4>

            <div class="tentangkamudesc" style="margin-top: 20px;">
                <p style="text-align: justify">
                    @lang('message.PTJOENOESIKAMULYAMERUPAKAN')
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
                    @lang('message.KOMITMENTKAMI')
                </h1>
            </div>

            <div class="d-flex p-3 justify-content-center">
                <div class="p-2"><img src="images/kualitas.png" alt="" /></div>
                <div class="p-2"><img src="images/nilai.png" alt="" /></div>
                <div class="p-2"><img src="images/keberlanjutan.png" alt="" /></div>
            </div>

            <div class="berikutadalah" style="margin-top: 20px;">
                <p style="text-align: justify">
                    @lang('message.BERIKUTADALAH')
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
                    @lang('message.VISIMISI')
                </h1>
            </div>

            <div class="visi">
                <div class="d-flex p-3 justify-content-center">
                    <div class="p-2"><img src="images/visi.png" alt="" /></div>
                    <div class="p-2">
                        <h4 style="text-align: left; color: #005EB8; font-weight: bold;">@lang('message.VISI')</h4>
                        <p style="text-align: justify; word-break: break-all;">@lang('message.TEKAD')</p>

                    </div>
                </div>
            </div>

            <div class="misi">
                <div class="d-flex p-3 justify-content-center">
                    <div class="p-2"><img src="images/misi.png" alt="" /></div>
                    <div class="p-2">
                        <h4 style="text-align: left; color: #005EB8; font-weight: bold;">@lang('message.MISI')</h4>
                        <p style="text-align: justify; word-break: break-all;">@lang('message.INIADALAH')
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
            <img src="images/frame-8.png" alt="" width="100%">
            <div class="textblock">
                <h4 class="tetangkamiptjoenoes mb-3" style="color: white">PT. JOENOES IKAMULYA</h4>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <p class="textblock1" style="color: white; text-align:justify">
                            @lang('message.KAMISANGATPERCAYA')
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12">
                        <p class="textblock2" style="color: rgb(245, 7, 7); text-align:justify">
                            @lang('message.DENGANBERBAGAIPERUBAHAN')
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- End Container -->
@endsection
