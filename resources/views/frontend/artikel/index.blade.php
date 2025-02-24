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
            <div class="caption1 mb-5">
                <h1 style="margin-bottom: 20px; color: #005EB8">
                    ARTIKEL
                </h1>
            </div>

            <!--
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
                    @forelse ($artikelbaru as $artikel)
    <div class="col-md-4">
                            <div class="card h-100">
                                <img src="{{ asset('/storage/artikelbaru/' . $artikel->image) }}"
                                    class="card-img-top" alt="..." width="400px" height="170px">
                                <div class="card-body">
                                    <a href="{{ route('indexartikelbaru.show', $artikel->id) }}">
                                        <h5 class="card-title" style="font-size: 15px;">{{ $artikel->title }}</h5>
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

                <div class="mt-5 mb-5">
                    {!! $artikelbaru->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            -->

            <div class="row">
                <div class="col-lg-8">
                    <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
                        @forelse ($artikelbaru as $artikel)
                            <div class="col-md-4">
                                <div class="card h-100">
                                    <img src="{{ asset('/storage/artikelbaru/' . $artikel->image) }}"
                                        class="card-img-top" alt="..." width="400px" height="170px" style="object-fit:cover">
                                    <div class="card-body">
                                        <a href="{{ route('indexartikelbaru.show', $artikel->id) }}">
                                            <h5 class="card-title" style="font-size: 15px;">{{ $artikel->title }}</h5>
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

                    <div class="mt-5 mb-5">
                        {!! $artikelbaru->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <h5>Category</h5>
                    <ul class="list-group">
                        <li class="list-group-item active" aria-current="true"><a href=""
                                style="color: white; font-weight:bold">Pembersih Rumah Tangga</a></li>
                        <li class="list-group-item"><a href=""
                                style="color: #005EB8; font-weight:bold">Anak-Anak</a></li>
                        <li class="list-group-item"><a href="" style="color: #005EB8; font-weight:bold">Bayi</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- End Content1-->

    </div>
    <!-- End Container -->
@endsection
