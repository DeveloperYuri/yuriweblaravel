@extends('baru.backenddashboardupdate.layouts.main')

@section('content')
<div class="content-wrapper">

    {{-- Header --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Pekerjaan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('pekerjaanindex') }}">Pekerjaan</a>
                        </li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    {{-- Main Content --}}
    <section class="content">
        <div class="container-fluid">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Data Pekerjaan</h3>
                </div>

                <form action="{{ route('pekerjaanstore') }}" method="POST">
                    @csrf

                    <div class="card-body">

                        {{-- Error Validation --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Data belum berhasil disimpan.</strong>
                                <ul class="mb-0 mt-2">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- Informasi Umum --}}
                        <h5 class="mb-3">Informasi Umum</h5>

                        <div class="form-group">
                            <label for="title">Nama Posisi <span class="text-danger">*</span></label>
                            <input
                                type="text"
                                name="title"
                                id="title"
                                class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title') }}"
                                placeholder="Contoh: IT Support"
                                required
                            >
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="department">Departemen <span class="text-danger">*</span></label>
                                    <input
                                        type="text"
                                        name="department"
                                        id="department"
                                        class="form-control"
                                        value="{{ old('department') }}"
                                        placeholder="Contoh: Information Technology"
                                        required
                                    >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="job_level">Level Pekerjaan <span class="text-danger">*</span></label>
                                    <select name="job_level" id="job_level" class="form-control" required>
                                        <option value="">-- Pilih Level --</option>
                                        @foreach (['Entry-level', 'Junior', 'Mid-level', 'Senior', 'Manager'] as $level)
                                            <option value="{{ $level }}" {{ old('job_level') == $level ? 'selected' : '' }}>
                                                {{ $level }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="employment_type">Tipe Pekerjaan <span class="text-danger">*</span></label>
                                    <select name="employment_type" id="employment_type" class="form-control" required>
                                        <option value="">-- Pilih Tipe --</option>
                                        @foreach (['Full-time', 'Part-time', 'Contract', 'Internship'] as $type)
                                            <option value="{{ $type }}" {{ old('employment_type') == $type ? 'selected' : '' }}>
                                                {{ $type }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="work_location_type">Sistem Kerja <span class="text-danger">*</span></label>
                                    <select name="work_location_type" id="work_location_type" class="form-control" required>
                                        <option value="">-- Pilih Sistem Kerja --</option>
                                        @foreach (['On-site', 'Remote', 'Hybrid'] as $workType)
                                            <option value="{{ $workType }}" {{ old('work_location_type') == $workType ? 'selected' : '' }}>
                                                {{ $workType }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="location">Lokasi Kerja</label>
                            <input
                                type="text"
                                name="location"
                                id="location"
                                class="form-control"
                                value="{{ old('location') }}"
                                placeholder="Contoh: Jakarta Timur"
                            >
                        </div>

                        <hr>

                        {{-- Deskripsi --}}
                        <h5 class="mb-3">Deskripsi Pekerjaan</h5>

                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea
                                name="description"
                                id="description"
                                class="form-control"
                                rows="4"
                                placeholder="Jelaskan gambaran umum posisi ini..."
                            >{{ old('description') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="responsibilities">Tanggung Jawab</label>
                            <textarea
                                name="responsibilities"
                                id="responsibilities"
                                class="form-control"
                                rows="4"
                                placeholder="Tuliskan tanggung jawab pekerjaan..."
                            >{{ old('responsibilities') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="requirements">Persyaratan</label>
                            <textarea
                                name="requirements"
                                id="requirements"
                                class="form-control"
                                rows="4"
                                placeholder="Tuliskan kualifikasi yang wajib dipenuhi..."
                            >{{ old('requirements') }}</textarea>
                        </div>

                        <hr>

                        {{-- Gaji --}}
                        <h5 class="mb-3">Informasi Gaji</h5>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="salary_min">Gaji Minimum (Rp)</label>
                                    <input
                                        type="number"
                                        name="salary_min"
                                        id="salary_min"
                                        class="form-control"
                                        value="{{ old('salary_min') }}"
                                        min="0"
                                        step="1"
                                        placeholder="Contoh: 5000000"
                                    >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="salary_max">Gaji Maksimum (Rp)</label>
                                    <input
                                        type="number"
                                        name="salary_max"
                                        id="salary_max"
                                        class="form-control"
                                        value="{{ old('salary_max') }}"
                                        min="0"
                                        step="1"
                                        placeholder="Contoh: 8000000"
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input
                                    type="checkbox"
                                    name="show_salary"
                                    id="show_salary"
                                    class="custom-control-input"
                                    value="1"
                                    {{ old('show_salary') ? 'checked' : '' }}
                                >
                                <label class="custom-control-label" for="show_salary">
                                    Tampilkan informasi gaji di halaman publik
                                </label>
                            </div>
                        </div>

                        <hr>

                        {{-- Publikasi --}}
                        <h5 class="mb-3">Publikasi Lowongan</h5>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="deadline_at">Batas Akhir Lamaran</label>
                                    <input
                                        type="date"
                                        name="deadline_at"
                                        id="deadline_at"
                                        class="form-control"
                                        value="{{ old('deadline_at') }}"
                                    >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status <span class="text-danger">*</span></label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="Draft" {{ old('status', 'Draft') == 'Draft' ? 'selected' : '' }}>
                                            Draft
                                        </option>
                                        <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>
                                            Active
                                        </option>
                                        <option value="Closed" {{ old('status') == 'Closed' ? 'selected' : '' }}>
                                            Closed
                                        </option>
                                    </select>
                                    <small class="form-text text-muted">
                                        Pilih Active jika lowongan siap ditampilkan kepada publik.
                                    </small>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan Pekerjaan
                        </button>

                        <a href="{{ route('pekerjaanindex') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </section>
</div>
@endsection