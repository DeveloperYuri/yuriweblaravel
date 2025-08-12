<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
    <meta charset="utf-8" />
    <meta name="description"
        content="Kenali brand YURI, Produk Kebersihan Keluarga dan Rumah Tangga dari PT Joenoes Ikamulya. Kunjungi situs resmi kami!">

    <meta name="keywords" content="yuri, yuri indonesia">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Yuri - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="icon" href="{{ asset('images/logo-8.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Homemade+Apple&family=Itim&family=Oswald:wght@200..700&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap"
        rel="stylesheet">

    <link rel="canonical" href="https://www.yuri-indonesia.co.id" />

    <meta property="og:title" content="YURI | Produk Kebersihan Keluarga dan Rumah Tangga dari PT Joenoes Ikamulya" />
    <meta property="og:description"
        content="Produk Kebersihan Keluarga dan Rumah Tangga dari PT Joenoes Ikamulya. Cek semua produk YURI sekarang!" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.yuri-indonesia.co.id" />
    <meta property="og:image" content="https://www.yuri-indonesia.co.id/images/logo-8.png" />

    <!-- Schema Markup -->
    <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Organization",
                "name": "YURI",
                "url": "https://www.yuri-indonesia.co.id",
                "logo": "https://www.yuri-indonesia.co.id/images/logo-8.png",
                "sameAs": [
                 "https://www.instagram.com/yurihousehold/"
             ],
                "contactPoint": {
                 "@type": "ContactPoint",
                 "telephone": "+62-21 460 2447",
                 "contactType": "customer service"
                }
            }
         </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NKRW8V3SDC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-NKRW8V3SDC');
    </script>
</head>

<style>
    h1 {
        font-family: "Oswald", sans-serif;
        font-optical-sizing: auto;
        font-weight: bold;
        font-style: normal;
    }

    #popupCarouselModal .carousel-item img {
        max-width: 100%;
        /* max-height: 600px; */
        margin: auto;
        display: block;
    }

    #popupCarouselModal .modal-dialog {
        width: auto;
        max-width: fit-content;
        /* max-width: 600px; */
        /* bisa 500px atau sesuai ukuran gambar */
    }

    #carouselExampleIndicators .carousel-indicators {
        display: none;
    }
</style>

<body style="display: flex; flex-direction: column; min-height: 100%; margin: 0;">

    @include('baru.frontend.layouts._header')

    <main style="flex: 1;">
        @yield('content')
    </main>

    @include('baru.frontend.layouts._footer')


    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const checkbox = document.getElementById("languageToggle");

            // Set checkbox sesuai URL saat load
            if (window.location.pathname.includes("/locale/en")) {
                checkbox.checked = true;
            } else {
                checkbox.checked = false;
            }

            checkbox.addEventListener("change", () => {
                if (checkbox.checked) {
                    // Jika dinyalakan, pindah ke EN
                    window.location.href = "/locale/en";
                } else {
                    // Jika dimatikan, pindah ke ID
                    window.location.href = "/locale/id";
                }
            });
        });
    </script>
</body>

</html>
