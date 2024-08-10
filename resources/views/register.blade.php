@include('layouts.header')

<head>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body class="bg">
    <nav>
        <div class="logo">
            <img src="{{ asset('images/dekorin.png') }}" alt="dekorin">
        </div>
    </nav>

    <div class="wrapper-alert">
        <div class="otp-alert">
            Kode OTP Anda <span style="font-weight: 600">{{session('otp')}}</span> 
        </div>
    </div>

    <main>
        <div class="register-wrapper">
            <div class="couch-wrapper">
                <img src="/images/register_couch.png" alt="couch">
            </div>
            @if(session('step') != 1)
            <div class="content-wrapper">
            @else
            <div class="content-wrapper current">
            @endif
            <!-- <div class="content-wrapper current"> -->
                <form action="/auth/register" class="register-form">
                    @csrf
                    <div class="greetings">
                        <h1>Daftar</h1>
                        <p>Gabung menjadi bagian dari kami</p>
                    </div>
                    <div class="form-wrapper">
                        <div class="input-wrapper">
                            <input type="text" name="username" id="username" required autocomplete="off" placeholder="Username">
                            <input type="email" name="email" id="email" required autocomplete="off" placeholder="Email">
                            <input type="text" inputmode="numeric" name="telp" id="telp" required autocomplete="off" placeholder="Nomor Telepon">
                            <div class="level-wrapper">
                                <span>
                                    <input type="radio" name="level" id="vendor" value="1">
                                    <label for="vendor">Sebagai Vendor</label>
                                </span>
                                <span>
                                    <input type="radio" name="level" id="user" value="0" checked>
                                    <label for="user">Sebagai User</label>
                                </span>
                            </div>
                        </div>
                        <button onclick="toNextSection()">
                            Kirim Kode OTP
                        </button>
                    </div>
                    <div class="into-login">
                        <div class="sudah">
                            <div class="line"></div>
                            <p>Sudah punya akun?</p>
                            <div class="line"></div>
                        </div>
                        <a href="/login" class="btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 18V16H16V2H9V0H16C16.55 0 17.0208 0.195833 17.4125 0.5875C17.8042 0.979167 18 1.45 18 2V16C18 16.55 17.8042 17.0208 17.4125 17.4125C17.0208 17.8042 16.55 18 16 18H9ZM7 14L5.625 12.55L8.175 10H0V8H8.175L5.625 5.45L7 4L12 9L7 14Z"
                                    fill="#4C3BCF" class="door" />
                            </svg>
                            Masuk
                        </a>
                    </div>
                    <div class="status-wrapper">
                        <div class="status on"></div>
                        <div class="status"></div>
                        <div class="status"></div>
                    </div>
                </form>
            </div>

            @if(session('step') === 2)
            <div class="content-wrapper current">
            @else
            <div class="content-wrapper">
            @endif
            <!-- <div class="content-wrapper"> -->
                <form action="/auth/otp" class="register-form">
                    @csrf
                    <div class="greetings">
                        <h1>Enter Code</h1>
                        <p>kami sudah mengirim kode ke <span class="user-email">johndoe@gmail.com</span></p>
                    </div>
                    <div class="form-wrapper">
                        <div class="code-wrapper">
                            <input type="text" class="inputted" inputmode="numeric" name="otp[]" id="one" oninput="moveToNext(this)" autocomplete="off" maxlength="1" placeholder="0">
                            <input type="text" inputmode="numeric" name="otp[]" id="two" oninput="moveToNext(this)" autocomplete="off" maxlength="1" placeholder="0">
                            <input type="text" inputmode="numeric" name="otp[]" id="three" oninput="moveToNext(this)" autocomplete="off" maxlength="1" placeholder="0">
                            <input type="text" inputmode="numeric" name="otp[]" id="four" oninput="moveToNext(this)" autocomplete="off" maxlength="1" placeholder="0">
                        </div>
                        <button type="submit">
                            Daftar
                        </button>
                    </div>
                    <div class="into-verified">
                        <div class="sudah">
                            <div class="line"></div>
                            <p>belum menerima kode?</p>
                            <div class="line"></div>
                        </div>
                        <button class="btn">Kirim Ulang Kode OTP</button>
                        <button class="btn">Ganti Alamat E-mail</button>
                    </div>
                    <div class="status-wrapper">
                        <div class="status"></div>
                        <div class="status on"></div>
                        <div class="status"></div>
                    </div>
                </form>
            </div>

            @if(session('step') === 3)
            <div class="content-wrapper current">
            @else
            <div class="content-wrapper">
            @endif
            <!-- <div class="content-wrapper"> -->
                <form action="/auth/password" class="register-form">
                    @csrf
                    <div class="greetings">
                        <h1>Input Password</h1>
                        <p>Demi keamanan dan kenyamanan</p>
                    </div>
                    <div class="form-wrapper">
                        <div class="input-wrapper">
                            <input type="password" name="password" id="password" required autocomplete="off" placeholder="Password">
                            <input type="password" name="retype" id="retype" required autocomplete="off" placeholder="Re-type Password">
                        </div>
                        <button type="submit">
                            Simpan Password
                        </button>
                    </div>
                    <div class="status-wrapper">
                        <div class="status"></div>
                        <div class="status"></div>
                        <div class="status on"></div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/register.js') }}"></script>
    <script type="text/javascript">
        @if (session('otp-alert'))
            alert("Your OTP is {{ session('otp') }}").then(() => {
                {{ session()->forget('otp-alert') }}
            });
        @endif

        $(document).ready(function () {
            let currentStep = {{ session('step') ?? 1 }};
            toNextSection(currentStep);
        });
    </script>
</body>

@include('layouts.footer')