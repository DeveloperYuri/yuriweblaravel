@extends('frontend.layouts.app')

@section('content')
    <div class="container mb-5">

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


        <div class="text-center mt-2 mb-2">
            <h1 style="color: #005EB8;">@lang('message.PRODUKBARUJUDUL')</h1>
        </div>
        <div class="row mt-2">

            @forelse ($produkbaru as $produks)
                <div class="col-lg-4 mt-4">
                    <img src="{{ asset('/storage/produkbaru/' . $produks->image) }}" class="card-img-top" alt="..."
                        width="450px" height="350px" style="border-radius: 4%;">
                </div>

            @empty
                <div class="alert alert-danger">
                    Data Products belum Tersedia.
                </div>
            @endforelse

        </div>

    </div>

    </div>
    <!-- End Container -->
@endsection
