@extends('baru.backenddashboardupdate.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Details Data Peserta</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Details Data Peserta</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div class="container">
            <div class="card">
                <div class="card-body">

                    <a href="{{ route('registrationeventindex') }}" class="btn btn-success mb-3"><i
                            class="fas fa-undo"></i>&nbsp
                        Kembali </a>


                    <form>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">NAMA LENGKAP</label>
                            <input type="text" class="form-control" name="nama"
                                value="{{ old('nama', $registevent->nama) }}" placeholder="Nama" disabled>
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">NOMOR WHATSAPP</label>
                            <input type="text" class="form-control" name="nomor_telepon"
                                value="{{ old('nomor_telepon', $registevent->nomor_telepon) }}" placeholder="Nomor Telepon"
                                disabled>
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">EMAIL</label>
                            <input type="email" class="form-control" name="email"
                                value="{{ old('email', $registevent->email) }}" placeholder="Email" disabled>
                        </div>

                        {{-- <div class="form-group mb-3">
                            <label class="font-weight-bold">Domisili</label>
                            <input type="text" class="form-control" name="domisili"
                                value="{{ old('domisili', $registevent->domisili) }}" placeholder="Domisili" disabled>
                        </div> --}}

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">ALAMAT LENGKAP</label>
                            <input type="text" class="form-control" name="alamat"
                                value="{{ old('alamat', $registevent->alamat) }}" placeholder="Alamat" disabled>
                        </div>

                        <div class="row mb-3">
                            {{-- Provinsi --}}
                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold">PROVINSI</label>
                                <input type="text" class="form-control" name="provinsi"
                                    value="{{ old('provinsi', $registevent->provinsi) }}" placeholder="Provinsi" disabled>
                            </div>

                            {{-- Kota --}}
                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold">KOTA/KABUPATEN</label>
                                <input type="text" class="form-control" name="kota"
                                    value="{{ old('kota', $registevent->kota) }}" placeholder="Kota" disabled>
                            </div>
                        </div>

                        {{-- <div class="form-group mb-3">
                            <label class="font-weight-bold">Tanggal Lahir</label>
                            <input type="text" class="form-control" name="tanggal_lahir"
                                value="{{ old('tanggal_lahir', $registevent->tanggal_lahir) }}" placeholder="Tanggal Lahir"
                                disabled>
                        </div> --}}

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">USIA</label>
                            <input type="text" class="form-control" name="umur"
                                value="{{ old('umur', $registevent->umur) }}" placeholder="Umur" disabled>
                        </div>

                        {{-- <div class="form-group mb-3">
                            <label class="font-weight-bold">Kategori Lomba</label>
                            <input type="kategori_lomba" class="form-control" name="kategori_lomba"
                                value="{{ old('kategori_lomba', $registevent->kategori_lomba) }}"
                                placeholder="Kategori Lomba" disabled>
                        </div> --}}

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">AKUN INSTAGRAM</label>
                            <input type="text" class="form-control" name="instagram"
                                value="{{ old('instagram', $registevent->instagram) }}" placeholder="instagram" disabled>
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">AKUN TIKTOK</label>
                            <input type="text" class="form-control" name="tiktok"
                                value="{{ old('tiktok', $registevent->tiktok) }}" placeholder="tiktok" disabled>
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">DAPAT INFORMASI LOMBA DARI MANA?</label>
                            <br>
                            <input type="text" class="form-control" name="info_event"
                                value="{{ old('info_event', $registevent->info_event) }}" placeholder="Info Event" disabled>
                        </div>

                        <!-- File Upload -->
                        <div class="form-group mb-3">
                            <label class="font-weight-bold d-block mb-2">STRUK PEMBELIAN</label>
                            @if ($registevent->image_upload)
                                <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#imageModal{{ $registevent->id }}">
                                    <img src="{{ asset('storage/registrationevent/' . $registevent->image_upload) }}"
                                        class="img-thumbnail" style="width: 100px; height: 70px; object-fit: cover;">
                                </a>

                                <!-- Modal polos -->
                                <div class="modal fade" id="imageModal{{ $registevent->id }}" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content bg-transparent border-0 shadow-none">
                                            <div class="modal-body text-center p-0">
                                                <img src="{{ asset('storage/registrationevent/' . $registevent->image_upload) }}"
                                                    class="img-fluid rounded" style="max-height: 90vh;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            {{-- <img src="{{ asset('storage/registrationevent/' . $registevent->image_upload) }}"
                                class="rounded img-thumbnail" style="width: 100px; height: 70px; object-fit: cover;"> --}}
                        </div>



                        {{-- <div class="form-group mb-3">
                            <label class="font-weight-bold">IMAGE</label>
                            <div class="mt-2">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#imagePreviewModal">
                                    <img src="{{ asset('storage/registrationevent' . $registevent->image_upload) }}" alt="Preview"
                                        class="img-thumbnail" style="max-width: 150px;">
                                </a>
                            </div>
                        </div> --}}

                        <!-- Gambar Preview Jika Ada -->
                        @if (!empty($registevent->image))
                            <!-- Modal Bootstrap -->
                            <div class="modal fade" id="imagePreviewModal" tabindex="-1"
                                aria-labelledby="imagePreviewLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Preview Gambar</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Tutup"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img src="{{ asset('storage/' . $registevent->image) }}"
                                                class="img-fluid rounded">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif


                        {{-- <div class="form-group mb-3">
                            <label class="font-weight-bold">IMAGE</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                                value="{{ old('title', $registevent->image) }}">
                        </div> --}}

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">LINK VIDEO COMPETITION</label>
                            <input type="text" class="form-control" name="link"
                                value="{{ old('link', $registevent->link) }}" placeholder="Link" disabled>
                        </div>



                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
