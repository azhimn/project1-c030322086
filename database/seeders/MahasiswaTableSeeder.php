<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $faker = Factory::create();

        mahasiswa::create([
            'name' => $faker->name(),
            'nim' => $faker->regexify('^[A-Z]\d{9}$'),
            'email' => $faker->email(),
            'password' => bcrypt('secret'),
        ]);
    }
}
