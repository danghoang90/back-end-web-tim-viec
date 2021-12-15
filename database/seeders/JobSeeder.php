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
                'name' => 'Nhân viên chính thức',
            ],
            [
                'name' => 'Nhân viên thời vụ',
            ],
            [
                'name' => 'Bán thời gian',
            ],
            [
                'name' => 'Làm thêm ngoài giờ',
            ],
            [
                'name' => 'Thực tập và dự án',
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
