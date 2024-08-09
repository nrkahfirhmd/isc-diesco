<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vendor')->insert([
            'id_vendor' => "VEND1",
            'nama' => 'Vendi Taman',
            'email' => 'venditaman@gmail.com',
            'no_telp' => '082131313112',
            'photo' => base64_encode(file_get_contents(public_path('images/vendor/vendor1.jpg'))),
            'deskripsi' => 'Siap mempercantik taman Anda',
            'pro' => true,
            'rating' => 4.5,
        ]);

        DB::table('vendor')->insert([
            'id_vendor' => "D4NIZ",
            'nama' => 'Dekoran Daniz',
            'email' => 'dekorandaniz@gmail.com',
            'no_telp' => '081231354721',
            'photo' => base64_encode(file_get_contents(public_path('images/vendor/vendor2.jpg'))),
            'deskripsi' => 'Dekorasi asli dengan kualitas pasti',
            'pro' => false,
            'rating' => 4.2,
        ]);

        DB::table('vendor')->insert([
            'id_vendor' => "P1ASD",
            'nama' => 'Asda Dekor',
            'email' => 'asdadekor@gmail.com',
            'no_telp' => '0813134747385',
            'photo' => base64_encode(file_get_contents(public_path('images/vendor/vendor3.jpg'))),
            'deskripsi' => 'Dekorasi yang sesuai dengan keinginan Anda',
            'pro' => false,
            'rating' => 3.7,
        ]);
    }
}
