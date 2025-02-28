@extends('frontend.layouts.app')

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

                        @foreach ($getCategory as $category)
                            
                        @endforeach
                        <li class="list-group-item active" aria-current="true"><a href=""
                                style="color: white; font-weight:bold">{{ $category->name}}</a></li>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- End Content1-->

    </div>
    <!-- End Container -->
@endsection
