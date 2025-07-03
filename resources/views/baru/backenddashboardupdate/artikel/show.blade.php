@extends('baru.backenddashboardupdate.layouts.main')

@section('content')
 <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Preview Artikel</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Preview Artikel</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <div class="container">
                <div class="card">
                    <div class="card-body">

                        <div class="article1">
                            <h4 class="mb-4 mt-5 text-center" style="color: #005EB8;">{{ $artikelbaru->title }}</h4>
                        </div>

                        <div class="daysarticle text-center" style="font-size: 12px">
                            <p><strong>Yuri Artikel</strong> -
                                {{ $artikelbaru->created_at->isoFormat('dddd, D MMMM Y') }}</p>
                        </div>

                        <!-- Banner Homepage-->
                        <div class="banner-article1 text-center" data-aos="fade-up">
                            <img src="{{ asset('/storage/artikelbaru/' . $artikelbaru->image) }}" class="img-fluid"
                                alt="...">
                        </div>
                        <!-- End Banner Homepage -->

                        <!-- Content1 -->
                        <div class="artikel-content-satu" style="margin-top: 20px; text-align:justify"
                            data-aos="fade-up">

                            {!! $artikelbaru->description !!}

                        </div>

                        <div>
                            <a href="{{ route('artikeleditupdate', $artikelbaru->id) }}"
                                class="btn btn-sm btn-warning">Edit Artikel</a>
                            <a href="{{ route('artikelindexupdate') }}"
                                class="btn btn-sm btn-success">Kembali Ke Daftar Artikel</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
@endsection