@include('layouts.header')

<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body class="bg">
    <nav>
        <div class="logo">
            <img src="{{ asset('images/dekorin.png') }}" alt="dekorin">
        </div>
    </nav>

    <main>
        <div class="login-wrapper">
            <div class="couch-wrapper">
                <img src="/images/couch.png" alt="couch">
            </div>
            <div>
                <form action="post" class="login-form">
                    <div class="greetings">
                        <h1>Masuk</h1>
                        <p>Selamat Datang Kembali!</p>
                    </div>
                    <div class="form-wrapper">
                        <div class="input-wrapper">
                            <input type="email" name="email" id="email" required autocomplete="off" placeholder="Masukkan Email Anda">
                            <input type="password" name="password" id="password" required placeholder="Masukkan Password Anda">
                        </div>
                        <button type="submit">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 18V16H16V2H9V0H16C16.55 0 17.0208 0.195833 17.4125 0.5875C17.8042 0.979167 18 1.45 18 2V16C18 16.55 17.8042 17.0208 17.4125 17.4125C17.0208 17.8042 16.55 18 16 18H9ZM7 14L5.625 12.55L8.175 10H0V8H8.175L5.625 5.45L7 4L12 9L7 14Z"
                                    fill="#FCF8F3" class="door" />
                            </svg>
                            Masuk
                        </button>
                    </div>
                    <div class="into-register">
                        <div class="belum">
                            <div class="line"></div>
                            <p>Belum punya akun?</p>
                            <div class="line"></div>
                        </div>
                        <button>
                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.35 15.1C5.2 14.45 6.15 13.9375 7.2 13.5625C8.25 13.1875 9.35 13 10.5 13C11.65 13 12.75 13.1875 13.8 13.5625C14.85 13.9375 15.8 14.45 16.65 15.1C17.2333 14.4167 17.6875 13.6417 18.0125 12.775C18.3375 11.9083 18.5 10.9833 18.5 10C18.5 7.78333 17.7208 5.89583 16.1625 4.3375C14.6042 2.77917 12.7167 2 10.5 2C8.28333 2 6.39583 2.77917 4.8375 4.3375C3.27917 5.89583 2.5 7.78333 2.5 10C2.5 10.9833 2.6625 11.9083 2.9875 12.775C3.3125 13.6417 3.76667 14.4167 4.35 15.1ZM10.5 11C9.51667 11 8.6875 10.6625 8.0125 9.9875C7.3375 9.3125 7 8.48333 7 7.5C7 6.51667 7.3375 5.6875 8.0125 5.0125C8.6875 4.3375 9.51667 4 10.5 4C11.4833 4 12.3125 4.3375 12.9875 5.0125C13.6625 5.6875 14 6.51667 14 7.5C14 8.48333 13.6625 9.3125 12.9875 9.9875C12.3125 10.6625 11.4833 11 10.5 11ZM10.5 20C9.11667 20 7.81667 19.7375 6.6 19.2125C5.38333 18.6875 4.325 17.975 3.425 17.075C2.525 16.175 1.8125 15.1167 1.2875 13.9C0.7625 12.6833 0.5 11.3833 0.5 10C0.5 8.61667 0.7625 7.31667 1.2875 6.1C1.8125 4.88333 2.525 3.825 3.425 2.925C4.325 2.025 5.38333 1.3125 6.6 0.7875C7.81667 0.2625 9.11667 0 10.5 0C11.8833 0 13.1833 0.2625 14.4 0.7875C15.6167 1.3125 16.675 2.025 17.575 2.925C18.475 3.825 19.1875 4.88333 19.7125 6.1C20.2375 7.31667 20.5 8.61667 20.5 10C20.5 11.3833 20.2375 12.6833 19.7125 13.9C19.1875 15.1167 18.475 16.175 17.575 17.075C16.675 17.975 15.6167 18.6875 14.4 19.2125C13.1833 19.7375 11.8833 20 10.5 20ZM10.5 18C11.3833 18 12.2167 17.8708 13 17.6125C13.7833 17.3542 14.5 16.9833 15.15 16.5C14.5 16.0167 13.7833 15.6458 13 15.3875C12.2167 15.1292 11.3833 15 10.5 15C9.61667 15 8.78333 15.1292 8 15.3875C7.21667 15.6458 6.5 16.0167 5.85 16.5C6.5 16.9833 7.21667 17.3542 8 17.6125C8.78333 17.8708 9.61667 18 10.5 18ZM10.5 9C10.9333 9 11.2917 8.85833 11.575 8.575C11.8583 8.29167 12 7.93333 12 7.5C12 7.06667 11.8583 6.70833 11.575 6.425C11.2917 6.14167 10.9333 6 10.5 6C10.0667 6 9.70833 6.14167 9.425 6.425C9.14167 6.70833 9 7.06667 9 7.5C9 7.93333 9.14167 8.29167 9.425 8.575C9.70833 8.85833 10.0667 9 10.5 9Z"
                                    fill="#4C3BCF" class="person" />
                            </svg>
                            Buat Akun
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

@include('layouts.footer')