@extends('layouts.masterdashboard')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4 text-center" style="color: #005EB8">Daftar Media Artikel</h1>

        <a href="{{ route('artikel.create') }}" class="btn btn-md btn-primary mb-3">Buat Artikel</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Image</th>
                    <th scope="col" class="text-center">Title</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($artikels as $key => $artikel)
                    <tr>
                        <td class="text-center">{{ $artikels->firstItem() + $key }}</td>
                        <td class="text-center">
                            <img src="{{ asset('/storage/artikels/' . $artikel->image) }}" class="rounded"
                                style="width: 100px" height="70px">
                        </td>
                        <td class="text-center">{{ $artikel->title }}</td>

                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="{{ route('artikel.destroy', $artikel->id) }}" method="POST">
                                <a href="{{ route('artikel.show', $artikel->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                <a href="{{ route('artikel.edit', $artikel->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                        </td>

                    </tr>
                @empty
                    <div class="alert alert-danger">
                        Data Products belum Tersedia.
                    </div>
                @endforelse
            </tbody>
        </table>

        {!! $artikels->withQueryString()->links('pagination::bootstrap-5') !!}

    </div>
@endsection
