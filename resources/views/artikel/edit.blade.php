@extends('layouts.masterdashboard')

@section('content')
    <div class="container">

        <h1 class="text-center mt-4 mb-4" style="color: #005EB8">Edit Artikel</h1>

        <a href="{{ route('artikel.index') }}" class="btn btn-success mb-3"><- Kembali </a>

                <form action="{{ route('artikel.update', $artikels->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label class="font-weight-bold">IMAGE</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                            value="{{ old('title', $artikels->image) }}">

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
                            value="{{ old('title', $artikels->title) }}" placeholder="Masukkan Judul Artikel">

                        <!-- error message untuk title -->
                        @error('title')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label class="font-weight-bold">DESCRIPTION</label>
                        <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description"
                            rows="5" placeholder="Masukkan Description Artikel">{{ old('description', $artikels->description) }}</textarea>

                        <!-- error message untuk description -->
                        @error('description')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-md btn-primary me-3">Update</button>

                </form>
    </div>
@endsection