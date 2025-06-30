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

            <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
                @forelse ($artikelbaru as $artikel)
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="{{ asset('/storage/artikelbaru/' . $artikel->image) }}" class="card-img-top"
                                alt="..." width="400px" height="230px" >
                            <div class="card-body">
                                <a href="{{ route('indexartikelbaru.show', $artikel->id)}}">
                                    <h5 class="card-title" style="font-size: 20px;">{{ $artikel->title }}</h5>
                                </a>
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="alert alert-danger">
                        Data artikel belum tersedia.
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
