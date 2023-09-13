<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line to import the DB facade

class MenuSeeder extends Seeder
{
    public function run()
    {
        $categories = ['sandwiches', 'burgers', 'pizza', 'drinks', 'pasta', 'platters'];

        foreach ($categories as $category) {
            for ($i = 1; $i <= 4; $i++) {
                DB::table('menu')->insert([
                    'name' => ucfirst($category) . ' Item ' . $i,
                    'price' => rand(5, 15),
                    'description' => 'Description for ' . ucfirst($category) . ' Item ' . $i,
                    'category' => $category,
                ]);
            }
        }
    }
}

