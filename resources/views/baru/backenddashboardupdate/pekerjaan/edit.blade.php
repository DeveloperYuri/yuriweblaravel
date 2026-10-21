
@extends('baru.backenddashboardupdate.layouts.main')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Pekerjaan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('pekerjaanindex') }}">Pekerjaan</a>
                        </li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Edit Pekerjaan</h3>
                </div>

                <form action="{{ route('pekerjaanupdate', $pekerjaan->id) }}"
                      method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Data belum berhasil diperbarui.</strong>
                                <ul class="mb-0 mt-2">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <h5 class="mb-3">Informasi Umum</h5>

                        <div class="form-group">
                            <label for="title">Nama Posisi *</label>
                            <input type="text" name="title" id="title"
                                class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title', $pekerjaan->title) }}"
                                required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="department">Departemen *</label>
                                    <input type="text" name="department" id="department"
                                        class="form-control"
                                        value="{{ old('department', $pekerjaan->department) }}"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="job_level">Level Pekerjaan *</label>
                                    <select name="job_level" id="job_level"
                                        class="form-control" required>
                                        @foreach (['Entry-level', 'Junior', 'Mid-level', 'Senior', 'Manager'] as $level)
                                            <option value="{{ $level }}"
                                                {{ old('job_level', $pekerjaan->job_level) == $level ? 'selected' : '' }}>
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
                                    <label for="employment_type">Tipe Pekerjaan *</label>
                                    <select name="employment_type" id="employment_type"
                                        class="form-control" required>
                                        @foreach (['Full-time', 'Part-time', 'Contract', 'Internship'] as $type)
                                            <option value="{{ $type }}"
                                                {{ old('employment_type', $pekerjaan->employment_type) == $type ? 'selected' : '' }}>
                                                {{ $type }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="work_location_type">Sistem Kerja *</label>
                                    <select name="work_location_type" id="work_location_type"
                                        class="form-control" required>
                                        @foreach (['On-site', 'Remote', 'Hybrid'] as $workType)
                                            <option value="{{ $workType }}"
                                                {{ old('work_location_type', $pekerjaan->work_location_type) == $workType ? 'selected' : '' }}>
                                                {{ $workType }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="location">Lokasi Kerja</label>
                            <input type="text" name="location" id="location"
                                class="form-control"
                                value="{{ old('location', $pekerjaan->location) }}">
                        </div>

                        <hr>
                        <h5 class="mb-3">Deskripsi Pekerjaan</h5>

                        <div class="form-group">
                            <label for="description">Deskripsi *</label>
                            <textarea name="description" id="description"
                                class="form-control" rows="4"
                                required>{{ old('description', $pekerjaan->description) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="responsibilities">Tanggung Jawab *</label>
                            <textarea name="responsibilities" id="responsibilities"
                                class="form-control" rows="4"
                                required>{{ old('responsibilities', $pekerjaan->responsibilities) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="requirements">Persyaratan *</label>
                            <textarea name="requirements" id="requirements"
                                class="form-control" rows="4"
                                required>{{ old('requirements', $pekerjaan->requirements) }}</textarea>
                        </div>
                        
                        <hr>
                        <h5 class="mb-3">Informasi Gaji</h5>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="salary_min">Gaji Minimum (Rp)</label>
                                    <input type="number" name="salary_min" id="salary_min"
                                        class="form-control"
                                        value="{{ old('salary_min', $pekerjaan->salary_min) }}"
                                        min="0" step="1">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="salary_max">Gaji Maksimum (Rp)</label>
                                    <input type="number" name="salary_max" id="salary_max"
                                        class="form-control"
                                        value="{{ old('salary_max', $pekerjaan->salary_max) }}"
                                        min="0" step="1">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="show_salary" id="show_salary"
                                    class="custom-control-input" value="1"
                                    {{ old('show_salary', $pekerjaan->show_salary) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="show_salary">
                                    Tampilkan informasi gaji di halaman publik
                                </label>
                            </div>
                        </div>

                        <hr>
                        <h5 class="mb-3">Publikasi Lowongan</h5>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="deadline_at">Batas Akhir Lamaran</label>
                                    <input type="date" name="deadline_at" id="deadline_at"
                                        class="form-control"
                                        value="{{ old('deadline_at', $pekerjaan->deadline_at ? \Illuminate\Support\Carbon::parse($pekerjaan->deadline_at)->format('Y-m-d') : '') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status *</label>
                                    <select name="status" id="status"
                                        class="form-control" required>
                                        @foreach (['Draft', 'Active', 'Closed'] as $status)
                                            <option value="{{ $status }}"
                                                {{ old('status', $pekerjaan->status) == $status ? 'selected' : '' }}>
                                                {{ $status }}
                                            </option>
                                        @endforeach
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
                            <i class="fas fa-save"></i> Simpan Perubahan
                        </button>

                        <a href="{{ route('pekerjaanindex') }}"
                            class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </section>
</div>
@endsection
