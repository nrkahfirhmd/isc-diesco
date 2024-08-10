@include('layouts.header')

<head>
    <link rel="stylesheet" href="{{ asset('css/ask.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <main>
        <a href="/detail/{{ $product->id_product }}" class="back">
            <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.75 0.749999L10.675 2.74375L5.79375 7.625L22.5 7.625L22.5 10.375L5.79375 10.375L10.675 15.2562L8.75 17.25L0.500001 9L8.75 0.749999Z"
                    fill="#2F2F2F" />
            </svg>
            Kembali
        </a>

        <div class="container">
            <div class="image-wrapper">
                <img src="{{ asset('images/splash.png') }}" alt="ask">
            </div>
            <div class="main-wrapper">
                <div class="preview">
                    <div class="image-product">
                        <img src="data:image/png;base64,{{ $product->banner }}" alt="banner">
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
                    </div>
                    <div class="about-product">
                        <div class="pricing">
                            <p>Mulai Dari</p>
                            <div class="price">
                                Rp.{{ str_replace(',', '.', number_format($product->harga, 2)) }},-
                            </div>
                            <div class="discount">
                                Diskon <span style="font-weight: 600;">15%</span> dengan <span
                                    style="color: var(--secondary-color); text-decoration: underline;">Paket Jamilah</span>
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
                                    <path
                                        d="M7.93652 15.5L0.811523 8.375L2.59277 6.59375L7.93652 11.9375L19.4053 0.46875L21.1865 2.25L7.93652 15.5Z"
                                        fill="#4C3BCF" />
                                </svg>
                                Page/channel evaluation
                            </div>
                            <div class="ben-li">
                                <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.93652 15.5L0.811523 8.375L2.59277 6.59375L7.93652 11.9375L19.4053 0.46875L21.1865 2.25L7.93652 15.5Z"
                                        fill="#4C3BCF" />
                                </svg>
                                10 keywords/hashtags research
                            </div>
                            <div class="ben-li">
                                <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.93652 15.5L0.811523 8.375L2.59277 6.59375L7.93652 11.9375L19.4053 0.46875L21.1865 2.25L7.93652 15.5Z"
                                        fill="#4C3BCF" />
                                </svg>
                                5 social posts created
                            </div>
                            <div class="ben-li">
                                <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.93652 15.5L0.811523 8.375L2.59277 6.59375L7.93652 11.9375L19.4053 0.46875L21.1865 2.25L7.93652 15.5Z"
                                        fill="#4C3BCF" />
                                </svg>
                                Page/channel evaluation
                            </div>
                            <div class="ben-li">
                                <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.93652 15.5L0.811523 8.375L2.59277 6.59375L7.93652 11.9375L19.4053 0.46875L21.1865 2.25L7.93652 15.5Z"
                                        fill="#4C3BCF" />
                                </svg>
                                Custom graphics
                            </div>
                        </div>
                        <div class="buy">
                            <a href="/request/{{ $product->id_product }}">
                                Ajukan Penawaran
                                <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.75 17.25L11.825 15.2563L16.7063 10.375H0V7.625H16.7063L11.825 2.74375L13.75 0.75L22 9L13.75 17.25Z"
                                        fill="#FCF8F3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <form action="/ask/process/{{ $product->id_product }}" class="form-wrapper">
                    <label for="question">
                        Pertanyaan
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.82727 15C10.2137 15 10.5404 14.8792 10.8072 14.6375C11.0741 14.3958 11.2075 14.1 11.2075 13.75C11.2075 13.4 11.0741 13.1042 10.8072 12.8625C10.5404 12.6208 10.2137 12.5 9.82727 12.5C9.44081 12.5 9.11415 12.6208 8.84731 12.8625C8.58046 13.1042 8.44704 13.4 8.44704 13.75C8.44704 14.1 8.58046 14.3958 8.84731 14.6375C9.11415 14.8792 9.44081 15 9.82727 15ZM8.8335 11.15H10.8763C10.8763 10.8667 10.8901 10.625 10.9177 10.425C10.9453 10.225 11.0051 10.0333 11.0971 9.85C11.1891 9.66667 11.3041 9.49583 11.4421 9.3375C11.5802 9.17917 11.778 8.98333 12.0356 8.75C12.6798 8.16667 13.1352 7.67917 13.4021 7.2875C13.6689 6.89583 13.8023 6.45 13.8023 5.95C13.8023 5.06667 13.4711 4.35417 12.8086 3.8125C12.1461 3.27083 11.2535 3 10.1309 3C9.11875 3 8.25841 3.225 7.54989 3.675C6.84136 4.125 6.34908 4.75 6.07303 5.55L7.89494 6.2C8.02377 5.75 8.28141 5.3875 8.66788 5.1125C9.05434 4.8375 9.50522 4.7 10.0205 4.7C10.5174 4.7 10.9315 4.82083 11.2627 5.0625C11.594 5.30417 11.7596 5.625 11.7596 6.025C11.7596 6.30833 11.6584 6.60833 11.4559 6.925C11.2535 7.24167 10.9131 7.59167 10.4346 7.975C10.1217 8.20833 9.86868 8.4375 9.67545 8.6625C9.48221 8.8875 9.32119 9.125 9.19236 9.375C9.06354 9.625 8.97153 9.8875 8.91632 10.1625C8.86111 10.4375 8.8335 10.7667 8.8335 11.15ZM9.93769 21L6.62513 18H2.20838C1.60107 18 1.08118 17.8042 0.64871 17.4125C0.216237 17.0208 0 16.55 0 16V2C0 1.45 0.216237 0.979167 0.64871 0.5875C1.08118 0.195833 1.60107 0 2.20838 0H17.667C18.2743 0 18.7942 0.195833 19.2267 0.5875C19.6591 0.979167 19.8754 1.45 19.8754 2V16C19.8754 16.55 19.6591 17.0208 19.2267 17.4125C18.7942 17.8042 18.2743 18 17.667 18H13.2503L9.93769 21ZM2.20838 16H7.50848L9.93769 18.2L12.3669 16H17.667V2H2.20838V16Z"
                                fill="#4C3BCF" />
                        </svg>
                    </label>
                    <textarea name="question" id="question" placeholder="Tuliskan pertanyaan disini"></textarea>
                    <button type="submit">
                        Kirim Pesan
                        <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 16V0L19 8L0 16ZM2 13L13.85 8L2 3V6.5L8 8L2 9.5V13Z" fill="#FCF8F3" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </main>
</body>

@include('layouts.footer')