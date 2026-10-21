@extends('baru.frontend.layouts.app')



@section('title', 'Karier')



@section('content')

    <style>
        .career-hero {

            background: linear-gradient(90deg, rgba(0, 38, 77, .88), rgba(0, 38, 77, .25)),

                url('{{ asset('images/Banner-kontak.png') }}') center/cover;

            min-height: 320px;

            display: flex;

            align-items: center;

            border-radius: 12px;

            color: white;

            padding: 50px;

        }



        .career-hero h1 {

            font-size: clamp(30px, 4vw, 46px);

            font-weight: 700;

            max-width: 650px;

        }



        .career-search {

            position: relative;

            margin-top: -30px;

            z-index: 2;

            background: white;

            border-radius: 12px;

            box-shadow: 0 5px 25px rgba(0, 0, 0, .08);

            padding: 20px;

        }



        .career-search .form-control,

        .career-search .form-select {

            min-height: 46px;

        }



        .career-card {

            background: white;

            border: 1px solid #e5eaf0;

            border-radius: 12px;

            padding: 24px;

            margin-bottom: 16px;

            transition: .2s ease;

        }



        .career-card:hover {

            border-color: #005EB8;

            box-shadow: 0 5px 20px rgba(0, 94, 184, .08);

        }



        .career-title {

            color: #172b4d;

            font-size: 21px;

            font-weight: 700;

        }



        .career-meta {

            display: flex;

            flex-wrap: wrap;

            gap: 10px 20px;

            color: #64748b;

            font-size: 14px;

            margin: 12px 0;

        }



        .career-badge {

            display: inline-block;

            padding: 6px 12px;

            border-radius: 30px;

            background: #d1fae5;

            color: #047857;

            font-size: 12px;

            font-weight: 700;

        }



        .career-tag {

            display: inline-block;

            padding: 5px 10px;

            background: #eaf3ff;

            color: #005EB8;

            border-radius: 6px;

            font-size: 12px;

            margin: 3px 4px 0 0;

        }



        .career-filter {

            background: white;

            border: 1px solid #e5eaf0;

            border-radius: 12px;

            padding: 24px;

        }



        .career-filter h5 {

            font-size: 17px;

            font-weight: 700;

            color: #172b4d;

            margin-bottom: 18px;

        }



        .career-filter .form-check {

            margin-bottom: 10px;

        }



        .career-filter .form-check-label {

            color: #64748b;

            font-size: 14px;

        }



        .career-cta {

            background: #eaf3ff;

            border-radius: 12px;

            padding: 25px;

            margin: 35px 0;

        }



        .career-empty {

            background: #f8fafc;

            padding: 45px 20px;

            border-radius: 12px;

            text-align: center;

        }



        @media (max-width: 767px) {

            .career-hero {

                padding: 28px;

                min-height: 270px;

            }



            .career-search {

                margin-top: 16px;

            }



            .career-card {

                padding: 18px;

            }

        }
    </style>



    <div class="container py-4">



        {{-- Judul halaman --}}

        <div class="text-center mb-4">

            <h1 class="fw-bold" style="color: #005EB8;">Lowongan Pekerjaan</h1>

        </div>



        {{-- Banner karier --}}

        {{-- <section class="career-hero mb-4" data-aos="fade-up">

            <div>

                <p class="text-uppercase fw-bold mb-3" style="letter-spacing: 3px;">

                    Karier di Perusahaan Kami

                </p>

                <h1>Bersama Membangun Masa Depan yang Lebih Baik</h1>

                <p class="mt-3 mb-0" style="max-width: 600px; line-height: 1.8;">

                    Bergabunglah bersama tim kami dan jadilah bagian dari perjalanan

                    inovasi serta pertumbuhan perusahaan.

                </p>

            </div>

        </section> --}}



        {{-- Pencarian lowongan --}}

        <form id="careerSearchForm" class="career-search mb-4 mt-4" data-aos="fade-up">

            <div class="row g-3">

                <div class="col-lg-5">

                    <input type="text" id="searchKeyword" class="form-control"
                        placeholder="Cari posisi, departemen, atau kata kunci...">

                </div>



                <div class="col-lg-3">

                    <select id="filterDepartment" class="form-select">

                        <option value="">Semua Departemen</option>

                    </select>

                </div>



                <div class="col-lg-2">

                    <select id="filterEmployment" class="form-select">

                        <option value="">Semua Tipe Kerja</option>

                        <option value="Full-time">Full-time</option>

                        <option value="Part-time">Part-time</option>

                        <option value="Contract">Contract</option>

                        <option value="Internship">Internship</option>

                    </select>

                </div>



                <div class="col-lg-2 d-grid">

                    <button type="submit" class="btn btn-primary">

                        Cari Lowongan

                    </button>

                </div>

            </div>

        </form>



        {{-- Daftar lowongan --}}

        <div class="row g-4">



            {{-- Filter sidebar --}}

            <div class="col-lg-3">

                <aside class="career-filter">

                    <h5>

                        <i class="bi bi-sliders me-2"></i>Filter Lowongan

                    </h5>



                    <div class="mb-4">

                        <label class="form-label fw-bold">Tipe Pekerjaan</label>



                        @foreach (['Full-time', 'Part-time', 'Contract', 'Internship'] as $type)
                            <div class="form-check">

                                <input class="form-check-input type-checkbox" type="checkbox" value="{{ $type }}"
                                    id="type{{ $loop->index }}">

                                <label class="form-check-label" for="type{{ $loop->index }}">

                                    {{ $type }}

                                </label>

                            </div>
                        @endforeach

                    </div>



                    <div class="mb-4">

                        <label class="form-label fw-bold">Sistem Kerja</label>



                        @foreach (['On-site', 'Remote', 'Hybrid'] as $workType)
                            <div class="form-check">

                                <input class="form-check-input work-checkbox" type="checkbox" value="{{ $workType }}"
                                    id="work{{ $loop->index }}">

                                <label class="form-check-label" for="work{{ $loop->index }}">

                                    {{ $workType }}

                                </label>

                            </div>
                        @endforeach

                    </div>



                    <button type="button" id="resetFilters" class="btn btn-outline-secondary w-100">

                        Reset Filter

                    </button>

                </aside>

            </div>



            {{-- List pekerjaan --}}

            <div class="col-lg-9">

                <div class="d-flex justify-content-between align-items-center mb-3">

                    <h4 class="fw-bold mb-0" style="color: #172b4d;">

                        <span id="jobCount">0</span> Lowongan Tersedia

                    </h4>



                    <select id="sortJobs" class="form-select" style="width: 150px;">

                        <option value="latest">Terbaru</option>

                        <option value="title">Nama Posisi</option>

                    </select>

                </div>



                <div id="careerLoading" class="text-center py-5">

                    <div class="spinner-border text-primary"></div>

                    <p class="text-muted mt-3">Memuat lowongan kerja...</p>

                </div>



                <div id="careerList"></div>



                <div id="careerEmpty" class="career-empty d-none">

                    <i class="bi bi-search fs-1 text-secondary"></i>

                    <h5 class="fw-bold mt-3">Lowongan tidak ditemukan</h5>

                    <p class="text-muted mb-0">

                        Coba gunakan kata kunci atau filter yang berbeda.

                    </p>

                </div>



                <div id="careerError" class="alert alert-danger d-none">

                    Gagal memuat lowongan. Silakan coba kembali.

                    <button type="button" id="retryLoad" class="btn btn-sm btn-outline-danger ms-2">

                        Coba Lagi

                    </button>

                </div>



                <nav class="mt-4" aria-label="Navigasi halaman lowongan">

                    <ul id="careerPagination" class="pagination justify-content-center"></ul>

                </nav>

            </div>

        </div>



        {{-- CTA lamaran spontan --}}

        {{-- <section class="career-cta" data-aos="fade-up">

            <div class="row align-items-center g-3">

                <div class="col-md-9">

                    <h5 class="fw-bold mb-2" style="color: #172b4d;">

                        Tidak Menemukan Posisi yang Sesuai?

                    </h5>

                    <p class="text-muted mb-0">

                        Hubungi tim kami melalui halaman kontak untuk menanyakan

                        peluang karier yang sesuai dengan keahlian Anda.

                    </p>

                </div>



                <div class="col-md-3 text-md-end">

                    <a href="{{ url('/kontak') }}" class="btn btn-primary">

                        Hubungi Kami

                        <i class="bi bi-arrow-right ms-2"></i>

                    </a>

                </div>

            </div>

        </section> --}}



    </div>



    {{-- Modal detail lowongan --}}

    <div class="modal fade" id="careerDetailModal" tabindex="-1" aria-labelledby="careerDetailTitle" aria-hidden="true">

        <div class="modal-dialog modal-lg modal-dialog-scrollable">

            <div class="modal-content">

                <div class="modal-header">

                    <div>

                        <h5 class="modal-title fw-bold" id="careerDetailTitle">

                            Detail Lowongan

                        </h5>

                        <div class="text-muted small" id="careerDetailMeta"></div>

                    </div>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>

                </div>



                <div class="modal-body" id="careerDetailBody"></div>



                <div class="modal-footer">



                    <button type="button" id="careerApplyButton" class="btn btn-primary">

                        Lamar Sekarang

                        <i class="bi bi-arrow-up-right ms-2"></i>

                    </button>



                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">

                        Tutup

                    </button>

                </div>

            </div>

        </div>

    </div>





    <!-- Modal Form Lamaran -->

    <div class="modal fade" id="careerApplyModal" tabindex="-1" aria-labelledby="careerApplyTitle" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <form id="careerApplyForm" enctype="multipart/form-data">

                    @csrf



                    <div class="modal-header">

                        <h5 class="modal-title fw-bold" id="careerApplyTitle">

                            Form Lamaran Pekerjaan

                        </h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>

                    </div>



                    <div class="modal-body">

                        <input type="hidden" id="applyJobId" name="pekerjaan_id">



                        <div class="mb-3">

                            <label for="applicantName" class="form-label">

                                Nama Lengkap

                            </label>

                            <input type="text" id="applicantName" name="nama" class="form-control"
                                maxlength="150" required>

                        </div>



                        <div class="mb-3">

                            <label for="applicantEmail" class="form-label">

                                Email

                            </label>

                            <input type="email" id="applicantEmail" name="email" class="form-control"
                                maxlength="255" required>

                        </div>

                        {{-- Nomor Handphone --}}
                        <div class="mb-3">

                            <label for="applicantPhone" class="form-label">
                                Nomor Handphone
                            </label>

                            <input type="tel" id="applicantPhone" name="nomor_handphone" class="form-control"
                                maxlength="20" placeholder="Contoh: 081234567890" autocomplete="tel" required>

                        </div>

                        {{-- Domisili --}}
                        <div class="mb-3">

                            <label for="applicantDomicile" class="form-label">
                                Domisili
                            </label>

                            <input type="text" id="applicantDomicile" name="domisili" class="form-control"
                                maxlength="150" placeholder="Contoh: Jakarta Timur, DKI Jakarta" autocomplete="address-level2"
                                required>

                        </div>



                        <div class="mb-3">

                            <label for="applicantCv" class="form-label">

                                Upload CV (PDF, maksimal 2 MB)

                            </label>

                            <input type="file" id="applicantCv" name="cv" class="form-control"
                                accept=".pdf,application/pdf" required>

                        </div>



                        <div id="applyMessage" class="alert d-none" role="alert"></div>

                    </div>



                    <div class="modal-footer">

                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>



                        <button type="submit" id="submitApplication" class="btn btn-primary">

                            Kirim Lamaran

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>





    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // const API_URL = @json(url('/api/pekerjaan'));

            const API_URL = @json(url('/karier/data'));



            const list = document.getElementById('careerList');

            const loading = document.getElementById('careerLoading');

            const empty = document.getElementById('careerEmpty');

            const error = document.getElementById('careerError');

            const count = document.getElementById('jobCount');

            const pagination = document.getElementById('careerPagination');



            const state = {

                jobs: [],

                page: 1,

                lastPage: 1,

                departments: new Set()

            };



            const escapeHtml = (value) => String(value ?? '').replace(

                /[&<>"']/g,

                char => ({

                    '&': '&amp;',

                    '<': '&lt;',

                    '>': '&gt;',

                    '"': '&quot;',

                    "'": '&#039;'

                })[char]

            );



            const formatDate = (value) => {

                if (!value) return 'Tidak ditentukan';



                const date = new Date(value + 'T00:00:00');



                if (Number.isNaN(date.getTime())) return value;



                return date.toLocaleDateString('id-ID', {

                    day: 'numeric',

                    month: 'long',

                    year: 'numeric'

                });

            };



            function getFilters() {

                return {

                    search: document.getElementById('searchKeyword').value.trim(),

                    department: document.getElementById('filterDepartment').value,

                    employment: document.getElementById('filterEmployment').value,

                    types: [...document.querySelectorAll('.type-checkbox:checked')]

                        .map(el => el.value),

                    workTypes: [...document.querySelectorAll('.work-checkbox:checked')]

                        .map(el => el.value),

                    sort: document.getElementById('sortJobs').value

                };

            }



            async function loadJobs(page = 1) {

                state.page = page;

                loading.classList.remove('d-none');

                list.innerHTML = '';

                empty.classList.add('d-none');

                error.classList.add('d-none');

                pagination.innerHTML = '';



                const filters = getFilters();

                const params = new URLSearchParams({

                    page

                });



                if (filters.search) params.set('search', filters.search);



                // API publik hanya mengembalikan lowongan Active.

                params.set('status', 'Active');



                if (filters.department) {

                    params.set('department', filters.department);

                }



                if (filters.employment) {

                    params.set('employment_type', filters.employment);

                }



                try {

                    const response = await fetch(`${API_URL}?${params}`, {

                        headers: {

                            'Accept': 'application/json'

                        }

                    });



                    if (!response.ok) {

                        throw new Error('HTTP ' + response.status);

                    }



                    const result = await response.json();

                    const payload = result.data;

                    let jobs = Array.isArray(payload) ?

                        payload :

                        (payload?.data ?? []);



                    state.lastPage = payload?.last_page ?? 1;



                    // Filter tambahan di sisi UI karena API saat ini belum

                    // menyediakan filter work_location_type.

                    if (filters.types.length) {

                        jobs = jobs.filter(job =>

                            filters.types.includes(job.employment_type)

                        );

                    }



                    if (filters.workTypes.length) {

                        jobs = jobs.filter(job =>

                            filters.workTypes.includes(job.work_location_type)

                        );

                    }



                    if (filters.sort === 'title') {

                        jobs.sort((a, b) =>

                            (a.title || '').localeCompare(b.title || '', 'id')

                        );

                    }



                    // Daftar departemen diambil dari hasil API yang tersedia.

                    jobs.forEach(job => {

                        if (job.department) state.departments.add(job.department);

                    });



                    renderDepartments();

                    state.jobs = jobs;

                    renderJobs(jobs);



                    count.textContent = payload?.total ?? jobs.length;



                    if (payload?.last_page) {

                        renderPagination(payload.current_page, payload.last_page);

                    }

                } catch (err) {

                    console.error('Gagal memuat lowongan:', err);

                    error.classList.remove('d-none');

                } finally {

                    loading.classList.add('d-none');

                }

            }



            function renderDepartments() {

                const select = document.getElementById('filterDepartment');

                const current = select.value;



                const departments = [...state.departments].sort();



                select.innerHTML = '<option value="">Semua Departemen</option>';



                departments.forEach(department => {

                    const option = document.createElement('option');

                    option.value = department;

                    option.textContent = department;

                    select.appendChild(option);

                });



                if (departments.includes(current)) select.value = current;

            }



            function renderJobs(jobs) {

                if (!jobs.length) {

                    empty.classList.remove('d-none');

                    return;

                }



                list.innerHTML = jobs.map(job => {

                    const id = Number(job.id);

                    const deadline = job.deadline_at ?

                        formatDate(job.deadline_at) :

                        'Tidak ditentukan';



                    return `

                        <article class="career-card">

                            <div class="d-flex justify-content-between gap-3 flex-wrap">

                                <div class="flex-grow-1">

                                    <h3 class="career-title mb-1">

                                        ${escapeHtml(job.title)}

                                    </h3>

                                    <div class="career-meta">

                                        <span><i class="bi bi-diagram-3 me-1"></i>

                                            ${escapeHtml(job.department)}</span>

                                        <span><i class="bi bi-geo-alt me-1"></i>

                                            ${escapeHtml(job.location || 'Tidak ditentukan')}</span>

                                        <span><i class="bi bi-briefcase me-1"></i>

                                            ${escapeHtml(job.employment_type)}</span>

                                        <span><i class="bi bi-building me-1"></i>

                                            ${escapeHtml(job.work_location_type)}</span>

                                    </div>

                                </div>

                                <div>

                                    <span class="career-badge">Aktif</span>

                                </div>

                            </div>



                            <p class="text-muted mb-3">

                                ${escapeHtml((job.description || '').slice(0, 220))}

                                ${(job.description || '').length > 220 ? '...' : ''}

                            </p>



                            <div class="d-flex flex-wrap justify-content-between align-items-end gap-3">

                                <div class="small text-muted">

                                    <i class="bi bi-calendar3 me-1"></i>

                                    Batas kirim Lamaran: ${escapeHtml(
                                        deadline
                                            ? new Date(deadline).toLocaleDateString('id-ID', {
                                                day: 'numeric',
                                                month: 'long',
                                                year: 'numeric',
                                                timeZone: 'UTC'
                                            })
                                            : '-'
                                    )}

                                </div>



                                <button type="button"

                                    class="btn btn-primary btn-sm detail-job"

                                    data-id="${id}">

                                    Lihat Detail

                                    <i class="bi bi-arrow-right ms-2"></i>

                                </button>

                            </div>

                        </article>

                    `;

                }).join('');

            }



            function renderPagination(current, last) {

                const addPage = (label, page, disabled, active = false) => {

                    const li = document.createElement('li');

                    li.className = `page-item ${disabled ? 'disabled' : ''} ${active ? 'active' : ''}`;



                    const button = document.createElement('button');

                    button.type = 'button';

                    button.className = 'page-link';

                    button.textContent = label;

                    button.disabled = disabled;

                    button.addEventListener('click', () => loadJobs(page));



                    li.appendChild(button);

                    pagination.appendChild(li);

                };



                if (last <= 1) return;



                addPage('‹', current - 1, current <= 1);



                for (let page = 1; page <= last; page++) {

                    addPage(String(page), page, false, page === current);

                }



                addPage('›', current + 1, current >= last);

            }



            async function showDetail(id) {

                try {

                    const response = await fetch(`${API_URL}/${id}`, {

                        headers: {

                            'Accept': 'application/json'

                        }

                    });



                    if (!response.ok) throw new Error('Lowongan tidak ditemukan');



                    const result = await response.json();

                    const job = result.data;



                    window.currentCareerJobId = job.id;



                    document.getElementById('careerDetailTitle').textContent =

                        job.title || 'Detail Lowongan';



                    document.getElementById('careerDetailMeta').textContent =

                        `${job.department || ''} · ${job.location || ''} · ${job.employment_type || ''}`;



                    const section = (title, content) => content ?

                        `<h6 class="fw-bold mt-4">${title}</h6>

                           <div style="white-space:pre-line">${escapeHtml(content)}</div>` :

                        '';



                    document.getElementById('careerDetailBody').innerHTML = `

                        ${section('Deskripsi Pekerjaan', job.description)}

                        ${section('Persyaratan', job.requirements)}

                        <h6 class="fw-bold mt-4">Batas Pendaftaran</h6>

                        <p>${escapeHtml(formatDate(job.deadline_at))}</p>

                    `;


                    document.getElementById('careerApplyButton')
                        .classList.remove('d-none');

                    bootstrap.Modal.getOrCreateInstance(

                        document.getElementById('careerDetailModal')

                    ).show();

                } catch (err) {

                    console.error(err);

                    alert('Detail lowongan gagal dimuat. Silakan coba kembali.');

                }

            }



            document.getElementById('careerSearchForm')

                .addEventListener('submit', event => {

                    event.preventDefault();

                    loadJobs(1);

                });



            document.getElementById('filterDepartment')

                .addEventListener('change', () => loadJobs(1));



            document.getElementById('filterEmployment')

                .addEventListener('change', () => loadJobs(1));



            document.getElementById('sortJobs')

                .addEventListener('change', () => loadJobs(1));



            document.querySelectorAll('.type-checkbox, .work-checkbox')

                .forEach(el => el.addEventListener('change', () => loadJobs(1)));



            document.getElementById('resetFilters').addEventListener('click', () => {

                document.getElementById('careerSearchForm').reset();

                document.querySelectorAll('.type-checkbox, .work-checkbox')

                    .forEach(el => el.checked = false);

                document.getElementById('sortJobs').value = 'latest';

                loadJobs(1);

            });



            document.getElementById('retryLoad')

                .addEventListener('click', () => loadJobs(state.page));



            list.addEventListener('click', event => {

                const button = event.target.closest('.detail-job');

                if (button) showDetail(button.dataset.id);

            });




            const detailModalElement = document.getElementById('careerDetailModal');
            const applyModalElement = document.getElementById('careerApplyModal');
            const applyModal = bootstrap.Modal.getOrCreateInstance(applyModalElement);

            document.getElementById('careerApplyButton')
                .addEventListener('click', function() {
                    document.getElementById('applyJobId').value =
                        window.currentCareerJobId || '';

                    document.getElementById('applyMessage').className = 'alert d-none';
                    document.getElementById('applyMessage').textContent = '';

                    const detailModal = bootstrap.Modal.getOrCreateInstance(detailModalElement);
                    detailModalElement.addEventListener('hidden.bs.modal', function openApplyOnce() {
                        detailModalElement.removeEventListener('hidden.bs.modal', openApplyOnce);
                        applyModal.show();
                    });

                    detailModal.hide();
                });

            document.getElementById('careerApplyForm')
                .addEventListener('submit', async function(event) {
                    event.preventDefault();

                    const form = event.currentTarget;
                    const submitButton = document.getElementById('submitApplication');
                    const message = document.getElementById('applyMessage');
                    const cv = document.getElementById('applicantCv').files[0];

                    message.className = 'alert d-none';
                    message.textContent = '';

                    if (!window.currentCareerJobId) {
                        message.className = 'alert alert-danger';
                        message.textContent = 'Lowongan tidak valid. Silakan pilih lowongan kembali.';
                        return;
                    }

                    if (!cv || cv.type !== 'application/pdf' || !cv.name.toLowerCase().endsWith('.pdf')) {
                        message.className = 'alert alert-danger';
                        message.textContent = 'Silakan unggah CV dalam format PDF.';
                        return;
                    }

                    if (cv.size > 2 * 1024 * 1024) {
                        message.className = 'alert alert-danger';
                        message.textContent = 'Ukuran CV maksimal 2 MB.';
                        return;
                    }

                    submitButton.disabled = true;
                    submitButton.textContent = 'Mengirim...';

                    try {
                        const formData = new FormData(form);
                        const response = await fetch(@json(url('/karier/lamar')), {
                            method: 'POST',
                            headers: {
                                'Accept': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest'
                            },
                            body: formData
                        });

                        const result = await response.json().catch(() => ({}));

                        if (!response.ok) {
                            const validationMessages = result.errors ?
                                Object.values(result.errors).flat().join(' ') :
                                (result.message || 'Lamaran gagal dikirim.');
                            throw new Error(validationMessages);
                        }

                        message.className = 'alert alert-success';
                        message.textContent = result.message || 'Lamaran berhasil dikirim. Terima kasih!';

                        form.reset();
                        window.currentCareerJobId = null;
                    } catch (err) {
                        message.className = 'alert alert-danger';
                        message.textContent = err.message || 'Terjadi kesalahan saat mengirim lamaran.';
                    } finally {
                        submitButton.disabled = false;
                        submitButton.textContent = 'Kirim Lamaran';
                    }
                });

            loadJobs();

        });
    </script>

@endsection
