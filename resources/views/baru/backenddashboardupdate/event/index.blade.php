@extends('baru.backenddashboardupdate.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Event</h1>
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

                    <a href="{{ route('createeventupdate') }}" class="btn btn-md btn-primary mb-3"><i
                            class="nav-icon fas fa-pencil-alt "></i>&nbsp Upload Event</a>

                    <form method="get">
                        <div class="form-row text">
                            <div class="col-9">
                                <input type="text" class="form-control" value="{{ Request()->description }}"
                                    placeholder="Searching Description" name="description">
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
                                <th scope="col" class="text-center">Description</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($getRecord as $key => $event)
                                <tr>
                                    <td class="text-center">{{ $getRecord->firstItem() + $key }}</td>
                                    <td class="text-center">
                                        <img src="{{ asset('/storage/event/' . $event->image) }}" class="rounded"
                                            style="width: 100px" height="70px">
                                    </td>

                                    <td class="text-center">{{ $event->description }}</td>

                                    <td class="text-center">
                                        <form action="{{ route('deleteeventupdate', $event->id) }}" method="POST">
                                            <a href="{{ route('editeventupdate', $event->id) }}"
                                                class="btn btn-sm btn-warning mt-2">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-sm btn-danger mt-2"
                                                onclick="confirmDelete(this.form)">
                                                HAPUS
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            @empty
                                <div class="alert alert-danger text-center">
                                    Tidak Ada Event
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
