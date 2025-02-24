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

        <div class="text-center">
            <h1 style="color: #005EB8">@lang('message.DISTRIBUTORKAMI')</h1>
        </div>

        <!-- Banner Homepage-->
        <div class="banner-distributor text-center mt-3" data-aos="fade-up">
            <img src="images/PetaCabang.png" class="img-fluid" alt="..." width="100%" height="100%">
        </div>
        <!-- End Banner Homepage -->

    </div>
    <!-- End Container -->

    </div>
@endsection
