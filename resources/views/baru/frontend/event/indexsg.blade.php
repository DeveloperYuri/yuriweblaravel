@extends('baru.frontend.layouts.app')

@section('title', 'Event')

@section('content')
    <div class="container mb-5">
        
        <div class="text-center mt-2 mb-3">
            <h1 style="color: #005EB8;">DAFTAR EVENT</h1>
        </div>
        
        <div class="row mt-2">

            @forelse ($events as $e)
                <div class="col-lg-4 mt-4">

                    <a href="{{ $e->link_instagram }}" target="_blank">
                        <img src="{{ asset('/storage/event/' . $e->image) }}" class="card-img-top img-hover-lift"
                            alt="..." width="450px" height="370px">
                    </a>

                    <div class="d-flex justify-content-center">
                        <a href="{{ $e->link_daftar }}" class="btn btn-primary mt-3 text-center fw-bold"
                            target="_blank">Daftar Disini</a>
                    </div>
                </div>

            @empty
                <div class="alert alert-danger text-center">
                    Tidak Ada Event
                </div>
            @endforelse

        </div>

    </div>

    </div>
    <!-- End Container -->
@endsection
