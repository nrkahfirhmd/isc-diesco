<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customer')->insert([
            'id_cust' => "ABCDE",
            'nama' => 'User 1',
            'email' => 'user1@gmail.com',
            'no_telp' => '081234567890',
            "photo" => base64_encode(file_get_contents(public_path('images/user/user1.jpg'))),
        ]);

        DB::table('customer')->insert([
            'id_cust' => "AAAAA",
            'nama' => 'User 2',
            'email' => 'user2@gmail.com',
            'no_telp' => '081111111111',
            "photo" => base64_encode(file_get_contents(public_path('images/user/user2.jpg'))),
        ]);

        DB::table('customer')->insert([
            'id_cust' => "AAABB",
            'nama' => 'User 3',
            'email' => 'user3@gmail.com',
            'no_telp' => '081222222222',
            "photo" => base64_encode(file_get_contents(public_path('images/user/user3.jpg'))),
        ]);
    }
}
