<?php

namespace Database\Seeders;


use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = [
            [
                'id' => 1,
                'name' => 'Full time',
                'code' => '....',
            ],
            [
                'id' => 2,
                'name' => 'Part time',
                'code' => '....',
            ],
        ];

        try {
            foreach ($jobs as $job) {
                Job::create($job);
            }
        } catch (\Throwable $th) {

        }
    }
}
