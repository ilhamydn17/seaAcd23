<?php

namespace Database\Seeders;

use App\Models\Seat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seat::factory()->count(64)->create();
    }
}
