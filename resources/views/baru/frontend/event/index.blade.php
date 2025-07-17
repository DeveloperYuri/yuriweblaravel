@extends('baru.frontend.layouts.app')

@section('title', 'Event')

@section('content')
    <div class="container mb-5">

        <div class="text-center mt-2 mb-3">
            <h1 style="color: #005EB8;">DAFTAR EVENT</h1>
        </div>

        <div class="row">
            @foreach ($events as $e)
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-image-wrapper"
                            style="position: relative; width: 100%; padding-top: 100%; overflow: hidden;">
                            <img src="{{ asset('storage/event/' . $e->image) }}" alt="Event Image"
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="card-body">
                            <p class="card-title mb-4" style="color:#005EB8; font-size:14px">
                                 Periode : {{ $e->periode}}
                            </p>
                             <a href="{{ $e->link }}" target="_blank" class="text-decoration-none text-dark"
                                onmouseover="this.querySelector('h5').style.textDecoration='underline';"
                                onmouseout="this.querySelector('h5').style.textDecoration='none';">
                                <h5 class="card-title" style="font-size: 18px; color:#005EB8;">
                                    {{ $e->description }}
                                </h5>
                            </a>
                            <a href="{{ $e->link_daftar }}" class="btn btn-primary fw-bold mt-4" target="_blank">Daftar
                                Disini</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        {{-- <div class="row mt-2">

            {{-- @forelse ($events as $e)
                <div class="card">
                    <div class="card-image-wrapper"
                        style="position: relative; width: 100%; padding-top: 100%; overflow: hidden;">
                        <img src="{{ asset('storage/event/' . $e->image) }}" alt="e Image"
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $e->title }}</h5>
                        <p class="card-text">{{ $e->description }}</p>
                    </div>
                </div> --}}

        {{-- <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="{{ asset('/storage/event/' . $e->image) }}" class="card-img-top" alt="{{ $e->title }}"
                            style="height: 230px; object-fit: cover;">

                        <div class="mt-3 ">
                            <p class="card-title" style="color:#005EB8;">
                                &nbsp&nbsp Periode : {{ $e->periode}}
                            </p>
                        </div>

                        <div class="card-body">
                            <a href="{{ $e->link }}" target="_blank" class="text-decoration-none text-dark"
                                onmouseover="this.querySelector('h5').style.textDecoration='underline';"
                                onmouseout="this.querySelector('h5').style.textDecoration='none';">
                                <h5 class="card-title" style="font-size: 18px; color:#005EB8;">
                                    {{ $e->description }}
                                </h5>
                            </a>
                        </div>

                        <div class="card-body">
                            <a href="{{ $e->link_daftar }}" class="btn btn-primary fw-bold" target="_blank">Daftar
                                Disini</a>
                        </div>

                    </div>
                </div> --}}
        {{-- @empty
            <div class="alert alert-danger text-center">
                Tidak Ada Event
            </div>
            @endforelse

        </div> --}} 

        </div>

        </div>
        <!-- End Container -->
    @endsection
