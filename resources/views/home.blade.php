@include('layouts.header')

<head>
    <link rel="stylesheet" href=" {{ asset('css/home.css') }} ">
</head>
<body>
    <nav class="navbar">
        <a href="" class="logo">
            <img src="/img/home-logo.png" alt="Dekorin">
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
</body>