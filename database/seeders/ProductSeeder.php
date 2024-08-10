<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert([
            'id_product' => "123",
            'id_vendor' => "VEND1",
            'nama' => 'Garden with Fountain of Love',
            'kategori' => 3,
            'harga' => "5000000",
            'deskripsi' => 'Taman dengan Air Mancur Cinta',
            "banner" => base64_encode(file_get_contents(public_path('images/products/product1.jpg'))),
        ]);

        DB::table('product')->insert([
            'id_product' => "124",
            'id_vendor' => "VEND1",
            'nama' => 'Taman Mini',
            'kategori' => 3,
            'harga' => "1000000",
            'deskripsi' => 'Taman kecil dengan hiasan-hiasan estetik',
            "banner" => base64_encode(file_get_contents(public_path('images/products/product2.jpg'))),
        ]);

        DB::table('product')->insert([
            'id_product' => "125",
            'id_vendor' => "VEND1",
            'nama' => 'Taman dengan Lapangan',
            'kategori' => 3,
            'harga' => "2000000",
            'deskripsi' => 'Mau taman kalian ada lapangan? ini pilihannya',
            "banner" => base64_encode(file_get_contents(public_path('images/products/product3.jpg'))),
        ]);

        DB::table('product')->insert([
            'id_product' => "200",
            'id_vendor' => "D4NIZ",
            'nama' => 'Cozy Living Room',
            'kategori' => 2,
            'harga' => "2500000",
            'deskripsi' => 'Ruang keluarga dengan suasana menyejukkan',
            "banner" => base64_encode(file_get_contents(public_path('images/products/product4.jpg'))),
        ]);

        DB::table('product')->insert([
            'id_product' => "201",
            'id_vendor' => "D4NIZ",
            'nama' => 'Cozy Dining Room',
            'kategori' => 0,
            'harga' => "1500000",
            'deskripsi' => 'Tempat makan dengan suasana yang nyaman',
            "banner" => base64_encode(file_get_contents(public_path('images/products/product5.jpg'))),
        ]);

        DB::table('product')->insert([
            'id_product' => "202",
            'id_vendor' => "D4NIZ",
            'nama' => 'Cozy Bathroom',
            'kategori' => 1,
            'harga' => "800000",
            'deskripsi' => 'Kamar mandi dengan suasana yang nyaman',
            "banner" => base64_encode(file_get_contents(public_path('images/products/product6.jpg'))),
        ]);

        DB::table('product')->insert([
            'id_product' => "203",
            'id_vendor' => "D4NIZ",
            'nama' => 'Cozy Garden',
            'kategori' => 3,
            'harga' => "2000000",
            'deskripsi' => 'Taman yang nyaman dan menyejukkan',
            "banner" => base64_encode(file_get_contents(public_path('images/products/product7.jpg'))),
        ]);

        DB::table('product')->insert([
            'id_product' => "005",
            'id_vendor' => "P1ASD",
            'nama' => 'Studio Room',
            'kategori' => 0,
            'harga' => "3000000",
            'deskripsi' => 'Ruangan studio untuk berbagai kebutuhan',
            "banner" => base64_encode(file_get_contents(public_path('images/products/product8.jpg'))),
        ]);

        DB::table('product')->insert([
            'id_product' => "006",
            'id_vendor' => "P1ASD",
            'nama' => 'Swimming Pool',
            'kategori' => 3,
            'harga' => "8000000",
            'deskripsi' => 'Kolam renang di taman yang nyaman',
            "banner" => base64_encode(file_get_contents(public_path('images/products/product9.jpg'))),
        ]);

        DB::table('product')->insert([
            'id_product' => "007",
            'id_vendor' => "P1ASD",
            'nama' => 'Asda Kitchen Set',
            'kategori' => 4,
            'harga' => "1500000",
            'deskripsi' => 'Kitchen set dengan kustomisasi terbaik',
            "banner" => base64_encode(file_get_contents(public_path('images/products/product10.jpg'))),
        ]);
    }
}
