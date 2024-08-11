<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Design Interior',
            'Bathroom',
            'Living Room',
            'Garden',
            'Kitchen Set',
        ];
        
        $i = 0;
        foreach ($categories as $category) {
            DB::table('category')->insert([
                'id_category' => $i,
                'category' => $category
            ]);

            $i++;
        }
    }
}
