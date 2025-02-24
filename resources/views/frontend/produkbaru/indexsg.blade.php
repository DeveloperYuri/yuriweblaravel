@extends('frontend.layouts.app')

@section('content')
    <div class="container mb-5">
        
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
