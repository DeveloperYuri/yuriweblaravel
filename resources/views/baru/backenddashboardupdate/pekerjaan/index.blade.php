@extends('baru.backenddashboardupdate.layouts.main')

@section('content')
    <div class="content-wrapper">

        {{-- Header halaman --}}
        <section class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Pekerjaan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Pekerjaan
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="card">
                <div class="card-body">

                    {{-- Notifikasi berhasil --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    {{-- Notifikasi error --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Terjadi kesalahan:</strong>
                            <ul class="mb-0 mt-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Tombol tambah --}}
                    <a href="{{ route('pekerjaancreate') }}"
                        class="btn btn-md btn-primary mb-3">
                        <i class="nav-icon fas fa-plus"></i>
                        Tambah Pekerjaan
                    </a>

                    {{-- Pencarian dan filter --}}
                    <form method="GET" action="{{ route('pekerjaanindex') }}"
                        class="mb-3">
                        <div class="form-row">

                            <div class="col-md-5 mb-2">
                                <input type="text" name="search"
                                    class="form-control"
                                    value="{{ request('search') }}"
                                    placeholder="Cari posisi, departemen, atau lokasi">
                            </div>

                            <div class="col-md-3 mb-2">
                                <select name="status" class="form-control">
                                    <option value="">Semua Status</option>
                                    <option value="Draft"
                                        {{ request('status') == 'Draft' ? 'selected' : '' }}>
                                        Draft
                                    </option>
                                    <option value="Active"
                                        {{ request('status') == 'Active' ? 'selected' : '' }}>
                                        Active
                                    </option>
                                    <option value="Closed"
                                        {{ request('status') == 'Closed' ? 'selected' : '' }}>
                                        Closed
                                    </option>
                                </select>
                            </div>

                            <div class="col-md-2 mb-2">
                                <button type="submit"
                                    class="btn btn-success btn-block">
                                    <i class="fas fa-search"></i> Cari
                                </button>
                            </div>

                            <div class="col-md-2 mb-2">
                                <a href="{{ route('pekerjaanindex') }}"
                                    class="btn btn-secondary btn-block">
                                    Reset
                                </a>
                            </div>

                        </div>
                    </form>

                    {{-- Tabel pekerjaan --}}
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-3">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 55px;">No</th>
                                    <th>Posisi</th>
                                    <th>Departemen</th>
                                    <th class="text-center">Tipe Kerja</th>
                                    <th class="text-center">Sistem Kerja</th>
                                    <th class="text-center">Lokasi</th>
                                    <th class="text-center">Deadline</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center" style="min-width: 150px;">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($pekerjaan as $key => $job)
                                    <tr>
                                        <td class="text-center">
                                            {{ $pekerjaan->firstItem() + $key }}
                                        </td>

                                        <td>
                                            <strong>{{ $job->title }}</strong>
                                            <br>
                                            <small class="text-muted">
                                                {{ $job->job_level }}
                                            </small>
                                        </td>

                                        <td>{{ $job->department }}</td>

                                        <td class="text-center">
                                            {{ $job->employment_type }}
                                        </td>

                                        <td class="text-center">
                                            {{ $job->work_location_type }}
                                        </td>

                                        <td class="text-center">
                                            {{ $job->location ?: '-' }}
                                        </td>

                                        <td class="text-center">
                                            {{ $job->deadline_at
                                                ? \Carbon\Carbon::parse($job->deadline_at)->format('d/m/Y')
                                                : '-' }}
                                        </td>

                                        <td class="text-center">
                                            @if ($job->status === 'Active')
                                                <span class="badge badge-success">
                                                    Active
                                                </span>
                                            @elseif ($job->status === 'Draft')
                                                <span class="badge badge-secondary">
                                                    Draft
                                                </span>
                                            @else
                                                <span class="badge badge-danger">
                                                    Closed
                                                </span>
                                            @endif
                                        </td>

                                        <td class="text-center">
                                            <a href="{{ route('pekerjaanedit', $job->id) }}"
                                                class="btn btn-sm btn-warning mb-1">
                                                <i class="fas fa-edit"></i>
                                                Edit
                                            </a>

                                            <form
                                                action="{{ route('pekerjaandelete', $job->id) }}"
                                                method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')

                                                <button type="button"
                                                    class="btn btn-sm btn-danger mb-1"
                                                    onclick="confirmDelete(this.form)">
                                                    <i class="fas fa-trash"></i>
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9"
                                            class="text-center text-muted py-4">
                                            <i class="fas fa-briefcase fa-2x mb-2"></i>
                                            <p class="mb-0">
                                                Belum ada data pekerjaan.
                                            </p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- Konfirmasi hapus --}}
                    @push('scripts')
                        <script>
                            function confirmDelete(form) {
                                Swal.fire({
                                    title: 'Yakin ingin menghapus?',
                                    text: 'Data pekerjaan yang dihapus tidak dapat dikembalikan.',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#d33',
                                    cancelButtonColor: '#3085d6',
                                    confirmButtonText: 'Ya, hapus!',
                                    cancelButtonText: 'Batal'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        form.submit();
                                    }
                                });
                            }
                        </script>
                    @endpush

                    {{-- Pagination --}}
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="text-muted mb-2">
                            @if ($pekerjaan->total() > 0)
                                Menampilkan {{ $pekerjaan->firstItem() }}
                                sampai {{ $pekerjaan->lastItem() }}
                                dari {{ $pekerjaan->total() }} pekerjaan
                            @else
                                Tidak ada data pekerjaan
                            @endif
                        </div>

                        <div class="mb-2">
                            {{ $pekerjaan->appends(request()->query())->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
