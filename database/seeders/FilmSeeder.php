<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Film::create([
            'title' => 'Jurassic Park',
            'duration' => 135,
            'oscar' => true
        ]);

        Film::create([
            'title' => 'Jurassic Park 2',
            'duration' => 150,
            'oscar' => false
        ]);
    }
}
