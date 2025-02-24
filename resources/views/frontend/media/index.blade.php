@extends('frontend.layouts.app')

@section('content')
    <div class="container">

        <!-- Start Button Language -->
        <div class="language mb-2" style="display:flex; justify-content:flex-end;">
            <div class="btn-group">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false" style="padding-top: 1px">
                    <span style="font-size: 11px;">Language</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="locale/id">Indonesia</a></li>
                    <li><a class="dropdown-item" href="locale/en">English</a></li>
                </ul>
            </div>
        </div>
        <!-- End Button Language -->

        <!-- Content1 -->
        <div class="media-content-satu text-center" style="margin-top: 20px" data-aos="fade-up">
            <div class="caption1 mb-4">
                <h1 style="margin-bottom: 20px; color: #005EB8">
                    Media
                </h1>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
                @forelse ($artikels as $artikel)
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="{{ asset('/storage/artikels/' . $artikel->image) }}" class="card-img-top"
                                alt="..." width="400px" height="230px">
                            <div class="card-body">
                                <a href="{{ $artikel->link }}" target="_blank">
                                    <h5 class="card-title" style="font-size: 20px;">{{ $artikel->title }}</h5>
                                </a>
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="alert alert-danger">
                        Data Products belum Tersedia.
                    </div>
                @endforelse

            </div>
        </div>

        <div class="mt-5">
            {!! $artikels->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
        <!-- End Content1-->

        <div class="row mt-3" data-aos="fade-up">
            <div class="col-12">
                <img src="images/garis.png" alt="" width="100%" />
            </div>
        </div>

        <!-- Content2 -->
        <div class="media-content-dua text-center" style="margin-top: 20px" data-aos="fade-up">
            <div class="caption1 mb-4">
                <h1 style="margin-bottom: 20px; color: #005EB8">
                    @lang('message.TVKOMERSIL')
                </h1>
            </div>

            <div class="text-center mb-5" style="margin-bottom: 550px">
                <video width="80%" height="80%" controls>
                    <source src="images/videoplayback.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <!-- End Content2-->

    </div>
    <!-- End Container -->
@endsection
