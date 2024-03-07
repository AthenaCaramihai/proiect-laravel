<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            [
            'name' => 'Once upon a time in hollywood',
            'director' => 'Tarantino',
            'rating' => 8,
            'release_date' => 2019
            ],
            [
                'name' => 'Scent of a woman',
                'director' => 'Martin Brest',
                'rating' => 8,
                'release_date' => 1992
            ]
        ]
    );
    }
}
