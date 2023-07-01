<?php

namespace Database\Seeders;

use App\Models\OrderedSeat;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FilmSeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 31; $i++){
            for ($j = 1; $j <= 64; $j++){
                DB::table('film_seats')->insert([
                    'film_id' => $i,
                    'seat_id' => $j,
                ]);
            }
        }

    }
}
