@extends('baru.frontend.layouts.app')

@section('title', 'Artikel')

@section('content')
    <div class="container">

        <div class="article1">
            <h4 class="mb-4 mt-3 text-center" style="color: #005EB8;">{{ $artikelbaru->title }}</h4>
        </div>

        <div class="daysarticle text-center" style="font-size: 12px">
            <p><strong>Yuri Artikel</strong> - {{ $artikelbaru->created_at->isoFormat('dddd, D MMMM Y') }} | <img
                    src="{{ asset('images/eye-view-icon-png.webp') }}" alt="" width="34px"
                    height="34px"><span style="margin-left:-1px">{{ $artikelbaru->viewer }}</span></p>
        </div>

        <!-- Banner Homepage-->

        <div class="text-center" data-aos="fade-up">
            <img src="{{ asset('/storage/artikelbaru/' . $artikelbaru->image) }}" class="img-fluid banner-img"
                alt="...">
        </div>

        {{-- <div class="text-center" data-aos="fade-up">
            <img src="{{ asset('/storage/artikelbaru/' . $artikelbaru->image) }}" class="img-fluid" alt="...">
        </div> --}}
        <!-- End Banner Homepage -->

        <!-- Content1 --> 
        <div class="artikel-content-satu " style="margin-top: 20px; text-align:justify" data-aos="fade-up">

            {!! $artikelbaru->description !!}

        </div>

    </div>
    
@endsection
