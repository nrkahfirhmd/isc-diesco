# Tentang Dekorin

Dekorin adalah platform e-commerce yang memungkinkan pengguna untuk memesan jasa vendor yang berkaitan dengan dekorasi rumah. Dengan Dekorin, pengguna dapat menemukan berbagai vendor yang menyediakan layanan dekorasi rumah seperti penataan furnitur, pencahayaan, dan dekorasi lainnya. Platform ini menyediakan berbagai pilihan desain dan gaya yang dapat disesuaikan dengan preferensi pengguna. Dekorin memberikan pengalaman yang mudah dan praktis dalam memesan jasa dekorasi rumah secara online.

# Instalasi Aplikasi Dekorin
Berikut adalah langkah-langkah untuk menginstal web Dekorin:

1. Pastikan Anda memiliki PHP yang terinstal di komputer Anda. Anda dapat mengunduh PHP dari situs resmi PHP (https://www.php.net/downloads.php) dan mengikuti petunjuk instalasinya.

2. Setelah PHP terinstal, buka terminal atau command prompt dan jalankan perintah berikut untuk memeriksa apakah PHP terinstal dengan benar:

    ```
    php -v
    ```

    Jika versi PHP ditampilkan, berarti PHP telah terinstal dengan sukses.

3. Selanjutnya, Anda perlu menginstal Composer, manajer paket PHP. Unduh Composer dari situs resmi Composer (https://getcomposer.org/download/) dan ikuti petunjuk instalasinya.

4. Setelah Composer terinstal, buka terminal atau command prompt dan jalankan perintah berikut untuk memeriksa apakah Composer terinstal dengan benar:

    ```
    composer --version
    ```

    Jika versi Composer ditampilkan, berarti Composer telah terinstal dengan sukses.

5. Jalankan perintah berikut untuk mengklon proyek Dekorin dari repositori Git:

    ```
    git clone https://github.com/nrkahfirhmd/isc-diesco.git
    ```

6. Masuk ke direktori proyek Dekorin:

    ```
    cd isc-diesco
    ```

7. Jalankan perintah berikut untuk menginstal semua dependensi menggunakan Composer:

    ```
    composer install
    ```

8. Sebelum melanjutkan, pastikan untuk mengatur file `.env` dengan konfigurasi yang sesuai. Anda dapat menyalin file `.env.example` menjadi `.env` dan mengeditnya sesuai dengan pengaturan lingkungan Anda.

9. Selanjutnya, untuk mengizinkan upload file besar, Anda perlu mengkonfigurasi `php.ini`. Buka file `php.ini` yang terletak di direktori instalasi PHP Anda dan cari pengaturan `upload_max_filesize` dan `post_max_size`. Ubah nilainya menjadi ukuran yang diinginkan, misalnya:

    ```
    upload_max_filesize = 128M
    post_max_size = 128M
    ```

    Simpan perubahan tersebut dan restart server PHP Anda.

10. Setelah mengatur `.env` dan `php.ini`, lanjutkan dengan langkah-langkah berikutnya untuk menyelesaikan instalasi web Dekorin.

11. Jalankan perintah berikut untuk melakukan migrasi database:

    ```
    php artisan migrate
    ```

12. Jalankan perintah berikut untuk melakukan seeding data awal:

    ```
    php artisan db:seed
    ```

13. Terakhir, jalankan perintah berikut untuk menjalankan server pengembangan Dekorin:

    ```
    php artisan serve
    ```

    Server pengembangan akan berjalan di http://localhost:8000.

Selamat, Anda telah berhasil menginstal web Dekorin!