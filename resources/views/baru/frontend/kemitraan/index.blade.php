
@extends('baru.frontend.layouts.app')

@section('title', 'Kemitraan')

@section('content')
    <div class="container mb-5">

        {{-- <div class="text-center mt-2 mb-4">
            <h1 style="color: #005EB8;">KEMITRAAN</h1>
        </div> --}}

        <div class="row mt-2">
            <div class="col-12">

                <section class="partnership">
                    <div class="partnership-content">

                        <span class="partnership-label">
                            PROGRAM KEMITRAAN
                        </span>

                        <h2>Jadilah Mitra Seller/Distributor Kami</h2>

                        <p class="description">
                            Bergabunglah bersama kami untuk mengembangkan
                            bisnis distribusi produk YURI di seluruh Indonesia.
                        </p>

                        <h4>Keuntungan Kemitraan</h4>

                        <ul class="benefits">
                            <li>Produk berkualitas</li>
                            <li>Harga kompetitif</li>
                            <li>Peluang pasar luas</li>
                            <li>Dukungan distribusi</li>
                        </ul>

                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeqCdmNz6BrGBxmYi4jeUukAQGDsC7Lb81ZPmr7wRPkCLPUaw/viewform"
                           class="btn-partnership"
                           target="_blank"
                           rel="noopener noreferrer">
                            Daftar Kemitraan Seller/Distributor →
                        </a>

                    </div>
                </section>

            </div>
        </div>

    </div>
@endsection

<style>
    .partnership {
        background: #f8fafc;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        padding: 45px;
        font-family: inherit;
    }

    .partnership-content {
        max-width: 700px;
        margin: auto;
    }

    .partnership-label {
        display: inline-block;
        color: #005EB8;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 12px;
    }

    .partnership h2 {
        color: #1e293b;
        font-size: 30px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .partnership .description {
        color: #64748b;
        font-size: 16px;
        line-height: 1.7;
        margin-bottom: 28px;
    }

    .partnership h4 {
        color: #1e293b;
        font-size: 19px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .partnership .benefits {
        list-style: none;
        padding: 0;
        margin-bottom: 30px;
    }

    .partnership .benefits li {
        color: #475569;
        padding: 8px 0;
        font-size: 15px;
    }

    .partnership .benefits li::before {
        content: "✓";
        color: #005EB8;
        font-weight: bold;
        margin-right: 12px;
    }

    .btn-partnership {
        display: inline-block;
        background: #005EB8;
        color: #fff !important;
        padding: 13px 25px;
        border-radius: 6px;
        text-decoration: none !important;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-partnership:hover {
        background: #004785;
        color: #fff !important;
        transform: translateY(-2px);
    }

    @media (max-width: 768px) {
        .partnership {
            padding: 30px 22px;
        }

        .partnership h2 {
            font-size: 24px;
        }

        .partnership .description {
            font-size: 14px;
        }

        .btn-partnership {
            display: block;
            text-align: center;
        }
    }
</style>
