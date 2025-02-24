@extends('frontend.layouts.app')

@section('content')
    <div class="container">

        <div class="article1">
            <h4 class="mb-4 mt-3 text-center" style="color: #005EB8;">{{ $artikels->title }}</h4>
        </div>

        <div class="tglshowproduk">
            <p class="fw-bold">Yuri-Artikel</p>
            <p style="margin-top: -17px">{{ $artikels->created_at->isoFormat('dddd, D MMMM Y') }}</p>
        </div>

        <!-- Banner Homepage-->
        <div class="banner-article1 text-center" data-aos="fade-up">
            <img src="{{ asset('/storage/artikels/' . $artikels->image) }}" class="img-fluid" alt="...">
        </div>
        <!-- End Banner Homepage -->

        <!-- Content1 -->
        <div class="artikel-content-satu" style="margin-top: 20px; text-align:justify" data-aos="fade-up">

            {!! $artikels->description !!}

        </div>

    </div>
@endsection
