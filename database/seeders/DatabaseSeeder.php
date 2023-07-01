<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Film;
use Illuminate\Database\Seeder;
use Database\Seeders\FilmSeatSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FilmSeeder::class,
            SeatSeeder::class,
            FilmSeatSeeder::class,
        ]);
    }
}
