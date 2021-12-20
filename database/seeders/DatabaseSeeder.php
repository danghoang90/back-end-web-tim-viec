<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CitySeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(EmployerSeeder::class);
        $this->call(JobSeeder::class);
        $this->call(PostSeeder::class);
    }
}
