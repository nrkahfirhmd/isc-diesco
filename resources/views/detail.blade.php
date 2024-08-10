@include('layouts.header')

<head>
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <main>
        <div class="back">
            <a href="/home" class="the-text">
                <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.75 0.749999L10.675 2.74375L5.79375 7.625L22.5 7.625L22.5 10.375L5.79375 10.375L10.675 15.2562L8.75 17.25L0.500001 9L8.75 0.749999Z"
                        fill="#2F2F2F" />
                </svg>
                Kembali
            </a>
            <div>
                Kategori : Kitchen Set
            </div>
        </div>

        <div class="content">
            <div class="detail">
                <div class="showcase">
                    <div class="main-image">
                        <img src="data:image/png;base64,{{ $product->banner }}" alt="banner">
                    </div>
                    <div class="other-image no-scrollbar">
                        <div class="img-list">
                            <img src="data:image/png;base64,{{ $product->banner }}" alt="banner">
                        </div>
                        <div class="img-list">
                            <img src="data:image/png;base64,{{ $product->banner }}" alt="banner">
                        </div>
                        <div class="img-list">
                            <img src="data:image/png;base64,{{ $product->banner }}" alt="banner">
                        </div>
                        <div class="img-list">
                            <img src="data:image/png;base64,{{ $product->banner }}" alt="banner">
                        </div>
                    </div>
                </div>
                <div class="from-vendor">
                    <h1 class="header">Lainnya Dari <span style="text-decoration: underline;">{{ $vendor->nama }}</span></h1>
                    <div class="service-list no-scrollbar">
                        @foreach ($vendorProducts as $venduct)
                        <a class="service" href="/detail/{{ $venduct->id_product }}">
                            <div class="image">
                                <img src="data:image/png;base64,{{ $venduct->banner }}" alt="service">
                            </div>
                            <div class="info">
                                <div class="name">{{ $venduct->nama }}</div>
                                <div class="brief">{{ $venduct->deskripsi }}</div>
                                <div class="ratings">
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.825 19L5.45 11.975L0 7.25L7.2 6.625L10 0L12.8 6.625L20 7.25L14.55 11.975L16.175 19L10 15.275L3.825 19Z"
                                            fill="#4C3BCF" />
                                    </svg>
                                    <p class="number">4.9</p>
                                    <p class="total">(20+)</p>
                                </div>
                                <div class="price">Mulai dari Rp.{{ str_replace(',', '.', number_format($venduct->harga, 2)) }},-</div>
                                <div class="category">
                                    <p>Kitchen Set</p>
                                    <div class="selengkapnya">
                                        Selengkapnya
                                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 12L8.6 10.55L12.15 7H0V5H12.15L8.6 1.45L10 0L16 6L10 12Z" fill="url(#paint0_linear_125_133)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_125_133" x1="8" y1="0" x2="8" y2="12" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#BEAAFF" />
                                                    <stop offset="1" stop-color="#4C3BCF" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                <div class="relevant">
                    <h1 class="header">Jasa Lain</h1>
                    <div class="service-list no-scrollbar">
                        @foreach ($products as $otherProduct)
                        <a class="service" href="/detail/{{ $otherProduct->id_product }}">
                            <div class="image">
                                <img src="data:image/png;base64,{{ $otherProduct->banner }}" alt="service">
                            </div>
                            <div class="info">
                                <div class="name">{{ $otherProduct->nama }}</div>
                                <div class="brief">{{ $otherProduct->deskripsi }}</div>
                                <div class="ratings">
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.825 19L5.45 11.975L0 7.25L7.2 6.625L10 0L12.8 6.625L20 7.25L14.55 11.975L16.175 19L10 15.275L3.825 19Z"
                                            fill="#4C3BCF" />
                                    </svg>
                                    <p class="number">4.9</p>
                                    <p class="total">(20+)</p>
                                </div>
                                <div class="price">Mulai dari Rp.{{ str_replace(',', '.', number_format($otherProduct->harga, 2)) }},-</div>
                                <div class="category">
                                    <p>Kitchen Set</p>
                                    <div class="selengkapnya">
                                        Selengkapnya
                                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 12L8.6 10.55L12.15 7H0V5H12.15L8.6 1.45L10 0L16 6L10 12Z" fill="url(#paint0_linear_125_133)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_125_133" x1="8" y1="0" x2="8" y2="12" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#BEAAFF" />
                                                    <stop offset="1" stop-color="#4C3BCF" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="sidebar">
                <div class="product">
                    <div class="pricing">
                        <p>Mulai Dari</p>
                        <div class="price">
                            Rp.{{ str_replace(',', '.', number_format($product->harga, 2)) }},-
                        </div>
                        <div class="discount">
                            Diskon <span style="font-weight: 600;">15%</span> dengan <span style="color: var(--secondary-color); text-decoration: underline;">Paket Jamilah</span>
                        </div>
                    </div>
                    <div class="benefit">
                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 12V10H6V12H0ZM0 7V5H12V7H0ZM0 2V0H18V2H0Z" fill="#2F2F2F" />
                        </svg>
                        Yang kamu dapatkan
                    </div>
                    <div class="benefit-list">
                        <div class="ben-li">
                            <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.93652 15.5L0.811523 8.375L2.59277 6.59375L7.93652 11.9375L19.4053 0.46875L21.1865 2.25L7.93652 15.5Z"
                                    fill="#4C3BCF" />
                            </svg>
                            Page/channel evaluation
                        </div>
                        <div class="ben-li">
                            <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.93652 15.5L0.811523 8.375L2.59277 6.59375L7.93652 11.9375L19.4053 0.46875L21.1865 2.25L7.93652 15.5Z"
                                    fill="#4C3BCF" />
                            </svg>
                            10 keywords/hashtags research
                        </div>
                        <div class="ben-li">
                            <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.93652 15.5L0.811523 8.375L2.59277 6.59375L7.93652 11.9375L19.4053 0.46875L21.1865 2.25L7.93652 15.5Z"
                                    fill="#4C3BCF" />
                            </svg>
                            5 social posts created
                        </div>
                        <div class="ben-li">
                            <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.93652 15.5L0.811523 8.375L2.59277 6.59375L7.93652 11.9375L19.4053 0.46875L21.1865 2.25L7.93652 15.5Z"
                                    fill="#4C3BCF" />
                            </svg>
                            Page/channel evaluation
                        </div>
                        <div class="ben-li">
                            <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.93652 15.5L0.811523 8.375L2.59277 6.59375L7.93652 11.9375L19.4053 0.46875L21.1865 2.25L7.93652 15.5Z"
                                    fill="#4C3BCF" />
                            </svg>
                            Custom graphics
                        </div>
                    </div>
                    <div class="buy">
                        <a href="/request/{{ $product->id_product }}">
                            Ajukan Penawaran
                            <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.75 17.25L11.825 15.2563L16.7063 10.375H0V7.625H16.7063L11.825 2.74375L13.75 0.75L22 9L13.75 17.25Z"
                                    fill="#FCF8F3" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="vendor">
                    <div class="splash">
                        <img src="/images/splash.png" alt="splash">
                    </div>
                    <div class="info">
                        <div class="prof-wrapper">
                            <div class="photo">
                                <img src="data:image/png;base64,{{ $vendor->photo }}" alt="vendor">
                            </div>
                            <div class="name">
                                <h2>{{ $vendor->nama }}</h2>
                                <div class="ratings">
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.825 19L5.45 11.975L0 7.25L7.2 6.625L10 0L12.8 6.625L20 7.25L14.55 11.975L16.175 19L10 15.275L3.825 19Z"
                                            fill="#4C3BCF" />
                                    </svg>
                                    <p class="number"> {{ $vendor->rating }} </p>
                                </div>
                            </div>
                        </div>
                        <div class="persuasive">
                            Hubungi vendor dengan jaminan dibalas 1x24 Jam
                        </div>
                        <div class="ask">
                            <a href="/ask/{{ $product->id_product }}">
                                Tanya vendor
                                <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.125 13.125H13.625V11H5.125V13.125ZM5.125 9.9375H17.875V7.8125H5.125V9.9375ZM5.125 6.75H17.875V4.625H5.125V6.75ZM0.875 21.625V2.5C0.875 1.91562 1.08307 1.41536 1.49922 0.999219C1.91536 0.583073 2.41562 0.375 3 0.375H20C20.5844 0.375 21.0846 0.583073 21.5008 0.999219C21.9169 1.41536 22.125 1.91562 22.125 2.5V15.25C22.125 15.8344 21.9169 16.3346 21.5008 16.7508C21.0846 17.1669 20.5844 17.375 20 17.375H5.125L0.875 21.625ZM4.22188 15.25H20V2.5H3V16.4453L4.22188 15.25Z"
                                        fill="#4C3BCF" />
                                </svg>
                            </a>
                            <div class="report">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5 11.4583C7.72431 11.4583 7.91233 11.3825 8.06406 11.2307C8.2158 11.079 8.29167 10.891 8.29167 10.6667C8.29167 10.4424 8.2158 10.2543 8.06406 10.1026C7.91233 9.95087 7.72431 9.875 7.5 9.875C7.27569 9.875 7.08767 9.95087 6.93594 10.1026C6.7842 10.2543 6.70833 10.4424 6.70833 10.6667C6.70833 10.891 6.7842 11.079 6.93594 11.2307C7.08767 11.3825 7.27569 11.4583 7.5 11.4583ZM6.70833 8.29167H8.29167V3.54167H6.70833V8.29167ZM4.53125 14.625L0.375 10.4688V4.53125L4.53125 0.375H10.4688L14.625 4.53125V10.4688L10.4688 14.625H4.53125ZM5.20417 13.0417H9.79583L13.0417 9.79583V5.20417L9.79583 1.95833H5.20417L1.95833 5.20417V9.79583L5.20417 13.0417Z"
                                        fill="#9A9A9A" />
                                </svg>
                                Vendor tidak membalas dalam 24 jam
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </main>

    <script src="/js/drag.js"></script>
</body>

@include('layouts.footer')