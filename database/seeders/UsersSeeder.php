<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Add this line to import the Hash class

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('username')->insert([
            'username' => 'user1',
            'password' => Hash::make('user1'),
            'level' => 0,
            'id' => 'ABCDE'
        ]);
        
        DB::table('username')->insert([
            'username' => 'user2',
            'password' => Hash::make('user2'),
            'level' => 0,
            'id' => 'AAAAA'
        ]);

        DB::table('username')->insert([
            'username' => 'user3',
            'password' => Hash::make('user3'),
            'level' => 0,
            'id' => 'AAABB'
        ]);

        DB::table('username')->insert([
            'username' => 'venditaman',
            'password' => Hash::make('venditaman'),
            'level' => 1,
            'id' => 'VEND1'
        ]);

        DB::table('username')->insert([
            'username' => 'dekorandaniz',
            'password' => Hash::make('dekorandaniz'),
            'level' => 1,
            'id' => 'D4NIZ'
        ]);

        DB::table('username')->insert([
            'username' => 'asdadekor',
            'password' => Hash::make('asdadekor'),
            'level' => 1,
            'id' => 'P1ASD'
        ]);
    }
}
