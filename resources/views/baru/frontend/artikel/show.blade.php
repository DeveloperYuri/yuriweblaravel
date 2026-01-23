@extends('baru.frontend.layouts.app')

@section('title', $artikelbaru->title)

@section('content')
<div class="container">

    <!-- Judul Artikel -->
    <div class="article1">
        <h4 class="mb-4 mt-3 text-center" style="color: #005EB8;">
            {{ $artikelbaru->title }}
        </h4>
    </div>

    <!-- Info Penulis + Viewer -->
    <div class="daysarticle text-center" style="font-size: 12px">
        <p>
            <strong>{{ $artikelbaru->penulis ?? '-' }}</strong> - 
            {{ $artikelbaru->created_at->isoFormat('dddd, D MMMM Y') }} | 
            <img src="{{ asset('images/eye-view-icon-png.webp') }}" alt="" width="40px" height="34px">
            <span style="margin-left:-1px">{{ $artikelbaru->viewer }}</span>
        </p>
    </div>

    <!-- Banner Artikel -->
    <div class="text-center" data-aos="fade-up">
        <img src="{{ asset('/storage/artikelbaru/' . $artikelbaru->image) }}"
             alt="{{ $artikelbaru->title }}"
             class="img-fluid banner-img"
             style="width: 800px; height: 450px; object-fit: cover; border-radius: 8px;">
    </div>

    <!-- Konten Artikel -->
    <div class="artikel-content-satu" style="margin-top: 20px; text-align:justify" data-aos="fade-up">
        {!! $artikelbaru->description !!}
    </div>

</div>
@endsection
