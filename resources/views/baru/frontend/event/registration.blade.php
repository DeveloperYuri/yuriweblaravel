<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Yuri Event Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="icon" href="{{ asset('images/logo-8.png') }}" />

</head>

<body style="background-color: #f0f8ff;">
    <div class="container mb-5">

        <div class="mt-3">
            <a href="{{ route('indexupdate') }}" class="btn btn-success">Kembali Ke Homepage</a>
        </div>

        <div class="text-center mt-3 mb-4">
            <img class="mb-2" src="{{ asset('images/logo-8.png') }}" alt=""
                style="width: 100px; height: 50px">
            <h1 style="color: #005EB8;">Formulir Pendaftaran Yuri Dance Competition</h1>
        </div>

        <div class="row mt-2">

            <div class="col-lg-7 mx-auto">

                <div class="d-flex justify-content-center my-3">
                    <div style="min-width: 300px; max-width: 600px; width: 100%;">
                        @include('_message')
                    </div>
                </div>

                <form action="{{ route('eventregistrationpost') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            Nama Lengkap <span style="color: red">*</span>
                        </label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp" name="nama"
                            value="{{ old('nama') }}">

                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            Nomor Telepon/WhatsApp <span style="color: red">*</span>
                        </label>
                        <input type="text" class="form-control @error('nomor_telepon') is-invalid @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp" name="nomor_telepon"
                            value="{{ old('nomor_telepon') }}">

                        @error('nomor_telepon')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            Email <span style="color: red">*</span>
                        </label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
                            value="{{ old('email') }}">

                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pilih Kota Domisili <span style="color: red">*</span></label>
                        <select class="form-select @error('domisili') is-invalid @enderror" name="domisili">
                            <option value="">Kota Domisili</option>
                            <option {{ old('domisili') == 'Ambon' ? 'selected' : '' }}>Ambon</option>
                            <option {{ old('domisili') == 'Banda Aceh' ? 'selected' : '' }}>Banda Aceh</option>
                            <option {{ old('domisili') == 'Bandar Lampung' ? 'selected' : '' }}>Bandar Lampung</option>
                            <option {{ old('domisili') == 'Bandung' ? 'selected' : '' }}>Bandung</option>
                            <option {{ old('domisili') == 'Banjarbaru' ? 'selected' : '' }}>Banjarbaru</option>
                            <option {{ old('domisili') == 'Banjarmasin' ? 'selected' : '' }}>Banjarmasin</option>
                            <option {{ old('domisili') == 'Batam' ? 'selected' : '' }}>Batam</option>
                            <option {{ old('domisili') == 'Batu' ? 'selected' : '' }}>Batu</option>
                            <option {{ old('domisili') == 'Bekasi' ? 'selected' : '' }}>Bekasi</option>

                            <option {{ old('domisili') == 'Bengkulu' ? 'selected' : '' }}>Bengkulu</option>
                            <option {{ old('domisili') == 'Binjai' ? 'selected' : '' }}>Binjai</option>
                            <option {{ old('domisili') == 'Bitung' ? 'selected' : '' }}>Bitung</option>
                            <option {{ old('domisili') == 'Blitar' ? 'selected' : '' }}>Blitar</option>
                            <option {{ old('domisili') == 'Bogor' ? 'selected' : '' }}>Bogor</option>
                            <option {{ old('domisili') == 'Bontang' ? 'selected' : '' }}>Bontang</option>

                            <option {{ old('domisili') == 'Cilegon' ? 'selected' : '' }}>Cilegon</option>
                            <option {{ old('domisili') == 'Cimahi' ? 'selected' : '' }}>Cimahi</option>
                            <option {{ old('domisili') == 'Cirebon' ? 'selected' : '' }}>Cirebon</option>

                            <option {{ old('domisili') == 'Denpasar' ? 'selected' : '' }}>Denpasar</option>
                            <option {{ old('domisili') == 'Depok' ? 'selected' : '' }}>Depok</option>
                            <option {{ old('domisili') == 'DKI Jakarta' ? 'selected' : '' }}>DKI Jakarta</option>

                            <option {{ old('domisili') == 'Gorontalo' ? 'selected' : '' }}>Gorontalo</option>

                            <option {{ old('domisili') == 'Jambi' ? 'selected' : '' }}>Jambi</option>
                            <option {{ old('domisili') == 'Jayapura' ? 'selected' : '' }}>Jayapura</option>

                            <option {{ old('domisili') == 'Kediri' ? 'selected' : '' }}>Kediri</option>
                            <option {{ old('domisili') == 'Kendari' ? 'selected' : '' }}>Kendari</option>
                            <option {{ old('domisili') == 'Kupang' ? 'selected' : '' }}>Kupang</option>

                            <option {{ old('domisili') == 'Lhokseumawe' ? 'selected' : '' }}>Lhokseumawe</option>
                            <option {{ old('domisili') == 'Lubuklinggau' ? 'selected' : '' }}>Lubuklinggau</option>

                            <option {{ old('domisili') == 'Madiun' ? 'selected' : '' }}>Madiun</option>
                            <option {{ old('domisili') == 'Makassar' ? 'selected' : '' }}>Makassar</option>
                            <option {{ old('domisili') == 'Malang' ? 'selected' : '' }}>Malang</option>
                            <option {{ old('domisili') == 'Manado' ? 'selected' : '' }}>Manado</option>
                            <option {{ old('domisili') == 'Mataram' ? 'selected' : '' }}>Mataram</option>
                            <option {{ old('domisili') == 'Medan' ? 'selected' : '' }}>Medan</option>
                            <option {{ old('domisili') == 'Metro' ? 'selected' : '' }}>Metro</option>

                            <option {{ old('domisili') == 'Padang' ? 'selected' : '' }}>Padang</option>
                            <option {{ old('domisili') == 'Palangkaraya' ? 'selected' : '' }}>Palangkaraya</option>
                            <option {{ old('domisili') == 'Palembang' ? 'selected' : '' }}>Palembang</option>
                            <option {{ old('domisili') == 'Palopo' ? 'selected' : '' }}>Palopo</option>
                            <option {{ old('domisili') == 'Palu' ? 'selected' : '' }}>Palu</option>
                            <option {{ old('domisili') == 'Pangkalpinang' ? 'selected' : '' }}>Pangkalpinang</option>
                            <option {{ old('domisili') == 'Parepare' ? 'selected' : '' }}>Parepare</option>
                            <option {{ old('domisili') == 'Pariaman' ? 'selected' : '' }}>Pariaman</option>
                            <option {{ old('domisili') == 'Pasuruan' ? 'selected' : '' }}>Pasuruan</option>
                            <option {{ old('domisili') == 'Payakumbuh' ? 'selected' : '' }}>Payakumbuh</option>
                            <option {{ old('domisili') == 'Pekalongan' ? 'selected' : '' }}>Pekalongan</option>
                            <option {{ old('domisili') == 'Pekanbaru' ? 'selected' : '' }}>Pekanbaru</option>
                            <option {{ old('domisili') == 'Pematangsiantar' ? 'selected' : '' }}>Pematangsiantar</option>
                            <option {{ old('domisili') == 'Pontianak' ? 'selected' : '' }}>Pontianak</option>
                            <option {{ old('domisili') == 'Prabumulih' ? 'selected' : '' }}>Prabumulih</option>
                            <option {{ old('domisili') == 'Probolinggo' ? 'selected' : '' }}>Probolinggo</option>

                            <option {{ old('domisili') == 'Salatiga' ? 'selected' : '' }}>Salatiga</option>
                            <option {{ old('domisili') == 'Samarinda' ? 'selected' : '' }}>Samarinda</option>
                            <option {{ old('domisili') == 'Sawahlunto' ? 'selected' : '' }}>Sawahlunto</option>
                            <option {{ old('domisili') == 'Semarang' ? 'selected' : '' }}>Semarang</option>
                            <option {{ old('domisili') == 'Serang' ? 'selected' : '' }}>Serang</option>
                            <option {{ old('domisili') == 'Sibolga' ? 'selected' : '' }}>Sibolga</option>
                            <option {{ old('domisili') == 'Singkawang' ? 'selected' : '' }}>Singkawang</option>
                            <option {{ old('domisili') == 'Solok' ? 'selected' : '' }}>Solok</option>
                            <option {{ old('domisili') == 'Sorong' ? 'selected' : '' }}>Sorong</option>
                            <option {{ old('domisili') == 'Subulussalam' ? 'selected' : '' }}>Subulussalam</option>
                            <option {{ old('domisili') == 'Sukabumi' ? 'selected' : '' }}>Sukabumi</option>
                            <option {{ old('domisili') == 'Surabaya' ? 'selected' : '' }}>Surabaya</option>
                            <option {{ old('domisili') == 'Surakarta' ? 'selected' : '' }}>Surakarta</option>

                            <option {{ old('domisili') == 'Tangerang' ? 'selected' : '' }}>Tangerang</option>
                            <option {{ old('domisili') == 'Tangerang Selatan' ? 'selected' : '' }}>Tangerang Selatan</option>
                            <option {{ old('domisili') == 'Tanjungbalai' ? 'selected' : '' }}>Tanjungbalai</option>
                            <option {{ old('domisili') == 'Tanjungpinang' ? 'selected' : '' }}>Tanjungpinang</option>
                            <option {{ old('domisili') == 'Tarakan' ? 'selected' : '' }}>Tarakan</option>
                            <option {{ old('domisili') == 'Tasikmalaya' ? 'selected' : '' }}>Tasikmalaya</option>
                            <option {{ old('domisili') == 'Tebing Tinggi' ? 'selected' : '' }}>Tebing Tinggi</option>
                            <option {{ old('domisili') == 'Tegal' ? 'selected' : '' }}>Tegal</option>
                            <option {{ old('domisili') == 'Ternate' ? 'selected' : '' }}>Ternate</option>
                            <option {{ old('domisili') == 'Tidore Kepulauan' ? 'selected' : '' }}>Tidore Kepulauan</option>
                            <option {{ old('domisili') == 'Tomohon' ? 'selected' : '' }}>Tomohon</option>

                            <option {{ old('domisili') == 'Yogyakarta' ? 'selected' : '' }}>Yogyakarta</option>


                        </select>

                        @error('domisili')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="datepicker" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                name="tanggal_lahir" id="datepicker" value="{{ old('tanggal_lahir') }}">
                            @error('tanggal_lahir')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Kategori Umur --}}
                    <div class="mb-3">
                        <label class="form-label">Pilih Kategori Umur <span style="color: red">*</span></label>
                        <select class="form-select @error('umur') is-invalid @enderror" name="umur">
                            <option value="">Kategori Umur</option>
                            <option {{ old('umur') == 'Kids 5-11 Tahun' ? 'selected' : '' }}>Kids 5-11 Tahun</option>
                            <option {{ old('umur') == 'Kids 12-19 Tahun' ? 'selected' : '' }}>Kids 12-19 Tahun</option>
                        </select>
                        @error('umur')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Kategori Lomba --}}
                    <div class="mb-3">
                        <label class="form-label">Pilih Kategori Lomba <span style="color: red">*</span></label>
                        <select class="form-select @error('kategori_lomba') is-invalid @enderror" name="kategori_lomba">
                            <option value="">Kategori Lomba</option>
                            <option {{ old('kategori_lomba') == 'Menyanyi' ? 'selected' : '' }}>Menyanyi</option>
                            <option {{ old('kategori_lomba') == 'Menari' ? 'selected' : '' }}>Menari</option>
                        </select>
                        @error('kategori_lomba')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Info Event --}}
                    <div class="mb-3">
                        <label class="form-label">Dapat Info Event dari Mana <span style="color: red">*</span></label>
                        <select class="form-select @error('info_event') is-invalid @enderror" name="info_event">
                            <option value="">Pilih Sumber Informasi</option>
                            <option {{ old('info_event') == 'Social Media' ? 'selected' : '' }}>Social Media</option>
                            <option {{ old('info_event') == 'E-Commerce' ? 'selected' : '' }}>E-Commerce</option>
                            <option {{ old('info_event') == 'Website' ? 'selected' : '' }}>Website</option>
                            <option {{ old('info_event') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                        @error('info_event')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">
                            Upload File Struk Pembelian <span style="color: red">*</span>
                        </label>
                        <input class="form-control @error('image_upload') is-invalid @enderror" type="file"
                            id="formFile" name="image_upload">
                        <div class="form-text">Maximum file size 2MB | jpg, jpeg, png</div>

                        @error('image_upload')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- opsional kalo event video --}}

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            Masukkan Link Youtube/Tiktok <span style="color: red">*</span>
                        </label>
                        <input type="text" class="form-control @error('link') is-invalid @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp" name="link"
                            value="{{ old('link') }}">

                        @error('link')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Term &
                                Condition</a>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">Daftar</button>

                </form>
            </div>


        </div>

        <!-- Modal -->
        <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="termsModalLabel">Terms & Conditions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Ini adalah isi Term & Condition. Anda bisa menambahkan ketentuan, persyaratan, dan informasi
                            penting lainnya di sini.
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>

    </div>
    <!-- End Container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#datepicker", {
            dateFormat: "d F Y", // Contoh: 12 May 2025
            altInput: true,
            altFormat: "d F Y",
            allowInput: true
        });
    </script>
</body>

</html>
