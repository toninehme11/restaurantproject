<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line to import the DB facade

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = ['sandwiches', 'burgers', 'pizza', 'drinks', 'pasta', 'platters'];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'categories' => $category,
            ]);
        }
    }
}
