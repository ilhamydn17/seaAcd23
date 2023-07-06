<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username'=>'ilham_',
            'name'=> 'Ilham Yudantyo',
            'password'=>bcrypt('ilham123'),
            'birthdate'=>'2001-09-18',
            'balance'=>500000,
        ]);
    }
}
