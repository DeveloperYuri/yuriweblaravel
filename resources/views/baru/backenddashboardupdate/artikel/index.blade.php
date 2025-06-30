@extends('backenddashboardupdate.layouts.main')

@section('content')
 <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Daftar Artikel Baru</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Daftar Artikel</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <div class="container">
                <div class="card">
                    <div class="card-body">

                        <a href="{{ route('superadminartikelbaru.create') }}" class="btn btn-md btn-primary mb-3"><i
                                class="nav-icon fas fa-pencil-alt "></i>&nbsp Buat Artikel</a>

                        <form method="get">
                            <div class="form-row text">
                                <div class="col-9">
                                    <input id="searchingtitle" type="text" class="form-control" value="{{ Request()->title }}" placeholder="Searching Title" name="title" >
                                </div>
                                <div class="col-2">
                                    <button type="submit" class="btn btn-success mb-2">Search</button>
                                </div>

                            </div>
                        </form>


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
                                @forelse ($getRecord as $key => $artikelbaru)
                                    <tr>
                                        <td class="text-center">{{ $getRecord->firstItem() + $key }}</td>

                                        <td class="text-center">
                                            <img src="{{ asset('/storage/artikelbaru/' . $artikelbaru->image) }}"
                                                class="rounded" style="width: 70px" height="70px">
                                        </td>
                                        <td class="text-center">{{ $artikelbaru->title }}</td>

                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('superadminartikelbaru.destroy', $artikelbaru->id) }}"
                                                method="POST">
                                                <a href="{{ route('superadminartikelbaru.show', $artikelbaru->id) }}"
                                                    class="btn btn-sm btn-success mt-2">SHOW</a>
                                                <a href="{{ route('superadminartikelbaru.edit', $artikelbaru->id) }}"
                                                    class="btn btn-sm btn-warning mt-2">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-sm btn-danger mt-2">HAPUS</button>
                                            </form>
                                        </td>

                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data artikel baru belum tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>

                        <div style="padding: 10px; float: right;">
                            {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
@endsection