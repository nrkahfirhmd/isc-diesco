@include('layouts.header')

<head>
    <link rel="stylesheet" href="/css/add.css">
</head>
<body>
    <main>
        <a href="/vendor" class="back">
            <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.75 0.749999L10.675 2.74375L5.79375 7.625L22.5 7.625L22.5 10.375L5.79375 10.375L10.675 15.2562L8.75 17.25L0.500001 9L8.75 0.749999Z"
                    fill="#2F2F2F" />
            </svg>
            Kembali
        </a>

        <form action="/vendor/add/process" class="form-wrapper" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Tambah Produk</h1>
            <div class="input-wrapper">
                <label for="name">Judul Produk</label>
                <input type="text" name="judul" id="judul" autocomplete="off" placeholder="Masukkan Judul Produk" required>
            </div>
            <div class="input-wrapper">
                <label for="name">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" placeholder="Masukan Deskripsi Produk"></textarea>
            </div>
            <div class="input-wrapper">
                <label for="name">Kategori</label>
                <select name="kategori" id="kategori">
                    <option value="0" selected>Design Interior</option>
                    <option value="1">Bathroom</option>
                    <option value="2">Living Room</option>
                    <option value="3">Garden</option>
                    <option value="4">Kitchen Set</option>
                </select>
            </div>
            <div class="input-wrapper">
                <label for="name">Harga</label>
                <input type="text" inputmode="numeric" name="harga" id="harga" autocomplete="off" placeholder="Masukan Harga Produk" required>
            </div>
            <div class="input-wrapper">
                <label for="name">Gambar Produk</label>
                <input type="file" name="gambar" id="gambar" required>
            </div>
            <button type="submit">
                Tambahkan Produk

                <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.75 17.25L11.825 15.2563L16.7063 10.375H0V7.625H16.7063L11.825 2.74375L13.75 0.75L22 9L13.75 17.25Z"
                        fill="#FCF8F3" />
                </svg>
            </button>
        </form>
    </main>
</body>

@include('layouts.footer')