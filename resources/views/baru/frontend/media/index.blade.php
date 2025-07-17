@extends('baru.frontend.layouts.app')

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
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="{{ asset('/storage/media/' . $m->image) }}" class="card-img-top"
                                alt="{{ $m->title }}" style="height: 230px; object-fit: cover;">

                            <div class="card-body">
                                <a href="{{ $m->link }}" target="_blank" class="text-decoration-none text-dark"
                                    onmouseover="this.querySelector('h5').style.textDecoration='underline';"
                                    onmouseout="this.querySelector('h5').style.textDecoration='none';">
                                    <h5 class="card-title fw-bold" style="font-size: 18px; color:#005EB8;">
                                        {{ $m->title }}
                                    </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-danger text-center">
                            Tidak Ada Media.
                        </div>
                    </div>
                @endforelse
            </div>
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
