@include('layouts.header')

<head>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
    <main>
        <div class="greetings">
            <div class="text">
                <h1>Halo {{ $user->nama }}!</h1>
                <p>Senang bertemu anda kembali</p>
            </div>
            <a href="/logout">
                Logout
            </a>
        </div>

        <div class="dashboard">
            <div class="main">
                <div class="profile">
                    <div class="info">
                        <div class="photo">
                            <img src="data:image/png;base64,{{ $user->photo }}" alt="profile">
                            <div class="change">
                                <p>Ganti Foto</p>
                            </div>
                        </div>
                        <div class="name">
                            <h2>{{ $user->nama }}</h2>
                            <div class="address">
                                Cilodong, Depok
                            </div>
                        </div>
                    </div>
                    <div class="container">
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
                            <p>{{ $user->no_telp }}</p>
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
                            <p>{{$user->email}}</p>
                        </div>
                    </div>
                </div>

                <div class="activity">
                    <div class="title">
                        <h1>Aktivitas Anda</h1>
                    </div>

                    @if (count($requests) == 0)
                        <div class="empty">
                            <h1>Belum ada aktivitas</h1>
                            <p>Anda belum melakukan permintaan jasa apapun</p>
                        </div>
                    @else
                        <div class="service-list no-scrollbar">
                            @foreach ($requests as $request)
                            <div class="activity-card">
                                <div class="info">
                                    <div class="date">
                                        Diajukan pada: 1 Agustus 2024
                                    </div>
                                    <div class="status">
                                        @if ($request->status == '0')
                                            <p class="waiting">On Queue</p>
                                        @elseif ($request->status == '1')
                                            <p class="progress">Progress</p>
                                        @elseif ($request->status == '2')
                                            <p class="done">Selesai</p>
                                        @elseif ($request->status == '3')
                                            <p class="rejected">Ditolak</p>
                                        @endif                                    
                                    </div>
                                </div>
                                <div class="prof-wrapper">
                                    <div class="photo">
                                        <img src="data:image/png;base64,{{ $request->photo }}" alt="vendor">
                                    </div>
                                    <div class="name">
                                        <h2> {{ $request->nama }} </h2>
                                        <div class="rating">
                                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.825 19L5.45 11.975L0 7.25L7.2 6.625L10 0L12.8 6.625L20 7.25L14.55 11.975L16.175 19L10 15.275L3.825 19Z"
                                                    fill="#4C3BCF" />
                                            </svg>
                                            {{ $request->rating }}
                                        </div>
                                    </div>
                                </div>
                                <div class="desc">
                                    <p> {{ $request->deskripsi }} </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @endif                    
                </div>
            </div>
            <div class="side">
                <div class="message">
                    <div class="title">
                        <h1>Pesan</h1>
                        <!-- <div class="notification">
                            <p>1 Pesan Baru</p>
                        </div> -->
                    </div>

                    @if (count($questions) == 0)
                        <div class="empty">
                            <h1>Belum ada pesan</h1>
                            <p>Anda belum memiliki pesan</p>
                        </div>
                    @else
                        <div class="card-wrapper no-scrollbar">
                            @foreach ($questions as $question)
                                <div class="card">
                                    <div class="head-wrapper">
                                        <div class="prof-wrapper">
                                            <div class="photo">
                                                <img src="data:image/png;base64,{{ $question->photo }}" alt="vendor">
                                            </div>
                                            <div class="name">
                                                <h2> {{$question->nama}} </h2>
                                                <div class="address">
                                                    {{$question->rating}}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="status">
                                            @if ($question->reply == "TBA")                                        
                                                <p style="background-color: var(--quaternary-color);">Sent</p>
                                            @else
                                                <p style="background-color: var(--secondary-color);">Replied</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="content no-scrollbar">
                                        @if ($question->reply == "TBA")                                        
                                            <p> menunggu jawaban! </p>
                                        @else
                                            {{ $question->reply }}
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/drag.js') }}"></script>
</body>

@include('layouts.footer')