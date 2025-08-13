@extends('baru.frontend.layouts.app')

@section('title', 'Kontak')

@section('content')
    <div class="container">
        
        <div class="text-center">
            <h1 style="color: #005EB8">@lang('message.KONTAK')</h1>
        </div>

        <!-- Banner Homepage-->
        <div class="banner-kontak" data-aos="fade-up">
            <img src="images/Banner-kontak.png" class="img-fluid" alt="..." width="100%">
        </div>
        <!-- End Banner Homepage -->

        <div class="hubungikami">
            <h1 style="color: white">@lang('message.HUBUNGIKAMIKONTAK')</h1>
            <h3 style="color: white; font-wight: bold">@lang('message.KAMIHADIR')</h3>
        </div>

        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4822898191064!2d106.9152784740248!3d-6.19992546073466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b4c1e967e9f%3A0x7b0d84b40363198d!2sJoenoes%20Ikhamulya%20Pt.%2C%20Jl.%20Pulogadung%20No.43%2C%20RW.9%2C%20Jatinegara%2C%20Kec.%20Cakung%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013930!5e0!3m2!1sid!2sid!4v1730163508050!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="row mb-3" data-aos="fade-up">
            <h5 class="fw-bold mt-4" style="margin-bottom: 20px; color: #005EB8; font-size: 28px;">
                @lang('message.TERHUBUNGDENGANKAMI')
            </h5>
            <p style="font-size: 16px;">
                @lang('message.APABILAANDA')
            </p>

            <div class="col-md-4">
                
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" style="font-size: 12px">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">@lang('message.NAMA')</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">@lang('message.EMAIL')</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">@lang('message.TELEPON')</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">@lang('message.SUBJEK')</label>
                        <input type="text" name="subject" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">@lang('message.PERTANYAAN')</label>
                        <textarea name="message" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">@lang('message.KIRIM')</button>
                </form>

            </div>
        </div>


    </div>
    <!-- End Container -->
@endsection
