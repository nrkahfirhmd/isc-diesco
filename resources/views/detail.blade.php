@include('layouts.header')

<head>
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <nav>
        <div class="logo">
            <img src="{{ asset('images/dekorin.png') }}" alt="dekorin">
        </div>
    
        <div class="navigation">
            <div>Tentang Kami</div>
            <div>Layanan</div>
            <div>Bantuan</div>
            <form action="post" class="search-bar">
                <label for="search">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.6 18L10.3 11.7C9.8 12.1 9.225 12.4167 8.575 12.65C7.925 12.8833 7.23333 13 6.5 13C4.68333 13 3.14583 12.3708 1.8875 11.1125C0.629167 9.85417 0 8.31667 0 6.5C0 4.68333 0.629167 3.14583 1.8875 1.8875C3.14583 0.629167 4.68333 0 6.5 0C8.31667 0 9.85417 0.629167 11.1125 1.8875C12.3708 3.14583 13 4.68333 13 6.5C13 7.23333 12.8833 7.925 12.65 8.575C12.4167 9.225 12.1 9.8 11.7 10.3L18 16.6L16.6 18ZM6.5 11C7.75 11 8.8125 10.5625 9.6875 9.6875C10.5625 8.8125 11 7.75 11 6.5C11 5.25 10.5625 4.1875 9.6875 3.3125C8.8125 2.4375 7.75 2 6.5 2C5.25 2 4.1875 2.4375 3.3125 3.3125C2.4375 4.1875 2 5.25 2 6.5C2 7.75 2.4375 8.8125 3.3125 9.6875C4.1875 10.5625 5.25 11 6.5 11Z"
                            fill="#4C3BCF" />
                    </svg>
                </label>
                <input type="text" name="search" id="search" placeholder="Roof, kitchen, etc.">
                <button>
                    Cari
                </button>
            </form>
            <div class="with-icon">
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.74967 25.5C8.16634 24.4166 9.74967 23.5625 11.4997 22.9375C13.2497 22.3125 15.083 22 16.9997 22C18.9163 22 20.7497 22.3125 22.4997 22.9375C24.2497 23.5625 25.833 24.4166 27.2497 25.5C28.2219 24.3611 28.9788 23.0694 29.5205 21.625C30.0622 20.1805 30.333 18.6389 30.333 17C30.333 13.3055 29.0344 10.1597 26.4372 7.56248C23.84 4.96526 20.6941 3.66665 16.9997 3.66665C13.3052 3.66665 10.1594 4.96526 7.56217 7.56248C4.96495 10.1597 3.66634 13.3055 3.66634 17C3.66634 18.6389 3.93717 20.1805 4.47884 21.625C5.02051 23.0694 5.77745 24.3611 6.74967 25.5ZM16.9997 18.6666C15.3608 18.6666 13.9788 18.1041 12.8538 16.9791C11.7288 15.8541 11.1663 14.4722 11.1663 12.8333C11.1663 11.1944 11.7288 9.81248 12.8538 8.68748C13.9788 7.56248 15.3608 6.99998 16.9997 6.99998C18.6386 6.99998 20.0205 7.56248 21.1455 8.68748C22.2705 9.81248 22.833 11.1944 22.833 12.8333C22.833 14.4722 22.2705 15.8541 21.1455 16.9791C20.0205 18.1041 18.6386 18.6666 16.9997 18.6666ZM16.9997 33.6666C14.6941 33.6666 12.5275 33.2291 10.4997 32.3541C8.4719 31.4791 6.70801 30.2916 5.20801 28.7916C3.70801 27.2916 2.52051 25.5278 1.64551 23.5C0.770508 21.4722 0.333008 19.3055 0.333008 17C0.333008 14.6944 0.770508 12.5278 1.64551 10.5C2.52051 8.4722 3.70801 6.70831 5.20801 5.20831C6.70801 3.70831 8.4719 2.52081 10.4997 1.64581C12.5275 0.770813 14.6941 0.333313 16.9997 0.333313C19.3052 0.333313 21.4719 0.770813 23.4997 1.64581C25.5275 2.52081 27.2913 3.70831 28.7913 5.20831C30.2913 6.70831 31.4788 8.4722 32.3538 10.5C33.2288 12.5278 33.6663 14.6944 33.6663 17C33.6663 19.3055 33.2288 21.4722 32.3538 23.5C31.4788 25.5278 30.2913 27.2916 28.7913 28.7916C27.2913 30.2916 25.5275 31.4791 23.4997 32.3541C21.4719 33.2291 19.3052 33.6666 16.9997 33.6666ZM16.9997 30.3333C18.4719 30.3333 19.8608 30.118 21.1663 29.6875C22.4719 29.2569 23.6663 28.6389 24.7497 27.8333C23.6663 27.0278 22.4719 26.4097 21.1663 25.9791C19.8608 25.5486 18.4719 25.3333 16.9997 25.3333C15.5275 25.3333 14.1386 25.5486 12.833 25.9791C11.5275 26.4097 10.333 27.0278 9.24967 27.8333C10.333 28.6389 11.5275 29.2569 12.833 29.6875C14.1386 30.118 15.5275 30.3333 16.9997 30.3333ZM16.9997 15.3333C17.7219 15.3333 18.3191 15.0972 18.7913 14.625C19.2636 14.1528 19.4997 13.5555 19.4997 12.8333C19.4997 12.1111 19.2636 11.5139 18.7913 11.0416C18.3191 10.5694 17.7219 10.3333 16.9997 10.3333C16.2775 10.3333 15.6802 10.5694 15.208 11.0416C14.7358 11.5139 14.4997 12.1111 14.4997 12.8333C14.4997 13.5555 14.7358 14.1528 15.208 14.625C15.6802 15.0972 16.2775 15.3333 16.9997 15.3333Z"
                        fill="#2F2F2F" />
                </svg>
                Profile
            </div>
            <div class="with-icon">
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.667 33.3333C9.75033 33.3333 8.9656 33.0069 8.31283 32.3542C7.66005 31.7014 7.33366 30.9167 7.33366 30C7.33366 29.0833 7.66005 28.2986 8.31283 27.6458C8.9656 26.9931 9.75033 26.6667 10.667 26.6667C11.5837 26.6667 12.3684 26.9931 13.0212 27.6458C13.6739 28.2986 14.0003 29.0833 14.0003 30C14.0003 30.9167 13.6739 31.7014 13.0212 32.3542C12.3684 33.0069 11.5837 33.3333 10.667 33.3333ZM27.3337 33.3333C26.417 33.3333 25.6323 33.0069 24.9795 32.3542C24.3267 31.7014 24.0003 30.9167 24.0003 30C24.0003 29.0833 24.3267 28.2986 24.9795 27.6458C25.6323 26.9931 26.417 26.6667 27.3337 26.6667C28.2503 26.6667 29.035 26.9931 29.6878 27.6458C30.3406 28.2986 30.667 29.0833 30.667 30C30.667 30.9167 30.3406 31.7014 29.6878 32.3542C29.035 33.0069 28.2503 33.3333 27.3337 33.3333ZM9.25033 6.66667L13.2503 15H24.917L29.5003 6.66667H9.25033ZM7.66699 3.33333H32.2503C32.8892 3.33333 33.3753 3.61806 33.7087 4.1875C34.042 4.75694 34.0559 5.33333 33.7503 5.91667L27.8337 16.5833C27.5281 17.1389 27.1184 17.5694 26.6045 17.875C26.0906 18.1806 25.5281 18.3333 24.917 18.3333H12.5003L10.667 21.6667H30.667V25H10.667C9.41699 25 8.47255 24.4514 7.83366 23.3542C7.19477 22.2569 7.16699 21.1667 7.75033 20.0833L10.0003 16L4.00033 3.33333H0.666992V0H6.08366L7.66699 3.33333Z"
                        fill="#2F2F2F" />
                </svg>
                Cart
            </div>
        </div>
    </nav>

    <main>
        <div class="back">
            <div class="the-text">
                <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.75 0.749999L10.675 2.74375L5.79375 7.625L22.5 7.625L22.5 10.375L5.79375 10.375L10.675 15.2562L8.75 17.25L0.500001 9L8.75 0.749999Z"
                        fill="#2F2F2F" />
                </svg>
                Kembali
            </div>
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
                        <a href="/request">
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
                            <a href="/ask">
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
</body>

@include('layouts.footer')