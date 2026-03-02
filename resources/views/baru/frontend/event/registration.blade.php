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

<style>
    body {
        background-image: url('{{ asset('images/infografisproduk/BG2.png') }}');
        background-size: contain;
        background-color: #87aeda;
        /* warna dasar background */
        /* background-size: cover; */
        /* ini kuncinya */
        background-position: center top;
        /* lebih aman dari center center */
        background-repeat: repeat;
        background-attachment: scroll;
        /* ikut scroll */
    }

    @media (min-width: 1400px) {

        #formatas {
            background-image: url('{{ asset('images/infografisproduk/WEBSITE1.png') }}');
            background-size: cover;
            background-color: #87aeda;
            background-position: center top;
            background-repeat: no-repeat;
            background-attachment: scroll;
            padding-bottom: 50px;
        }

        .formisian {
            justify-content: center;
            margin-top: 330px;
        }

        form {
            width: 900px;
            margin-top: 450px;
            /* Jarak atas tetap sesuai maumu */

            /* INI KUNCINYA: */
            margin-left: auto !important;
            margin-right: auto !important;
            position: relative;
            /* Pastikan bukan absolute */
            left: 0;
            /* Reset jika ada left sebelumnya */
            float: none;
            /* background-color: #005EB8; */
        }

        /*form {*/
        /*    width: 900px;*/
        /*    margin-top: 750px;*/
        /* background-color: rgb(235, 14, 14); */
        /*    margin-left: 200px;*/

        /*}*/

    }

    @media (min-width: 992px) and (max-width: 1300px) {
        #formatas {
            background-image: url('{{ asset('images/infografisproduk/WEBSITE1.png') }}');
            /* background-size: cover; */
            background-color: #87aeda;
            /* background-position: center top; */
            background-repeat: no-repeat;
            background-attachment: scroll;
            padding-bottom: 50px;

            background-size: contain;
            background-position: top center;
            min-height: -500px;
        }

        form {
            width: 600px;
            margin-top: 230px;
            /* background-color: white; */

        }

        .formisian {
            margin-left: 80px;
        }

    }

    @media (min-width: 768px) and (max-width: 991px) {

        .buttonkembalihomepage {
            background-image: url('{{ asset('images/infografisproduk/PHONE1.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 350px;
        }

        form {
            margin-left: 10px;
            margin-right: 10px;
            padding-bottom: 50px;

        }
    }

    @media (max-width: 576px) {
        #formatas {
            background-image: url('{{ asset('images/infografisproduk/BG.png') }}');
            background-size: cover;
            background-color: #87aeda;
            background-position: center top;
            background-repeat: no-repeat;
            background-attachment: scroll;
            padding-bottom: 50px;
        }

        form {
            margin-left: 10px;
            margin-right: 10px;

        }

        .buttonkembalihomepage {
            background-image: url('{{ asset('images/infografisproduk/PHONE1.png') }}');
            width: 100%;
            height: 180px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

        }
    }
</style>

