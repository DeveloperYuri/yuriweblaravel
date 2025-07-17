@extends('baru.backenddashboardupdate.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Peserta Event</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Daftar Peserta Event</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div class="container">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ route('export') }}" class="btn btn-primary">Export XLSX</a>
                    </div>

                    <form method="get">
                        <div class="form-row text">
                            <div class="col-9">
                                <input type="text" class="form-control" value="{{ Request()->nama }}"
                                    placeholder="Searching Nama" name="nama">
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-success mb-2">Search</button>
                            </div>

                        </div>
                    </form>

                    <table class="table mb-3">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col" class="text-center">Image</th>
                                <th scope="col" class="text-center">Nama</th>
                                <th scope="col" class="text-center">Domisili</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center align-middle">
                            @forelse ($getRecord as $key => $peserta)
                                <tr>
                                    <td class="text-center">{{ $getRecord->firstItem() + $key }}</td>
                                    <td class="text-center">
                                        @if ($peserta->image_upload)
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#imageModal{{ $peserta->id }}">
                                                <img src="{{ asset('storage/registrationevent/' . $peserta->image_upload) }}"
                                                    class="img-thumbnail"
                                                    style="width: 100px; height: 70px; object-fit: cover;">
                                            </a>

                                            <!-- Modal polos -->
                                            <div class="modal fade" id="imageModal{{ $peserta->id }}" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content bg-transparent border-0 shadow-none">
                                                        <div class="modal-body text-center p-0">
                                                            <img src="{{ asset('storage/registrationevent/' . $peserta->image_upload) }}"
                                                                class="img-fluid rounded" style="max-height: 90vh;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </td>

                                    {{-- <td class="text-center">
                                        <img src="{{ asset('storage/registrationevent/' . $peserta->image_upload) }}"
                                            class="rounded" style="width: 100px" height="70px">
                                    </td> --}}

                                    <td class="text-center">{{ $peserta->nama }}</td>
                                    <td class="text-center">{{ $peserta->domisili }}</td>

                                    <td class="text-center">
                                        <a href="{{ route('registrationeventshow', $peserta->id) }}"
                                            class="btn btn-sm btn-warning mt-2">Detail</a>
                                    </td>

                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Tidak Ada Data Products Baru.
                                </div>
                            @endforelse
                        </tbody>
                    </table>

                    @push('scripts')
                        <script>
                            function confirmDelete(form) {
                                Swal.fire({
                                    title: 'Yakin ingin hapus?',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#d33',
                                    cancelButtonColor: '#3085d6',
                                    confirmButtonText: 'Ya, hapus!'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        form.submit();
                                    }
                                });
                            }
                        </script>
                    @endpush

                    <div style="padding: 10px; float: right;">
                        {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
