@extends('baru.backenddashboardupdate.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Artikel</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Artikel</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div class="container">
            <div class="card">
                <div class="card-body">

                    <a href="{{ route('artikelindexupdate') }}" class="btn btn-success mb-3"><i
                            class="fas fa-undo"></i>&nbsp Kembali </a>


                    <form action="{{ route('artikeleditpostupdate', $artikelbaru->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">IMAGE</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                                value="{{ old('title', $artikelbaru->image) }}">

                            <!-- error message untuk image -->
                            @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">TITLE</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                value="{{ old('title', $artikelbaru->title) }}" placeholder="Masukkan Judul Artikel">

                            <!-- error message untuk title -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Penulis</label>
                            <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis"
                                value="{{ old('penulis', $artikelbaru->penulis) }}" placeholder="Masukkan Nama Penulis">

                            <!-- error message untuk penulis -->
                            @error('penulis')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">DESCRIPTION</label>
                            <textarea id="editor" class="form-control @error('description') is-invalid @enderror" name="description"
                                rows="5" placeholder="Masukkan Description Artikel">{{ old('description', $artikelbaru->description) }}</textarea>

                            <!-- error message untuk description -->
                            @error('description')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary me-3"><i class="fas fa-save"></i>&nbsp
                            Update</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
