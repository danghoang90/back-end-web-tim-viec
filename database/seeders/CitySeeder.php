<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'id' => 1,
                'name' => 'Hà Nội',
                'slug' => 'Lập trình PHP',
                'code' => '....',
            ],
            [
                'id' => 2,
                'name' => 'Đà Nẵng',
                'slug' => 'Lập trình JAVA',
                'code' => '....',
            ],
        ];

        try {
            foreach ($cities as $city) {
                City::create($city);
            }
        } catch (\Throwable $th) {

        }
    }
}
