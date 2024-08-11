@include('layouts.header')

<head>
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
</head>
<body>
    <main>
        <div class="greetings">
            <div class="text">
                <h1>Halo Sambo Metal!</h1>
                <p>Senang bertemu anda kembali</p>
            </div>
            <a href="/logout">
                Logout
            </a>
        </div>

        <div class="dashboard">
            <div class="side">
                <div class="profile">
                    <div class="info">
                        <div class="photo">
                            <img src="/images/profile.jpg" alt="profile">
                            <div class="change">
                                <p>Ganti Foto</p>
                            </div>
                        </div>
                        <div class="name">
                            <h2>Jamal Kitchen Set</h2>
                            <div class="rating">
                                <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.55312 21.625L6.38125 13.7219L0.25 8.40625L8.35 7.70312L11.5 0.25L14.65 7.70312L22.75 8.40625L16.6187 13.7219L18.4469 21.625L11.5 17.4344L4.55312 21.625Z"
                                        fill="#4C3BCF" />
                                </svg>
                                4.9
                            </div>
                        </div>
                    </div>
                    <div class="about-wrapper">
                        <h4>
                            Alamat
                            <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.416992 16V13.1666H14.5837V16H0.416992ZM3.25033 10.3333H4.24199L9.76699 4.826L8.75762 3.81663L3.25033 9.34163V10.3333ZM1.83366 11.75V8.73954L9.76699 0.823918C9.89685 0.694057 10.0474 0.593709 10.2186 0.522876C10.3897 0.452043 10.5698 0.416626 10.7587 0.416626C10.9475 0.416626 11.1305 0.452043 11.3076 0.522876C11.4847 0.593709 11.6441 0.699959 11.7857 0.841626L12.7597 1.83329C12.9014 1.96315 13.0047 2.11663 13.0696 2.29371C13.1345 2.47079 13.167 2.65378 13.167 2.84267C13.167 3.01975 13.1345 3.19388 13.0696 3.36506C13.0047 3.53624 12.9014 3.69267 12.7597 3.83433L4.84408 11.75H1.83366Z"
                                    fill="#525252" />
                            </svg>
                        </h4>
                        <p>Jl.Raya Kalimulya, RT03/08 Kelurahan Kalimulya Kecamatan Cilodong, Depok, Jawa Barat</p>
                    </div>
                    <div class="about-wrapper">
                        <h4>
                            No HP
                            <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.416992 16V13.1666H14.5837V16H0.416992ZM3.25033 10.3333H4.24199L9.76699 4.826L8.75762 3.81663L3.25033 9.34163V10.3333ZM1.83366 11.75V8.73954L9.76699 0.823918C9.89685 0.694057 10.0474 0.593709 10.2186 0.522876C10.3897 0.452043 10.5698 0.416626 10.7587 0.416626C10.9475 0.416626 11.1305 0.452043 11.3076 0.522876C11.4847 0.593709 11.6441 0.699959 11.7857 0.841626L12.7597 1.83329C12.9014 1.96315 13.0047 2.11663 13.0696 2.29371C13.1345 2.47079 13.167 2.65378 13.167 2.84267C13.167 3.01975 13.1345 3.19388 13.0696 3.36506C13.0047 3.53624 12.9014 3.69267 12.7597 3.83433L4.84408 11.75H1.83366Z"
                                    fill="#525252" />
                            </svg>
                        </h4>
                        <p>0812-3212-3187</p>
                    </div>
                    <div class="about-wrapper">
                        <h4>
                            Email
                            <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.416992 16V13.1666H14.5837V16H0.416992ZM3.25033 10.3333H4.24199L9.76699 4.826L8.75762 3.81663L3.25033 9.34163V10.3333ZM1.83366 11.75V8.73954L9.76699 0.823918C9.89685 0.694057 10.0474 0.593709 10.2186 0.522876C10.3897 0.452043 10.5698 0.416626 10.7587 0.416626C10.9475 0.416626 11.1305 0.452043 11.3076 0.522876C11.4847 0.593709 11.6441 0.699959 11.7857 0.841626L12.7597 1.83329C12.9014 1.96315 13.0047 2.11663 13.0696 2.29371C13.1345 2.47079 13.167 2.65378 13.167 2.84267C13.167 3.01975 13.1345 3.19388 13.0696 3.36506C13.0047 3.53624 12.9014 3.69267 12.7597 3.83433L4.84408 11.75H1.83366Z"
                                    fill="#525252" />
                            </svg>
                        </h4>
                        <p>sambo432@gmail.com</p>
                    </div>
                </div>

                <div class="message">
                    <div class="title">
                        <h1>Pesan</h1>
                        <div class="notification">
                            <p>1 Pesan Baru</p>
                        </div>
                    </div>

                    <div class="card-wrapper no-scrollbar">
                        <div class="card">
                            <div class="head-wrapper">
                                <div class="prof-wrapper">
                                    <div class="photo">
                                        <img src="/images/profile.jpg" alt="profile">
                                    </div>
                                    <div class="name">
                                        <h2>Sambo Metal</h2>
                                        <div class="address">
                                            Cilodong, Depok
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="status">
                                    <p>Sent</p>
                                </div>
                            </div>
                        
                            <div class="content no-scrollbar">
                                Hai Kak Sambo, terimakasih sudah menghubungi kami. Untuk design yang disediakan dari kakak, akan diberikan
                                potongan
                                sebesar 10% dari estimasi yang disepakati ya kak. Terimakasih.
                                olkfjisensaefdkjnonselkjfhsiolfhjsolifjhsoifdjopisefopisehfiopsfpoisej
                            </div>
                        </div>
                    </div>  
                </div>
            </div>

            <div class="main">
                <div class="activity no scrollbar">
                    <div class="title">
                        <h1>Aktivitas Anda</h1>
                    </div>
                    
                    <div class="table">
                        <table>
                            <tr>
                                <td style="width: 10%">
                                    <div class="photo">
                                        <img src="/images/profile.jpg" alt="profile">
                                    </div>
                                </td>
                                <td>
                                    <div class="name">
                                        <h3>Sambo Metal</h2>
                                        <p>Cilodong Depok</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="product">
                                        <h3>Cozy Kitchen Set</h3>
                                    </div>
                                </td>
                                <td style="width: 40%;">
                                    <div class="deskripsi">
                                        <h3>Deskripsi</h2>
                                        <p>Memasang kitchen set dari design yang diberikan</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="penawaran-harga">
                                        <h3>Penawaran Harga</h2>
                                        <p>Rp. 6.000.000,-</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="status">
                                        <p class="progress">On Progress</p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

@include('layouts.footer')