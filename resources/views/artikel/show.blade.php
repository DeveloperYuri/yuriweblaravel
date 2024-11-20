@extends('layouts.masterdashboard')

@section('content')
    <div class="container">

        <div class="article1">
            <h4 class="mb-4 mt-5 text-center" style="color: #005EB8;">{{ $artikels->title }}</h4>
        </div>

        <!-- Banner Homepage-->
        <div class="banner-article1 text-center" data-aos="fade-up">
            <img src="{{ asset('/storage/artikels/' . $artikels->image) }}" class="img-fluid" alt="...">
        </div>
        <!-- End Banner Homepage -->

        <!-- Content1 -->
        <div class="artikel-content-satu" style="margin-top: 20px" data-aos="fade-up">

            {!! $artikels->description !!}

        </div>

        <div>
            <a href="{{ route('artikel.edit', $artikels->id) }}" class="btn btn-sm btn-warning">Edit Artikel</a>
            <a href="{{ route('artikel.store') }}" class="btn btn-sm btn-success">Kembali Ke Dashboard</a>
        </div>


    </div>
@endsection