<body>
    <div class="buttonkembalihomepage">
    </div>

    <div id="formatas" class="container-fluid">



        {{-- <a href="{{ route('indexupdate') }}" class="btn btn-success">Kembali Ke Homepage</a> --}}


        {{-- <div class="text-center mt-3 mb-4">
            <img class="mb-2" src="{{ asset('images/logo-8.png') }}" alt=""
                style="width: 100px; height: 50px">
            <h1 style="color: #005EB8;">Formulir Pendaftaran Yuri Dance Competition</h1>
        </div> --}}

        <div class="row">

            <div class="col-lg-7 mx-auto">

                <div class="d-flex justify-content-center my-3">
                    <div style="min-width: 300px; max-width: 600px; width: 100%;">
                        @include('_message')
                    </div>
                </div>

                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

                {{-- <br><br><br><br><br><br><br><br><br><br> --}}

                <div id="headlineimage" class="text-center">
                    {{-- <img src="{{ asset('images/infografisproduk/headlinecokingcompetition.png') }}" alt="Headline Event"
                        class="img-fluid"> --}}
                </div>

                <div class="formisian">
                    <form action="{{ route('eventregistrationpost') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                NAMA LENGKAP <span style="color: red">*</span>
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
                                NOMOR WHATSAPP <span style="color: red">*</span>
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
                                EMAIL <span style="color: red">*</span>
                            </label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
                                value="{{ old('email') }}">

                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                ALAMAT LENGKAP <span style="color: red">*</span>
                            </label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat"
                                value="{{ old('alamat') }}">

                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            {{-- Pilih Provinsi --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">PILIH PROVINSI <span style="color: red">*</span></label>
                                <select id="provinsi" name="provinsi"
                                    class="form-select @error('provinsi') is-invalid @enderror"
                                    data-old="{{ old('provinsi') }}"> {{-- Tambahkan ini --}}
                                    <option value="">Pilih Provinsi</option>
                                </select>
                                <input type="text" id="provinsi_other" name="provinsi_other"
                                    placeholder="Masukkan Provinsi Lainnya" style="display:none; margin-top:10px;"
                                    class="form-control">
                                @error('provinsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Pilih Kota --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">PILIH KOTA/KABUPATEN <span style="color: red">*</span></label>
                                <select id="kota" name="kota"
                                    class="form-select @error('kota') is-invalid @enderror"
                                    data-old="{{ old('kota') }}">
                                    {{-- Tambahkan ini --}}
                                    <option value="">Pilih Kota</option>
                                </select>
                                <input type="text" id="kota_other" name="kota_other"
                                    placeholder="Masukkan Kota Lainnya" style="display:none; margin-top:10px;"
                                    class="form-control">
                                @error('kota')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Pilih Provinsi <span style="color: red">*</span></label>
                            <select id="provinsi" name="provinsi"
                                class="form-select @error('provinsi') is-invalid @enderror">
                                <option value="">Pilih Provinsi</option>
                            </select>
                            @error('provinsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Pilih Kota/Kabupaten <span style="color: red">*</span></label>
                            <select id="kota" name="kota"
                                class="form-select @error('kota') is-invalid @enderror">
                                <option value="">Pilih Kota</option>
                            </select>
                            @error('kota')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> --}}

                        {{-- <select id="provinsi">
                        <option>Pilih Provinsi</option>
                    </select>

                    <select id="kota">
                        <option>Pilih Kota</option>
                    </select> --}}

                        {{-- <div class="mb-3">
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
                    </div> --}}

                        {{-- <div class="row mb-3">
                        <label for="datepicker" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                name="tanggal_lahir" id="datepicker" value="{{ old('tanggal_lahir') }}">
                            @error('tanggal_lahir')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> --}}

                        {{-- Kategori Umur --}}
                        <div class="mb-3">
                            <label class="form-label">USIA <span style="color: red">*</span></label>
                            <select class="form-select @error('umur') is-invalid @enderror" name="umur">
                                <option value="">-- Pilih Salah Satu --</option>
                                <option {{ old('umur') == '18-24 Tahun' ? 'selected' : '' }}>18-24 Tahun</option>
                                <option {{ old('umur') == '25-34 Tahun' ? 'selected' : '' }}>25-34 Tahun</option>
                                <option {{ old('umur') == '35-44 Tahun' ? 'selected' : '' }}>35-44 Tahun</option>
                                <option {{ old('umur') == '45-54 tahun' ? 'selected' : '' }}>45-54 tahun</option>
                                <option {{ old('umur') == '55-64 Tahun' ? 'selected' : '' }}>55-64 Tahun</option>
                                <option {{ old('umur') == '65+ Tahun' ? 'selected' : '' }}>65+ Tahun</option>
                            </select>
                            @error('umur')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                USERNAME AKUN INSTAGRAM (Apabila tidak punya mohon diisi "-") <span
                                    style="color: red">*</span>
                            </label>
                            <input type="text" class="form-control @error('instagram') is-invalid @enderror"
                                id="exampleInputEmail1" aria-describedby="emailHelp" name="instagram"
                                value="{{ old('instagram') }}">

                            @error('instagram')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                USERNAME AKUN TIKTOK (Apabila tidak punya mohon diisi "-") <span
                                    style="color: red">*</span>
                            </label>
                            <input type="text" class="form-control @error('tiktok') is-invalid @enderror"
                                id="exampleInputEmail1" aria-describedby="emailHelp" name="tiktok"
                                value="{{ old('tiktok') }}">

                            @error('tiktok')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Kategori Lomba --}}
                        {{-- <div class="mb-3">
                        <label class="form-label">Pilih Kategori Lomba <span style="color: red">*</span></label>
                        <select class="form-select @error('kategori_lomba') is-invalid @enderror"
                            name="kategori_lomba">
                            <option value="">Kategori Lomba</option>
                            <option {{ old('kategori_lomba') == 'Menyanyi' ? 'selected' : '' }}>Menyanyi</option>
                            <option {{ old('kategori_lomba') == 'Menari' ? 'selected' : '' }}>Menari</option>
                        </select>
                        @error('kategori_lomba')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}}

                        {{-- Info Event --}}
                        <div class="mb-3">
                            <label class="form-label">DAPAT INFORMASI LOMBA DARI MANA? <span
                                    style="color: red">*</span></label>
                            <select class="form-select @error('info_event') is-invalid @enderror" name="info_event">
                                <option value="">-- Pilih Salah Satu --</option>
                                <option {{ old('info_event') == 'Social Media' ? 'selected' : '' }}>Social Media
                                </option>
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
                                UPLOAD FILE STRUK PEMBELIAN <span style="color: red">*</span>
                            </label>
                            <input class="form-control @error('image_upload') is-invalid @enderror" type="file"
                                id="formFile" name="image_upload" onchange="previewImage()">
                            <div class="form-text">Maximum file size 2MB | jpg, jpeg, png</div>

                            @error('image_upload')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            {{-- Area Preview (Thumbnail) --}}
                            <div id="image-preview-container" class="mt-2" style="display: none;">
                                <p class="small text-success mb-1">Klik gambar untuk memperbesar:</p>
                                <img id="img-preview" src="" class="img-thumbnail"
                                    style="max-height: 150px; cursor: pointer;" data-bs-toggle="modal"
                                    data-bs-target="#zoomImageModal">
                            </div>
                        </div>

                        <div class="modal fade" id="zoomImageModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Pratinjau Struk Pembelian</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img id="img-zoom" src="" class="img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="mb-3">
                        <label for="formFile" class="form-label">
                            Upload File Struk Pembelian <span style="color: red">*</span>
                        </label>
                        <input class="form-control @error('image_upload') is-invalid @enderror" type="file"
                            id="formFile" name="image_upload">
                        <div class="form-text">Maximum file size 2MB | jpg, jpeg, png</div>

                        @error('image_upload')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}}

                        {{-- opsional kalo event video --}}

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                LINK VIDEO COMPETITION <span style="color: red">*</span>
                            </label>
                            <input type="text" class="form-control @error('link') is-invalid @enderror"
                                id="exampleInputEmail1" aria-describedby="emailHelp" name="link"
                                value="{{ old('link') }}">

                            @error('link')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input @error('terms') is-invalid @enderror"
                                id="exampleCheck1" name="terms" value="1" {{ old('terms') ? 'checked' : '' }}
                                required>

                            <label class="form-check-label" for="exampleCheck1">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Saya setuju
                                    dengan syarat & ketentuan yang berlaku</a>
                            </label>

                            @error('terms')
                                <div class="invalid-feedback">Anda harus menyetujui syarat dan ketentuan.</div>
                            @enderror
                        </div>

                        {{-- <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Term &
                                Condition</a>
                        </label>
                    </div> --}}

                        <button type="submit" class="btn btn-primary">Daftar</button>

                    </form>
                </div>

            </div>



        </div>

        <!-- Modal -->
        <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="termsModalLabel">Syarat & Ketentuan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ol class="lh-lg">
                            <li>Beli Produk Yuri Hand Soap ukuran 410 mL varian bebas, simpan struk pembelian atau
                                screenshot bukti pembelian via E-Commerce.</li>
                            <li>Peserta membuat konten video memasak menu sehat Ramadhan atau Idul Fitri.</li>
                            <li>Video wajib memuat penggunaan Produk Yuri Hand Soap sebelum memasak. Product knowledge
                                Yuri Hand Soap: <a
                                    href="https://drive.google.com/drive/folders/1xAUNWe8NCVNwiCYRaK6peGxC2aD_k7Ni?usp=drive_link"
                                    target="_blank">Klik di sini</a>.</li>
                            <li>Durasi Video maksimal 1 menit.</li>
                            <li>Upload video di Instagram atau TikTok.</li>
                            <li>Video wajib tag Instagram atau TikTok <strong>@yurihousehold</strong>.</li>
                            <li>Wajib Follow Instagram <strong>@yurihousehold</strong>.</li>
                            <li>Wajib Follow Tiktok <strong>@yurihousehold</strong>.</li>
                            <li>Gunakan hashtag: <strong>#RamadhanSehat #AwalidenganYuri #YuriHandsoap</strong>.</li>
                            <li>Upload video maksimal tanggal <strong>31 Maret 2026</strong>.</li>
                            <li>Tidak diperbolehkan mengambil video dari karya orang lain.</li>
                            <li>Video tidak diperbolehkan memuat masakan non-Halal.</li>
                            <li>Video tidak mengandung unsur pornografi, SARA, dan kekerasan.</li>
                            <li>Pemenang akan diumumkan via Instagram <strong>@yurihousehold</strong>.</li>
                            <li>Keputusan pemenang dari pihak Yuri tidak bisa diganggu gugat.</li>
                            <li>Video kompetisi ini terbuka untuk umum.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="syaratketentuan">
        <img src="{{ asset('images/infografisproduk/WEBSITE2.png') }}" alt="Headline Event" class="img-fluid">
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

    <script>
        const provSelect = document.getElementById('provinsi');
        const kotaSelect = document.getElementById('kota');
        const oldProv = provSelect.getAttribute('data-old');
        const oldKota = kotaSelect.getAttribute('data-old');

        // Fungsi untuk menambah opsi "Lainnya" di paling bawah
        function appendOtherOption(selectElement, oldValue) {
            let opt = document.createElement('option');
            opt.value = "Lainnya"; // Nilai yang akan dikirim ke database
            opt.innerHTML = "Lainnya";
            if (oldValue === "Lainnya") opt.selected = true;
            selectElement.appendChild(opt);
        }

        // 1. Ambil Data Provinsi
        fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
            .then(response => response.json())
            .then(provinces => {
                provinces.forEach(prov => {
                    let opt = document.createElement('option');
                    opt.value = prov.name;
                    opt.setAttribute('data-id', prov.id);
                    opt.innerHTML = prov.name;
                    if (oldProv && oldProv === prov.name) opt.selected = true;
                    provSelect.appendChild(opt);
                });

                // Tambahkan "Lainnya" di Provinsi
                appendOtherOption(provSelect, oldProv);

                if (oldProv) provSelect.dispatchEvent(new Event('change'));
            });

        // 2. Event Listener Provinsi
        provSelect.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const provId = selectedOption.getAttribute('data-id');

            // Reset Kota
            kotaSelect.innerHTML = '<option value="">Pilih Kota</option>';

            if (provId) {
                fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provId}.json`)
                    .then(response => response.json())
                    .then(cities => {
                        cities.forEach(city => {
                            let opt = document.createElement('option');
                            opt.value = city.name;
                            opt.innerHTML = city.name;
                            if (oldKota && oldKota === city.name) opt.selected = true;
                            kotaSelect.appendChild(opt);
                        });
                        appendOtherOption(kotaSelect, oldKota);
                    });
            } else if (this.value === "Lainnya") {
                // Jika Provinsi "Lainnya", Kota otomatis pilih "Lainnya" juga
                appendOtherOption(kotaSelect, oldKota);
                kotaSelect.value = "Lainnya";
            }
        });
    </script>

    {{-- <script>
        const provSelect = document.getElementById('provinsi');
        const kotaSelect = document.getElementById('kota');
        const oldProv = provSelect.getAttribute('data-old');
        const oldKota = kotaSelect.getAttribute('data-old');

        // 1. Ambil Data Provinsi
        fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
            .then(response => response.json())
            .then(provinces => {
                provinces.forEach(prov => {
                    let opt = document.createElement('option');
                    opt.value = prov.name;
                    opt.setAttribute('data-id', prov.id);
                    opt.innerHTML = prov.name;

                    // Jika ada data OLD, otomatis set selected
                    if (oldProv && oldProv === prov.name) {
                        opt.selected = true;
                    }

                    provSelect.appendChild(opt);
                });

                // Trigger perubahan kota jika ada data OLD provinsi
                if (oldProv) {
                    provSelect.dispatchEvent(new Event('change'));
                }
            });

        // 2. Ambil Data Kota
        provSelect.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const provId = selectedOption.getAttribute('data-id');

            kotaSelect.innerHTML = '<option value="">Pilih Kota</option>';

            if (provId) {
                fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provId}.json`)
                    .then(response => response.json())
                    .then(cities => {
                        cities.forEach(city => {
                            let opt = document.createElement('option');
                            opt.value = city.name;
                            opt.innerHTML = city.name;

                            // Jika ada data OLD kota, otomatis set selected
                            if (oldKota && oldKota === city.name) {
                                opt.selected = true;
                            }

                            kotaSelect.appendChild(opt);
                        });
                    });
            }
        });
    </script> --}}

    <script>
        function previewImage() {
            const image = document.querySelector('#formFile');
            const imgPreview = document.querySelector('#img-preview');
            const imgZoom = document.querySelector('#img-zoom'); // Ambil elemen img di modal
            const previewContainer = document.querySelector('#image-preview-container');

            // Cek apakah ada file yang dipilih
            if (image.files && image.files[0]) {
                previewContainer.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);

                oFReader.onload = function(oFREvent) {
                    // Set src untuk thumbnail
                    imgPreview.src = oFREvent.target.result;
                    // Set src untuk gambar di dalam modal
                    imgZoom.src = oFREvent.target.result;
                }
            }
        }
    </script>

</body>

</html>
