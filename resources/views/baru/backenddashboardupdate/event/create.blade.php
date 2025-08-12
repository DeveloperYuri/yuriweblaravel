@extends('baru.backenddashboardupdate.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Upload Event Baru</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Event</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <div class="container">
                <div class="card">
                    <div class="card-body">

                        <a href="{{ route('eventdashboardupdate') }}" class="btn btn-success mb-3"><i
                                class="fas fa-undo"></i>&nbsp Kembali </a>

                        <form action="{{ route('createeventpostupdate') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">IMAGE</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    name="image">

                                <!-- error message untuk image -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Periode</label>
                                <input type="text" class="form-control @error('periode') is-invalid @enderror"
                                    name="periode" value="{{ old('periode') }}" placeholder="Masukkan Periode Event">

                                <!-- error message untuk title -->
                                @error('periode')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">DESCRIPTION</label>
                                <input type="text" class="form-control @error('description') is-invalid @enderror"
                                    name="description" value="{{ old('description') }}" placeholder="Masukkan Description Event">

                                <!-- error message untuk title -->
                                @error('description')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Link Instagram</label>
                                <input type="text" class="form-control @error('link_instagram') is-invalid @enderror"
                                    name="link_instagram" value="{{ old('link_instagram') }}" placeholder="Masukkan Link Instagram Event">

                                <!-- error message untuk title -->
                                @error('link_instagram')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Link Daftar Event</label>
                                <input type="text" class="form-control @error('link_daftar') is-invalid @enderror"
                                    name="link_daftar" value="{{ old('link_daftar') }}" placeholder="Masukkan Daftar Event">

                                <!-- error message untuk title -->
                                @error('link_daftar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary me-3"><i
                                    class="fas fa-save"></i>&nbsp Save</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
@endsection