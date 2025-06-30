@extends('baru.frontend.layouts.app')

@section('title', 'FAQ')

@section('content')
    <!-- Container -->
    <div class="container">

        <!-- Content1 -->
        <div class="content-satu text-center" style="margin-top: 20px" data-aos="fade-up">
            <div class="caption1">
                <h1 style="margin-bottom: 20px; color: #005EB8">
                    @lang('message.PERTANYAANUMUM')
                </h1>
                <h5 style="margin-bottom: 20px; color: #005EB8">@lang('message.PERTANYAANYANGSERINGDICARI')</h5>
            </div>

            <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne" style="color: #748087">
                            @lang('message.BAGAIMANACARA')
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>@lang('message.ANDABISAMELAKUKAN')</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo" style="color: #748087">
                            @lang('message.KAPANWAKTU')
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>@lang('message.JAMOPERASIONAL')</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThree" style="color: #748087">
                            @lang('message.METODEPEMBAYARAN')
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>@lang('message.KAMIMENERIMA')</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFour" style="color: #748087">
                            @lang('message.APAKAHSAYADAPAT')
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>@lang('message.KAMIMEMBUTUHKAN')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFive" style="color: #748087">
                            @lang('message.KAPANESTIMASI')
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>@lang('message.PESANANDENGANPENGIRIMAN')</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseSix" style="color: #748087">
                            @lang('message.SIAPAYANGMENGIRIM')
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingSix">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>@lang('message.KAMIBEKERJASAMA')</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseSeven" style="color: #748087">
                            @lang('message.BAGAIMANAJIKASAYA')
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingSeven">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>@lang('message.ANDADAPATMENGHUBUNGI')</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseEight" style="color: #748087">
                            @lang('message.BAGAIMANASAYAMENGETAHUI')
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingEight">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>@lang('message.KAMIAKANMENGIRIMKAN')</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseNine" style="color: #748087">
                            @lang('message.BAGAIMANACARAUNTUK')
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingNine">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>@lang('message.ANDADAPATMELACAK')</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTen">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTen" style="color: #748087">
                            @lang('message.APAKAHPENGIRIMAN')
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTen">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>@lang('message.SAATINIKAMI')</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingEleven">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseEleven" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseEleven" style="color: #748087">
                            @lang('message.APAKAHHARGA')
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseEleven" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingEleven">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>@lang('message.HARGAYANGTERTERA')</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwelve">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwelve" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwelve" style="color: #748087">
                            @lang('message.APAKAHYURISHOP')
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwelve" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTwelve">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>@lang('message.PASTIKANANDA')</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThirteen">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThirteen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThirteen" style="color: #748087">
                            @lang('message.BERAPABIAYA')
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThirteen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThirteen">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>@lang('message.BIAYAPENGIRIMAN')</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFourteen">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFourteen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFourteen" style="color: #748087">
                            @lang('message.BAGAIMANACARA')
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFourteen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingFourteen">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>@lang('message.JIKAANDAINGIN')</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFiveteen">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFiveteen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFiveteen" style="color: #748087">
                            @lang('message.BAGAIMANAJIKA')
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFiveteen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingFiveteen">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>@lang('message.ANDADAPATMENGHUBUNGI')</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSixteen">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseSixteen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseSixteen" style="color: #748087">
                            @lang('message.BAGAIMANACARA')
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSixteen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingSixteen">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>@lang('message.HUBUNGIKAMI')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSeventeen">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseSeventeen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseSeventeen" style="color: #748087">
                            @lang('message.KETENTUANPRODUK')
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSeventeen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingSeventeen">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>@lang('message.PRODUKCACAT')
                                <br>@lang('message.PRODUKCACAT2')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingEightteen">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseEightteen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseEightteen" style="color: #748087">
                            @lang('message.BATASRETUR')
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseEightteen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingEightteen">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>@lang('message.BATASWAKTUPENGAJUAN')</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="button-brand">
                <a href={{ route('indexupdate') }}><img src="images/bingkai klik-8.png" class="img-fluid"
                        alt="Responsive image" width="30%" height="10%">
                    <div class="centered"><strong>@lang('message.BACASELENGKAPNYA')</strong></div>
                </a>
            </div>
        </div>
        <!-- End Content1-->

    </div>
    <!-- End Container -->
@endsection
