@extends('baru.frontend.layouts.app')

@section('title', 'Artikel')

@section('content')
    <div class="container">

        <!-- Content1 -->
        <div class="media-content-satu text-center" style="margin-top: 20px" data-aos="fade-up">
            <div class="caption1 mb-5">
                <h1 style="margin-bottom: 20px; color: #005EB8">
                    ARTIKEL
                </h1>
            </div>

            <div class="row mt-2">
                @forelse ($artikelbaru as $artikel)
                    <div class="col-lg-4 mt-4">
                        <div class="card h-100"> {{-- ini penting untuk styling card + full height --}}

                            <img src="{{ asset('/storage/artikelbaru/' . $artikel->image) }}" class="card-img-top"
                                alt="..." style="height: 230px; object-fit: cover;">

                            <div class="card-body">
                                <a href="{{ route('indexartikelbaru.show', $artikel->id) }}" style="text-decoration: none;"
                                        onmouseover="this.style.textDecoration='underline'"
                                        onmouseout="this.style.textDecoration='none'">
                                    <h5 class="card-title" style="font-size: 20px;">{{ $artikel->title }}</h5>
                                </a>
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-danger text-center">
                            Tidak Ada Artikel.
                        </div>
                    </div>
                @endforelse
            </div>
            
            <div class="mt-5 mb-5">
                {!! $artikelbaru->withQueryString()->links('pagination::bootstrap-5') !!}
            </div>
        </div>
        <!-- End Content1-->

    </div>
    <!-- End Container -->

@endsection
