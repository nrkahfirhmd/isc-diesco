@include('layouts.header')

<head>
    <link rel="stylesheet" href=" {{ asset('css/landing.css') }} ">
</head>

<body>  
    <nav class="navbar">
        <a href="" class="logo">
            <img src="/images/dekorin.png" alt="Dekorin">
        </a>
        <div class="nav-items">
            <div class="links">
                <a href="">Tentang kami</a>
                <a href="">Layanan</a>
                <a href="">Bantuan</a>
            </div>
            <a href="/register">
                <button class="sign-in">Daftar</button>
            </a>
            <a href="/login">
                <button class="sign-up">Masuk</button>
            </a>
        </div>
    </nav>

    <section class="hero">
        <img src="{{ asset('images/dekorin-white.png') }}" alt="dekorin" class="hero-logo">
        <div class="hero-content">
            <div class="tagline">
                <h1>Ciptakan <span class="highlight">Keindahan</span> di Setiap Sudut Rumah</h1>
                <p>Temukan Ahli Dengan Beragam Keahlian Sesuai Kebutuhan Anda</p>
            </div>
            <div class="searching">
                <form action="post" class="search-bar">
                    <label for="search">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.6 18L10.3 11.7C9.8 12.1 9.225 12.4167 8.575 12.65C7.925 12.8833 7.23333 13 6.5 13C4.68333 13 3.14583 12.3708 1.8875 11.1125C0.629167 9.85417 0 8.31667 0 6.5C0 4.68333 0.629167 3.14583 1.8875 1.8875C3.14583 0.629167 4.68333 0 6.5 0C8.31667 0 9.85417 0.629167 11.1125 1.8875C12.3708 3.14583 13 4.68333 13 6.5C13 7.23333 12.8833 7.925 12.65 8.575C12.4167 9.225 12.1 9.8 11.7 10.3L18 16.6L16.6 18ZM6.5 11C7.75 11 8.8125 10.5625 9.6875 9.6875C10.5625 8.8125 11 7.75 11 6.5C11 5.25 10.5625 4.1875 9.6875 3.3125C8.8125 2.4375 7.75 2 6.5 2C5.25 2 4.1875 2.4375 3.3125 3.3125C2.4375 4.1875 2 5.25 2 6.5C2 7.75 2.4375 8.8125 3.3125 9.6875C4.1875 10.5625 5.25 11 6.5 11Z" fill="#4C3BCF" />
                        </svg>
                    </label>
                    <input type="text" name="search" id="search" placeholder="Roof, kitchen, etc." autocomplete="off">
                    <button>
                        Cari
                    </button>
                </form>
                <div class="popular-searches">
                    <span>Pencarian Populer:</span>
                    <a href="#">Kitchen Set</a>
                    <a href="#">Interior Design</a>
                    <a href="#">Roofing</a>
                    <a href="#">Carpentry</a>
                </div>
            </div>
        </div>
    </section>

    <div class="card-list">
        <div class="card">
            <img src="{{ asset('images/cardlist/floor-lamp.png') }}" alt="floor lamp">
            <div class="card-content">
                <h3>Desain Interior</h3>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/cardlist/shower.png') }}" alt="shower">
            <div class="card-content">
                <h3>Kamar Mandi</h3>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/cardlist/sofa.png') }}" alt="sofa">
            <div class="card-content">
                <h3>Ruang Keluarga</h3>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/cardlist/grass.png') }}" alt="grass">
            <div class="card-content">
                <h3>Taman</h3>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/cardlist/microwave.png') }}" alt="microwave">
            <div class="card-content">
                <h3>Kitchen Set</h3>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/cardlist/gite.png') }}" alt="gite">
            <div class="card-content">
                <h3>Spesialis Atap</h3>
            </div>
        </div>
    </div>

    <div class="market">
        <div class="title">
            <h1>Kenapa Memilih Kami?</h1>
        </div>
        <div class="desc-list">
            <div class="desc">
                <img src="{{ asset('images/desc/diversity.png') }}" alt="diversity">
                <div class="desc-content">
                    <h2>Pengalaman dan Profesionalisme</h2>
                    <p>Kami berkomitmen untuk memberikan layanan berkualitas tinggi
                        dengan perhatian terhadap detail. Setiap proyek yang kami
                        tangani dijalankan dengan standar tertinggi untuk memastikan
                        kepuasan pelanggan.</p>
                </div>
            </div>
            <div class="desc">
                <img src="{{ asset('images/desc/star.png') }}" alt="star">
                <div class="desc-content">
                    <h2>Kualitas Layanan Terbaik</h2>
                    <p>Kami memiliki tim ahli dengan pengalaman bertahun-tahun dalam
                        industri ini. Setiap anggota tim kami adalah profesional yang
                        berdedikasi untuk memberikan hasil terbaik bagi klien.</p>
                </div>
            </div>
            <div class="desc">
                <img src="{{ asset('images/desc/category.png') }}" alt="category">
                <div class="desc-content">
                    <h2>Pilihan Fleksibel</h2>
                    <p>Kami memahami bahwa setiap klien memiliki kebutuhan unik.
                        Oleh karena itu, kami menawarkan solusi yang disesuaikan
                        dan fleksibel untuk memenuhi kebutuhan spesifik Anda, tanpa
                        mengorbankan kualitas.</p>
                </div>
            </div>
            <div class="desc">
                <img src="{{ asset('images/desc/support.png') }}" alt="support">
                <div class="desc-content">
                    <h2>Dukungan Layanan 24/7</h2>
                    <p>Kami selalu siap membantu Anda kapan saja. Tim dukungan
                        pelanggan kami tersedia 24/7 untuk menjawab pertanyaan,
                        memberikan panduan, dan memastikan Anda mendapatkan
                        pengalaman yang lancar dan menyenangkan.</p>
                </div>
            </div>
        </div>
    </div>

    <section class="review-section">
        <div class="review-image">
            <h2>Kata Mereka</h2>
            <img src="{{ asset('images/reviews/review.png') }}" alt="Review Image">
        </div>
        <div class="review-content">
            <div class="review-card">
                <svg width="118" height="24" viewBox="0 0 118 24">
                    <g class="star-group">
                        <path class="star" d="M5.825 21L7.45 13.975L2 9.25L9.2 8.625L12 2L14.8 8.625L22 9.25L16.55 13.975L18.175 21L12 17.275L5.825 21Z" />
                        <path class="star" d="M29.825 21L31.45 13.975L26 9.25L33.2 8.625L36 2L38.8 8.625L46 9.25L40.55 13.975L42.175 21L36 17.275L29.825 21Z" />
                        <path class="star" d="M53.825 21L55.45 13.975L50 9.25L57.2 8.625L60 2L62.8 8.625L70 9.25L64.55 13.975L66.175 21L60 17.275L53.825 21Z" />
                        <path class="star" d="M77.825 21L79.45 13.975L74 9.25L81.2 8.625L84 2L86.8 8.625L94 9.25L88.55 13.975L90.175 21L84 17.275L77.825 21Z" />
                        <path class="star" d="M101.825 21L103.45 13.975L98 9.25L105.2 8.625L108 2L110.8 8.625L118 9.25L112.55 13.975L114.175 21L108 17.275L101.825 21Z" />
                    </g>
                </svg>
                <div class="review-text">
                    <p>“Layanan yang luar biasa! Sangat mudah untuk menemukan freelancer yang tepat untuk proyek saya. Pekerjaannya berkualitas tinggi dan selesai tepat waktu. Sangat merekomendasikan platform ini!”</p>
                </div>
                <div class="reviewer-info">
                    <img src="{{ asset('images/reviews/andi.png') }}" alt="Reviewer 1">
                    <div class="reviewer-details">
                        <h6>Andi Bule</h6>
                        <p>Pekerja Kantoran</p>
                    </div>
                </div>
            </div>
            <div class="review-card">
                <svg width="118" height="24" viewBox="0 0 118 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <!-- Define masks -->
                        <mask id="mask0" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                            <rect width="24" height="24" fill="#D9D9D9" />
                        </mask>
                        <mask id="mask1" maskUnits="userSpaceOnUse" x="24" y="0" width="24" height="24">
                            <rect x="24" width="24" height="24" fill="#D9D9D9" />
                        </mask>
                        <mask id="mask2" maskUnits="userSpaceOnUse" x="48" y="0" width="24" height="24">
                            <rect x="48" width="24" height="24" fill="#D9D9D9" />
                        </mask>
                        <mask id="mask3" maskUnits="userSpaceOnUse" x="72" y="0" width="24" height="24">
                            <rect x="72" width="24" height="24" fill="#D9D9D9" />
                        </mask>
                        <mask id="mask4" maskUnits="userSpaceOnUse" x="96" y="0" width="24" height="24">
                            <rect x="96" width="24" height="24" fill="#D9D9D9" />
                        </mask>
                    </defs>
                    <g class="star-group">
                        <g mask="url(#mask0)">
                            <path class="star" d="M5.825 21L7.45 13.975L2 9.25L9.2 8.625L12 2L14.8 8.625L22 9.25L16.55 13.975L18.175 21L12 17.275L5.825 21Z" />
                        </g>
                        <g mask="url(#mask1)">
                            <path class="star" d="M29.825 21L31.45 13.975L26 9.25L33.2 8.625L36 2L38.8 8.625L46 9.25L40.55 13.975L42.175 21L36 17.275L29.825 21Z" />
                        </g>
                        <g mask="url(#mask2)">
                            <path class="star" d="M53.825 21L55.45 13.975L50 9.25L57.2 8.625L60 2L62.8 8.625L70 9.25L64.55 13.975L66.175 21L60 17.275L53.825 21Z" />
                        </g>
                        <g mask="url(#mask3)">
                            <path class="star" d="M77.825 21L79.45 13.975L74 9.25L81.2 8.625L84 2L86.8 8.625L94 9.25L88.55 13.975L90.175 21L84 17.275L77.825 21Z" />
                        </g>
                        <g mask="url(#mask4)">
                            <path class="star" d="M104.85 16.825L108 14.925L111.15 16.85L110.325 13.25L113.1 10.85L109.45 10.525L108 7.125L106.55 10.5L102.9 10.825L105.675 13.25L104.85 16.825ZM101.825 21L103.45 13.975L98 9.25L105.2 8.625L108 2L110.8 8.625L118 9.25L112.55 13.975L114.175 21L108 17.275L101.825 21Z" />
                        </g>
                    </g>
                </svg>
                <div class="review-text">
                    <p>“Platform yang sangat berguna untuk menemukan profesional terbaik. Layanan yang diberikan sangat profesional dan hasilnya luar biasa. Terima kasih!”</p>
                </div>
                <div class="reviewer-info">
                    <img src="{{ asset('images/reviews/supriyono.png') }}" alt="Reviewer 2">
                    <div class="reviewer-details">
                        <h6>Supriyono</h6>
                        <p>Pekerja Serabutan</p>
                    </div>
                </div>
            </div>
            <div class="review-card">
                <svg width="118" height="24" viewBox="0 0 118 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <mask id="mask0" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                            <rect width="24" height="24" fill="#D9D9D9" />
                        </mask>
                        <mask id="mask1" maskUnits="userSpaceOnUse" x="24" y="0" width="24" height="24">
                            <rect x="24" width="24" height="24" fill="#D9D9D9" />
                        </mask>
                        <mask id="mask2" maskUnits="userSpaceOnUse" x="48" y="0" width="24" height="24">
                            <rect x="48" width="24" height="24" fill="#D9D9D9" />
                        </mask>
                        <mask id="mask3" maskUnits="userSpaceOnUse" x="72" y="0" width="24" height="24">
                            <rect x="72" width="24" height="24" fill="#D9D9D9" />
                        </mask>
                        <mask id="mask4" maskUnits="userSpaceOnUse" x="96" y="0" width="24" height="24">
                            <rect x="96" width="24" height="24" fill="#D9D9D9" />
                        </mask>
                    </defs>
                    <g class="star-group">
                        <g mask="url(#mask0)">
                            <path class="star" d="M5.825 21L7.45 13.975L2 9.25L9.2 8.625L12 2L14.8 8.625L22 9.25L16.55 13.975L18.175 21L12 17.275L5.825 21Z" />
                        </g>
                        <g mask="url(#mask1)">
                            <path class="star" d="M29.825 21L31.45 13.975L26 9.25L33.2 8.625L36 2L38.8 8.625L46 9.25L40.55 13.975L42.175 21L36 17.275L29.825 21Z" />
                        </g>
                        <g mask="url(#mask2)">
                            <path class="star" d="M53.825 21L55.45 13.975L50 9.25L57.2 8.625L60 2L62.8 8.625L70 9.25L64.55 13.975L66.175 21L60 17.275L53.825 21Z" />
                        </g>
                        <g mask="url(#mask3)">
                            <path class="star" d="M77.825 21L79.45 13.975L74 9.25L81.2 8.625L84 2L86.8 8.625L94 9.25L88.55 13.975L90.175 21L84 17.275L77.825 21Z" />
                        </g>
                        <g mask="url(#mask4)">
                            <path class="star" d="M104.85 16.825L108 14.925L111.15 16.85L110.325 13.25L113.1 10.85L109.45 10.525L108 7.125L106.55 10.5L102.9 10.825L105.675 13.25L104.85 16.825ZM101.825 21L103.45 13.975L98 9.25L105.2 8.625L108 2L110.8 8.625L118 9.25L112.55 13.975L114.175 21L108 17.275L101.825 21Z" />
                        </g>
                    </g>
                </svg>
                <div class="review-text">
                    <p>“Saya senang dengan kualitas pekerjaan yang diterima. Meskipun ada sedikit revisi, vendor dengan cepat menyesuaikan dan memberikan hasil yang saya inginkan.”</p>
                </div>
                <div class="reviewer-info">
                    <img src="{{ asset('images/reviews/maria.png') }}" alt="Reviewer 3">
                    <div class="reviewer-details">
                        <h6>Maria Dandy</h6>
                        <p>Ibu Rumah Tangga</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

@include('layouts.footer')