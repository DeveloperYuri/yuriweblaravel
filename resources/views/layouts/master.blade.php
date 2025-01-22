<!DOCTYPE html>
<html lang="en">

@yield('head')

<style>
    h1 {
        font-family: "Oswald", sans-serif;
        font-optical-sizing: auto;
        font-weight: bold;
        font-style: normal;
    }
</style>

<body>

    <div class="container-fluid pb-2">
        <div class="container">
            <!-- Sosmed -->
            <div class="sosmed mb-2">
                <ul>
                    <li><a href="{{ route('index.kontak') }}"><img src="{{ asset('images/kontak-small.png') }}" alt="kontak"></a></a>
                    </li>
                    <li><a href="https://www.youtube.com/@YuriDee2" target="_blank"><img
                                src="{{ asset('images/youtube-small.png') }}" alt="Youtube"></a></a></li>
                    <li><a href="https://www.instagram.com/yurihousehold/" target="_blank"><img
                                src="{{ asset('images/instagram-small.png') }}" alt="Instagram"></a></a></li>
                    <li><a href="https://web.facebook.com/p/Yuri-Household-61556415279542/?_rdc=1&_rdr"
                            target="_blank"><img src="{{ asset('images/fb-small.png') }}" alt="Fb"></a></a></li>
                    <li><a href="https://www.tiktok.com/@yurihousehold" target="_blank"><img
                                src="{{ asset('images/tiktok-small.png') }}" alt="Tiktok"></a></li>
                </ul>
            </div>
            <!-- End Sosmed -->

            @yield('navbar')

        </div>
    </div>

    <!-- Container -->

    @yield('content')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
</body>

</html>
