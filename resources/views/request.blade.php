@include('layouts.header')

<head>
    <link rel="stylesheet" href="{{ asset('css/request.css') }}">
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
        <div class="content">
            <div class="form-wrapper">
                <form action="/request/process/{{ $product->id_product }}" class="register-form">
                    @csrf
                    <div class="greetings">
                        <h1>Form Pengajuan</h1>
                    </div>
                    <div class="input-wrapper">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" required autocomplete="off" placeholder="Masukan nama">
                        <label for="alamat">
                            Alamat Rumah
                            <span style="font-size: 14px; text-decoration: underline; color: var(--secondary-color);">sesuai dengan alamat yang terdaftar</span>
                        </label>
                        <input type="alamat" name="alamat" id="alamat" required autocomplete="off" placeholder="Masukan alamat rumah">
                        <label for="deskripsi">
                            Deskripsi Pengajuan
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_172_809" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                    <rect width="24" height="24" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_172_809)">
                                    <path d="M11.8273 17C12.2137 17 12.5404 16.8792 12.8072 16.6375C13.0741 16.3958 13.2075 16.1 13.2075 15.75C13.2075 15.4 13.0741 15.1042 12.8072 14.8625C12.5404 14.6208 12.2137 14.5 11.8273 14.5C11.4408 14.5 11.1142 14.6208 10.8473 14.8625C10.5805 15.1042 10.447 15.4 10.447 15.75C10.447 16.1 10.5805 16.3958 10.8473 16.6375C11.1142 16.8792 11.4408 17 11.8273 17ZM10.8335 13.15H12.8763C12.8763 12.8667 12.8901 12.625 12.9177 12.425C12.9453 12.225 13.0051 12.0333 13.0971 11.85C13.1891 11.6667 13.3041 11.4958 13.4421 11.3375C13.5802 11.1792 13.778 10.9833 14.0356 10.75C14.6798 10.1667 15.1352 9.67917 15.4021 9.2875C15.6689 8.89583 15.8023 8.45 15.8023 7.95C15.8023 7.06667 15.4711 6.35417 14.8086 5.8125C14.1461 5.27083 13.2535 5 12.1309 5C11.1188 5 10.2584 5.225 9.54989 5.675C8.84136 6.125 8.34908 6.75 8.07303 7.55L9.89494 8.2C10.0238 7.75 10.2814 7.3875 10.6679 7.1125C11.0543 6.8375 11.5052 6.7 12.0205 6.7C12.5174 6.7 12.9315 6.82083 13.2627 7.0625C13.594 7.30417 13.7596 7.625 13.7596 8.025C13.7596 8.30833 13.6584 8.60833 13.4559 8.925C13.2535 9.24167 12.9131 9.59167 12.4346 9.975C12.1217 10.2083 11.8687 10.4375 11.6754 10.6625C11.4822 10.8875 11.3212 11.125 11.1924 11.375C11.0635 11.625 10.9715 11.8875 10.9163 12.1625C10.8611 12.4375 10.8335 12.7667 10.8335 13.15ZM11.9377 23L8.62513 20H4.20838C3.60107 20 3.08118 19.8042 2.64871 19.4125C2.21624 19.0208 2 18.55 2 18V4C2 3.45 2.21624 2.97917 2.64871 2.5875C3.08118 2.19583 3.60107 2 4.20838 2H19.667C20.2743 2 20.7942 2.19583 21.2267 2.5875C21.6591 2.97917 21.8754 3.45 21.8754 4V18C21.8754 18.55 21.6591 19.0208 21.2267 19.4125C20.7942 19.8042 20.2743 20 19.667 20H15.2503L11.9377 23ZM4.20838 18H9.50848L11.9377 20.2L14.3669 18H19.667V4H4.20838V18Z" fill="#4C3BCF" />
                                </g>
                            </svg>
                        </label>
                        <textarea name="deskripsi" id="deskripsi" required autocomplete="off" placeholder="Masukan detail deskripsi"></textarea>
                        <label for="harga">
                            Tawaran Harga
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_172_809" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                    <rect width="24" height="24" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_172_809)">
                                    <path d="M11.8273 17C12.2137 17 12.5404 16.8792 12.8072 16.6375C13.0741 16.3958 13.2075 16.1 13.2075 15.75C13.2075 15.4 13.0741 15.1042 12.8072 14.8625C12.5404 14.6208 12.2137 14.5 11.8273 14.5C11.4408 14.5 11.1142 14.6208 10.8473 14.8625C10.5805 15.1042 10.447 15.4 10.447 15.75C10.447 16.1 10.5805 16.3958 10.8473 16.6375C11.1142 16.8792 11.4408 17 11.8273 17ZM10.8335 13.15H12.8763C12.8763 12.8667 12.8901 12.625 12.9177 12.425C12.9453 12.225 13.0051 12.0333 13.0971 11.85C13.1891 11.6667 13.3041 11.4958 13.4421 11.3375C13.5802 11.1792 13.778 10.9833 14.0356 10.75C14.6798 10.1667 15.1352 9.67917 15.4021 9.2875C15.6689 8.89583 15.8023 8.45 15.8023 7.95C15.8023 7.06667 15.4711 6.35417 14.8086 5.8125C14.1461 5.27083 13.2535 5 12.1309 5C11.1188 5 10.2584 5.225 9.54989 5.675C8.84136 6.125 8.34908 6.75 8.07303 7.55L9.89494 8.2C10.0238 7.75 10.2814 7.3875 10.6679 7.1125C11.0543 6.8375 11.5052 6.7 12.0205 6.7C12.5174 6.7 12.9315 6.82083 13.2627 7.0625C13.594 7.30417 13.7596 7.625 13.7596 8.025C13.7596 8.30833 13.6584 8.60833 13.4559 8.925C13.2535 9.24167 12.9131 9.59167 12.4346 9.975C12.1217 10.2083 11.8687 10.4375 11.6754 10.6625C11.4822 10.8875 11.3212 11.125 11.1924 11.375C11.0635 11.625 10.9715 11.8875 10.9163 12.1625C10.8611 12.4375 10.8335 12.7667 10.8335 13.15ZM11.9377 23L8.62513 20H4.20838C3.60107 20 3.08118 19.8042 2.64871 19.4125C2.21624 19.0208 2 18.55 2 18V4C2 3.45 2.21624 2.97917 2.64871 2.5875C3.08118 2.19583 3.60107 2 4.20838 2H19.667C20.2743 2 20.7942 2.19583 21.2267 2.5875C21.6591 2.97917 21.8754 3.45 21.8754 4V18C21.8754 18.55 21.6591 19.0208 21.2267 19.4125C20.7942 19.8042 20.2743 20 19.667 20H15.2503L11.9377 23ZM4.20838 18H9.50848L11.9377 20.2L14.3669 18H19.667V4H4.20838V18Z" fill="#4C3BCF" />
                                </g>
                            </svg>
                        </label>
                        <input type="text" inputmode="numeric" name="harga" id="harga" autocomplete="off" required placeholder="Rp. xxx.xxx.xxx.-">
                    </div>
                    <button type="submit">
                        Ajukan Penawaran
                        <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.75 17.25L11.825 15.2563L16.7063 10.375H0V7.625H16.7063L11.825 2.74375L13.75 0.75L22 9L13.75 17.25Z" fill="#FCF8F3" />
                        </svg>
                    </button>
            </div>
            </form>
            <div class="sidebar">
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
                                <h3>{{ $vendor->nama }}</h3>
                                <div class="ratings">
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.825 19L5.45 11.975L0 7.25L7.2 6.625L10 0L12.8 6.625L20 7.25L14.55 11.975L16.175 19L10 15.275L3.825 19Z" fill="#4C3BCF" />
                                    </svg>
                                    <p class="number">{{ $vendor->rating }}</p>
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
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="pricing">
                        <p>Mulai dari</p>
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
                                <path d="M7.93652 15.5L0.811523 8.375L2.59277 6.59375L7.93652 11.9375L19.4053 0.46875L21.1865 2.25L7.93652 15.5Z" fill="#4C3BCF" />
                            </svg>
                            Page/channel evaluation
                        </div>
                        <div class="ben-li">
                            <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.93652 15.5L0.811523 8.375L2.59277 6.59375L7.93652 11.9375L19.4053 0.46875L21.1865 2.25L7.93652 15.5Z" fill="#4C3BCF" />
                            </svg>
                            10 keywords/hashtags research
                        </div>
                        <div class="ben-li">
                            <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.93652 15.5L0.811523 8.375L2.59277 6.59375L7.93652 11.9375L19.4053 0.46875L21.1865 2.25L7.93652 15.5Z" fill="#4C3BCF" />
                            </svg>
                            5 social posts created
                        </div>
                        <div class="ben-li">
                            <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.93652 15.5L0.811523 8.375L2.59277 6.59375L7.93652 11.9375L19.4053 0.46875L21.1865 2.25L7.93652 15.5Z" fill="#4C3BCF" />
                            </svg>
                            Page/channel evaluation
                        </div>
                        <div class="ben-li">
                            <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.93652 15.5L0.811523 8.375L2.59277 6.59375L7.93652 11.9375L19.4053 0.46875L21.1865 2.25L7.93652 15.5Z" fill="#4C3BCF" />
                            </svg>
                            Custom graphics
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

@include('layouts.footer')