<div class="container">
    <!-- Sosmed -->
    <div class="sosmed d-flex justify-content-between align-items-center" style="margin-top: 10px">
        <ul class="d-flex align-items-center mb-0 ms-auto" style="list-style: none; padding-left: 0; margin-bottom: 0;">
            <li><a href="{{ route('kontakupdate') }}"><img src="{{ asset('images/kontak-small.png') }}"
                        alt="kontak"></a></a>
            </li>
            <li><a href="https://www.youtube.com/@YuriDee2" target="_blank"><img
                        src="{{ asset('images/youtube-small.png') }}" alt="Youtube"></a></a></li>
            <li><a href="https://www.instagram.com/yurihousehold/" target="_blank"><img
                        src="{{ asset('images/instagram-small.png') }}" alt="Instagram"></a></a></li>
            <li><a href="https://web.facebook.com/p/Yuri-Household-61556415279542/?_rdc=1&_rdr" target="_blank"><img
                        src="{{ asset('images/fb-small.png') }}" alt="Fb"></a></a></li>
            <li><a href="https://www.tiktok.com/@yurihousehold" target="_blank"><img
                        src="{{ asset('images/tiktok-small.png') }}" alt="Tiktok"></a></li>
        </ul>

        <!-- Toggle Bahasa -->
        {{-- <div class="lang-toggle">
            <input type="checkbox" id="languageToggle" />
            <label for="languageToggle" class="toggle-btn">
                <span class="label-en" style="padding-left: 5px;">EN</span>
                <span class="label-id">ID</span>
                <div class="slider"></div>
            </label>
        </div> --}}
        {{-- <div class="lang-toggle" style="margin-right: 20px; margin-left:10px">
            <input type="checkbox" id="languageToggle">
            <label for="languageToggle" class="toggle-btn">
                <span class="label-en">EN</span>
                <span class="label-id">ID</span>
            </label>
        </div> --}}
    </div>

    {{-- <div class="sosmed d-flex align-items-center">
        <ul class="d-flex align-items-center mb-0" style="list-style: none; padding-left: 0;">
            <li>
                <a href="https://www.tiktok.com/@yurihousehold" target="_blank">
                    <img src="{{ asset('images/tiktok-small.png') }}" alt="Tiktok">
                </a>
            </li>
            <li>
                <a href="https://web.facebook.com/p/Yuri-Household-61556415279542/" target="_blank">
                    <img src="{{ asset('images/fb-small.png') }}" alt="Facebook">
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/yurihousehold/" target="_blank">
                    <img src="{{ asset('images/instagram-small.png') }}" alt="Instagram">
                </a>
            </li>
            <li>
                <a href="https://twitter.com/" target="_blank">
                    <img src="{{ asset('images/twitter-small.png') }}" alt="Twitter">
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/@YuriDee2" target="_blank">
                    <img src="{{ asset('images/youtube-small.png') }}" alt="Youtube">
                </a>
            </li>
            <li>
                <a href="{{ route('index.kontak') }}">
                    <span style="font-weight: bold; color: #0066cc;">KONTAK</span>
                </a>
            </li>
        </ul>

        <!-- Toggle -->
        <div class="language-switch ms-3">
            <label class="lang-toggle">
                <input type="checkbox" id="languageToggle">
                <span class="toggle-labels" data-on="EN" data-off="ID"></span>
            </label>
        </div>
    </div> --}}

    {{-- <div class="sosmed mb-2">
        <ul>
            <li><a href="{{ route('index.kontak') }}"><img src="{{ asset('images/kontak-small.png') }}"
                        alt="kontak"></a></a>
            </li>
            <li><a href="https://www.youtube.com/@YuriDee2" target="_blank"><img
                        src="{{ asset('images/youtube-small.png') }}" alt="Youtube"></a></a></li>
            <li><a href="https://www.instagram.com/yurihousehold/" target="_blank"><img
                        src="{{ asset('images/instagram-small.png') }}" alt="Instagram"></a></a></li>
            <li><a href="https://web.facebook.com/p/Yuri-Household-61556415279542/?_rdc=1&_rdr" target="_blank"><img
                        src="{{ asset('images/fb-small.png') }}" alt="Fb"></a></a></li>
            <li><a href="https://www.tiktok.com/@yurihousehold" target="_blank"><img
                        src="{{ asset('images/tiktok-small.png') }}" alt="Tiktok"></a></li>
        </ul>
    </div> --}}
    <!-- End Sosmed -->

    <!-- Navbar Menu -->
    <div class="menubar">
        <nav class="navbar navbar-expand-lg bg-body-white">
            <div class="container-fluid">
                <a href="{{ route('indexupdate') }}"><img src="{{ asset('images/logo-8.png') }}" width="100px"
                        height="50px" alt="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fw-bold {{ request()->routeIs('indexupdate') ? 'active' : '' }}"
                                aria-current="page" href="{{ route('indexupdate') }}"
                                style="color: #005EB8">@lang('message.HOME')</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link fw-bold {{ request()->routeIs('tentangkamiupdate') ? 'active' : '' }}"
                                aria-current="page" href="{{ route('tentangkamiupdate') }}"
                                style="color: #005EB8">@lang('message.TENTANGKAMI')</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold {{ request()->routeIs('brandsupdate') ? 'active' : '' }}"
                                aria-current="page" href="{{ route('brandsupdate') }}"
                                style="color: #005EB8">@lang('message.BRANDS')</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" style="color: #005EB8">
                                @lang('message.ONLINESHOP')
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://shopee.co.id/yuriofficialshop"
                                        target="_blank">SHOPEE</a></li>
                                <li><a class="dropdown-item" href="https://www.tokopedia.com/yuri-official"
                                        target="_blank">TOKOPEDIA</a></li>
                                <li><a class="dropdown-item"
                                        href="https://www.lazada.co.id/shop/yuri-official-store/?spm=a2o4j.pdp_revamp.seller.1.28fa76118mbGvu&itemId=1769620279&channelSource=pdp"
                                        target="_blank">LAZADA</a></li>
                                <li><a class="dropdown-item" href="https://www.blibli.com/brand/yuri-official-store"
                                        target="_blank">BLIBLI</a></li>
                                <li><a class="dropdown-item" href="https://www.yurrouteIshop.co/id/"
                                        target="_blank">YURI
                                        SHOP</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold {{ request()->routeIs('artikelupdate') ? 'active' : '' }}"
                                aria-current="page" href="{{ route('artikelupdate') }}" style="color: #005EB8">ARTIKEL
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold {{ request()->routeIs('mediaupdate') ? 'active' : '' }}"
                                aria-current="page" href="{{ route('mediaupdate') }}"
                                style="color: #005EB8">@lang('message.MEDIA')</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold {{ request()->routeIs('produkbaruupdate') ? 'active' : '' }}"
                                aria-current="page" href="{{ route('produkbaruupdate') }}"
                                style="color: #005EB8">@lang('message.PRODUKBARU')</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold {{ request()->routeIs('kontakupdate') ? 'active' : '' }}"
                                aria-current="page" href="{{ route('kontakupdate') }}"
                                style="color: #005EB8">@lang('message.KONTAK')</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold {{ request()->routeIs('distributorupdate') ? 'active' : '' }}"
                                aria-current="page" href="{{ route('distributorupdate') }}"
                                style="color: #005EB8">@lang('message.DISTRIBUTOR')</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold {{ request()->routeIs('eventupdate') ? 'active' : '' }}"
                                aria-current="page" href="{{ route('eventupdate') }}"
                                style="color: #005EB8">EVENT</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--End Navbar Menu-->

    <!-- Start Button Language -->
    <div class="language mt-1 mb-2" style="display:flex; justify-content:flex-end; margin-top:-9px">
        <div class="btn-group">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false" style="padding-top: 1px">
                <span style="font-size: 11px;">Language</span>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="locale/id">Indonesia</a></li>
                <li><a class="dropdown-item" href="locale/en">English</a></li>
            </ul>
        </div>
    </div>
    <!-- End Button Language -->

</div>
