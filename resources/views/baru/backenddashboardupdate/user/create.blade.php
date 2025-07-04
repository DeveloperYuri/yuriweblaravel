@extends('baru.backenddashboardupdate.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah User Baru</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tambah User Baru</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div class="container">
            <div class="card">
                <div class="card-body">

                    <a href="{{ route('usersupdate') }}" class="btn btn-success mb-3"><i class="fas fa-undo"></i>&nbsp
                        Kembali </a>

                    <form action="{{ route('createuserspostupdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">USERNAME</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" placeholder="Masukkan Username">

                            <!-- error message untuk image -->
                            @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">EMAIL</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" placeholder="Masukkan Email">

                            <!-- error message untuk title -->
                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">PASSWORD</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" value="{{ old('password') }}" placeholder="Masukkan Password">

                            <!-- error message untuk title -->
                            @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">CONFIRM PASSWORD</label>
                            <input type="password" class="form-control @error('confirm_password') is-invalid @enderror"
                                name="confirm_password" value="{{ old('confirm_password') }}"
                                placeholder="Confirm Password">

                            <!-- error message untuk title -->
                            @error('confirm_password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">ROLE</label><br>

                            <select class="form-select" aria-label="Default select example" name="is_role">
                                <option selected>Select Role</option>
                                <option {{ old('is_role') == '2' ? 'selected' : '' }} value="2">Super Admin
                                </option>
                                <option {{ old('is_role') == '1' ? 'selected' : '' }} value="1">Admin
                                </option>
                            </select>

                            <!-- error message untuk title -->
                            @error('is_role')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary me-3"><i class="fas fa-save"></i>&nbsp
                            Save</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
