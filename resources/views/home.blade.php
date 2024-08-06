@include('layouts.header')

<head>
    <link rel="stylesheet" href=" {{ asset('css/home.css') }} ">
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

    <div class="hero">
        
    </div>

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
</body>

@include('layouts.footer')