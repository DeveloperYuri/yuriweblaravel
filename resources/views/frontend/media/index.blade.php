@extends('frontend.layouts.app')

@section('title', 'Media')

@section('content')
    <div class="container">
        
        <!-- Content1 -->
        <div class="media-content-satu text-center" style="margin-top: 20px" data-aos="fade-up">
            <div class="caption1 mb-4">
                <h1 style="margin-bottom: 20px; color: #005EB8">
                    Media
                </h1>
            </div>

            <div class="row mt-2">

                @forelse ($media as $m)
                    <div class="col-lg-4 mt-4">

                        <img src="{{ asset('/storage/artikels/' . $m->image) }}" class="card-img-top" alt="..."
                            width="400px" height="230px">

                        <div class="card-body">
                            <a href="{{ $m->link }}" target="_blank">
                                <p class="card-title" style="font-size: 20px; font-weight:bold;">{{ $m->title }}
                                </p>
                            </a>
                        </div>

                        {{-- <a href="{{ $e->link_instagram }}" target="_blank">
                            <img src="{{ asset('/storage/event/' . $e->image) }}" class="card-img-top img-hover-lift"
                                alt="..." width="450px" height="370px">
                        </a> --}}

                        {{-- <div class="d-flex justify-content-center">
                            <a href="{{ $e->link_daftar }}" class="btn btn-primary mt-3 text-center fw-bold"
                                target="_blank">Daftar Disini</a>
                        </div> --}}
                    </div>

                @empty
                    <div class="alert alert-danger text-center">
                        Data Media Tidak Ada.
                    </div>
                @endforelse

            </div>

            {{-- <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
                @forelse ($media as $m)
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="{{ asset('/storage/artikels/' . $m->image) }}" class="card-img-top" alt="..."
                                width="400px" height="230px">
                            <div class="card-body">
                                <a href="{{ $m->link }}" target="_blank">
                                    <p class="card-title" style="font-size: 20px; font-weight:bold;">{{ $m->title }}
                                    </p>
                                </a>
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="alert alert-danger text-center">
                        Data Media Tidak Ada.
                    </div>
                @endforelse

            </div> --}}

        </div>

        <div class="mt-5">
            {!! $media->withQueryString()->links('pagination::bootstrap-5') !!}
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
