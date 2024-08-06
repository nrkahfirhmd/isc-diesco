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
            <button class="sign-in">Daftar</button>
            <button class="sign-up">Masuk</button>
        </div>
    </nav>

    <section class="hero">
        <img src="{{ asset('images/dekorin-white.png') }}" alt="dekorin" class="hero-logo">
        <div class="hero-content">
            <h1>Ciptakan <span class="highlight">Keindahan</span> di Setiap Sudut Rumah</h1>
            <p>Temukan Ahli Dengan Beragam Keahlian Sesuai Kebutuhan Anda</p>
            <div class="search">                
                <div class="search-bar">
                    <input type="text" placeholder="Roof, Kitchen, Interior etc">
                    <button>Cari</button>
                </div>
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
                        <h3>Pengalaman dan Profesionalisme</h3>
                        <p>Kami berkomitmen untuk memberikan layanan berkualitas tinggi
                            dengan perhatian terhadap detail. Setiap proyek yang kami
                            tangani dijalankan dengan standar tertinggi untuk memastikan
                            kepuasan pelanggan.</p>
                    </div>
                </div>
                <div class="desc">
                    <img src="{{ asset('images/desc/star.png') }}" alt="star">
                    <div class="desc-content">
                        <h3>Kualitas layanan terbaik</h3>
                        <p>Kami memiliki tim ahli dengan pengalaman bertahun-tahun dalam
                            industri ini. Setiap anggota tim kami adalah profesional yang
                            berdedikasi untuk memberikan hasil terbaik bagi klien.</p>
                    </div>
                </div>
                <div class="desc">
                    <img src="{{ asset('images/desc/category.png') }}" alt="category">
                    <div class="desc-content">
                        <h3>Pilihan fleksibel</h3>
                        <p>Kami memahami bahwa setiap klien memiliki kebutuhan unik.
                            Oleh karena itu, kami menawarkan solusi yang disesuaikan
                            dan fleksibel untuk memenuhi kebutuhan spesifik Anda, tanpa
                            mengorbankan kualitas.</p>
                    </div>
                </div>
                <div class="desc">
                    <img src="{{ asset('images/desc/support.png') }}" alt="support">
                    <div class="desc-content">
                        <h3>Dukungan layanan 24/7</h3>
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
                    <p>⭐⭐⭐⭐⭐</p>
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
                    <p>⭐⭐⭐⭐</p>
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
                    <p>⭐⭐⭐⭐</p>
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