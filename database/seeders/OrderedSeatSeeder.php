<?php

namespace Database\Seeders;

use App\Models\OrderedSeat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderedSeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderedSeat::factory()->count(64)->create();
    }
}
