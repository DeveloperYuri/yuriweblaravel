@extends('baru.frontend.layouts.app')

@section('title', 'Event')

@section('content')
    <div class="container mb-5">

        <div class="text-center mt-2 mb-3">
            <h1 style="color: #005EB8;">DAFTAR EVENT</h1>
        </div>

        <div class="row">
            @forelse  ($events as $e)
                <div class="col-lg-4 mb-4" style="display: flex;">
                    <div class="card" style="flex:1; display:flex; flex-direction: column;">
                        <div class="card-image-wrapper mt-2"
                            style="position: relative; width: 100%; padding-top: 100%; overflow: hidden;">
                            <img src="{{ asset('storage/event/' . $e->image) }}" alt="Event Image"
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: contain;">
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between" style="flex-grow:1;">
                            <div>
                                <p class="card-title mb-4 mt-2" style="color:#005EB8; font-size:16px">Periode :
                                    {{ $e->periode }}</p>
                                <a href="{{ $e->link_instagram }}" target="_blank" class="text-decoration-none text-dark"
                                    onmouseover="this.querySelector('h5').style.textDecoration='underline';"
                                    onmouseout="this.querySelector('h5').style.textDecoration='none';">
                                    <h5 class="card-title" style="font-size: 18px; color:#005EB8;">
                                        {{ $e->description }}
                                    </h5>
                                </a>
                            </div>
                            <a href="{{ $e->link_daftar }}" class="btn btn-primary fw-bold mt-4" target="_blank">Daftar
                                Disini</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-danger text-center">
                    Tidak Ada Event
                </div>
            @endforelse
        </div>

    </div>
    <!-- End Container -->
@endsection
