@extends('baru.backenddashboardupdate.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Lamaran Pekerjaan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Lamaran Pekerjaan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            {{-- Ringkasan lamaran --}}
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $totalLamaran ?? 0 }}</h3>
                            <p>Total Lamaran</p>
                        </div>
                        <div class="icon"><i class="fas fa-file-alt"></i></div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $lamaranBaru ?? 0 }}</h3>
                            <p>Lamaran Baru</p>
                        </div>
                        <div class="icon"><i class="fas fa-inbox"></i></div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>{{ $dalamSeleksi ?? 0 }}</h3>
                            <p>Dalam Seleksi</p>
                        </div>
                        <div class="icon"><i class="fas fa-user-check"></i></div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $diterima ?? 0 }}</h3>
                            <p>Diterima</p>
                        </div>
                        <div class="icon"><i class="fas fa-check-circle"></i></div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }}<button
                                type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button></div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show">{{ session('error') }}<button
                                type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button></div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger"><strong>Terjadi kesalahan:</strong>
                            <ul class="mb-0 mt-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Pencarian dan filter --}}
                    <form method="GET" action="{{ url()->current() }}" class="mb-3">
                        <div class="form-row">
                            <div class="col-md-4 mb-2"><input type="text" name="search" class="form-control"
                                    value="{{ request('search') }}" placeholder="Cari nama atau email pelamar"></div>
                            <div class="col-md-3 mb-2"><select name="status" class="form-control">
                                    <option value="">Semua Status</option>
                                    @foreach (['Submitted' => 'Lamaran Baru', 'Screening' => 'Screening', 'Interview' => 'Interview', 'Accepted' => 'Diterima', 'Rejected' => 'Ditolak'] as $value => $label)
                                        <option value="{{ $value }}"
                                            {{ request('status') === $value ? 'selected' : '' }}>{{ $label }}
                                        </option>
                                    @endforeach
                                </select></div>
                            <div class="col-md-3 mb-2"><select name="pekerjaan_id" class="form-control">
                                    <option value="">Semua Posisi</option>
                                    @foreach ($daftarPekerjaan ?? collect() as $job)
                                        <option value="{{ $job->id }}"
                                            {{ (string) request('pekerjaan_id') === (string) $job->id ? 'selected' : '' }}>
                                            {{ $job->title }}</option>
                                    @endforeach
                                </select></div>
                            <div class="col-md-1 mb-2"><button type="submit" class="btn btn-success btn-block"
                                    title="Cari"><i class="fas fa-search"></i></button></div>
                            <div class="col-md-1 mb-2"><a href="{{ url()->current() }}" class="btn btn-secondary btn-block"
                                    title="Reset"><i class="fas fa-undo"></i></a></div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-3">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width:55px">No</th>
                                    <th>Pelamar</th>
                                    <th>Posisi</th>
                                    <th class="text-center">Tanggal Masuk</th>
                                    <th class="text-center">CV</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center" style="min-width:110px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse (($lamaran ?? collect()) as $key => $item)
                                    <tr>
                                        <td class="text-center">
                                            {{ method_exists($lamaran, 'firstItem') ? $lamaran->firstItem() + $key : $key + 1 }}
                                        </td>
                                        <td><strong>{{ $item->nama }}</strong><br><small
                                                class="text-muted">{{ $item->email }}</small></td>
                                        <td>{{ optional($item->pekerjaan)->title ?? '-' }}</td>
                                        <td class="text-center">
                                            {{ $item->created_at ? $item->created_at->format('d/m/Y H:i') : '-' }}</td>
                                        <td class="text-center">
                                            @if ($item->cv_path)
                                                <a href="{{ route('lamaran.cv', $item->id) }}"
                                                    class="btn btn-sm btn-outline-primary"><i class="fas fa-file-pdf"></i>
                                                    Lihat CV</a>
                                            @else
                                                <span class="text-muted">Tidak ada CV</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @php
                                                $status = $item->status ?? 'Submitted';
                                                $badgeClass =
                                                    [
                                                        'Submitted' => 'badge-warning',
                                                        'Screening' => 'badge-info',
                                                        'Interview' => 'badge-primary',
                                                        'Accepted' => 'badge-success',
                                                        'Rejected' => 'badge-danger',
                                                    ][$status] ?? 'badge-secondary';
                                                $statusLabel =
                                                    [
                                                        'Submitted' => 'Lamaran Baru',
                                                        'Screening' => 'Screening',
                                                        'Interview' => 'Interview',
                                                        'Accepted' => 'Diterima',
                                                        'Rejected' => 'Ditolak',
                                                    ][$status] ?? $status;
                                            @endphp
                                            <span class="badge {{ $badgeClass }}">{{ $statusLabel }}</span>
                                        </td>
                                        <td class="text-center"><button type="button" class="btn btn-sm btn-info mb-1"
                                                data-toggle="modal" data-target="#detailLamaran{{ $item->id }}"><i
                                                    class="fas fa-eye"></i> Detail</button></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center text-muted py-4"><i
                                                class="fas fa-inbox fa-2x mb-2"></i>
                                            <p class="mb-0">Belum ada lamaran yang masuk.</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="text-muted mb-2">
                            @if (isset($lamaran) && method_exists($lamaran, 'total') && $lamaran->total() > 0)
                                Menampilkan {{ $lamaran->firstItem() }} sampai {{ $lamaran->lastItem() }} dari
                                {{ $lamaran->total() }} lamaran
                            @else
                                Tidak ada data lamaran
                            @endif
                        </div>
                        <div class="mb-2">
                            @if (isset($lamaran) && method_exists($lamaran, 'appends'))
                                {{ $lamaran->appends(request()->query())->links() }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal detail dan update status --}}
    @foreach ($lamaran ?? collect() as $item)
        <div class="modal fade" id="detailLamaran{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="detailLamaranLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form method="POST" action="{{ route('lamaran.status', $item->id) }}">
                        @csrf @method('PATCH')
                        <div class="modal-header">
                            <h5 class="modal-title" id="detailLamaranLabel{{ $item->id }}">Detail Lamaran -
                                {{ $item->nama }}</h5><button type="button" class="close" data-dismiss="modal"
                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 mb-3"><label>Nama Pelamar</label>
                                    <div>{{ $item->nama }}</div>
                                </div>
                                <div class="col-md-6 mb-3"><label>Email</label>
                                    <div>{{ $item->email }}</div>
                                </div>
                                {{-- Nomor Handphone --}}
                                <div class="col-md-6 mb-3">
                                    <label>Nomor Handphone</label>
                                    <div>{{ $item->nomor_handphone ?: '-' }}</div>
                                </div>

                                {{-- Domisili --}}
                                <div class="col-md-6 mb-3">
                                    <label>Domisili</label>
                                    <div>{{ $item->domisili ?: '-' }}</div>
                                </div>
                                <div class="col-md-6 mb-3"><label>Posisi Dilamar</label>
                                    <div>{{ optional($item->pekerjaan)->title ?? '-' }}</div>
                                </div>
                                <div class="col-md-6 mb-3"><label>Tanggal Masuk</label>
                                    <div>{{ $item->created_at ? $item->created_at->format('d/m/Y H:i') : '-' }}</div>
                                </div>
                                <div class="col-12 mb-3"><label>CV Pelamar</label><br>
                                    @if ($item->cv_path)
                                        <a href="{{ route('lamaran.cv', $item->id) }}"
                                            class="btn btn-outline-primary btn-sm"><i class="fas fa-download"></i> Lihat /
                                        Unduh CV</a>@else<span class="text-muted">CV tidak tersedia.</span>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-3"><label for="status{{ $item->id }}">Status
                                        Lamaran</label><select name="status" id="status{{ $item->id }}"
                                        class="form-control" required>
                                        @foreach (['Submitted' => 'Lamaran Baru', 'Screening' => 'Screening', 'Interview' => 'Interview', 'Accepted' => 'Diterima', 'Rejected' => 'Ditolak'] as $value => $label)
                                            <option value="{{ $value }}"
                                                {{ ($item->status ?? 'Submitted') === $value ? 'selected' : '' }}>
                                                {{ $label }}</option>
                                        @endforeach
                                    </select></div>
                                <div class="col-12 mb-3"><label for="catatan{{ $item->id }}">Catatan HR</label>
                                    <textarea name="catatan_hr" id="catatan{{ $item->id }}" rows="3" class="form-control"
                                        placeholder="Catatan hasil seleksi (opsional)">{{ $item->catatan_hr }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer"><button type="button" class="btn btn-secondary"
                                data-dismiss="modal">Tutup</button><button type="submit" class="btn btn-primary"><i
                                    class="fas fa-save"></i> Simpan Perubahan</button></div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
