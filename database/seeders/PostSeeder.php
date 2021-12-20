<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Provider\DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast\Int_;
use Ramsey\Uuid\Type\Integer;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->code = 'MSM10';
        $post->title = 'PHP';
        $post->salary = '3-5 triệu';
        $post->position = 'Nhân viên chính thức';
        $post->experience = '6 tháng';
        $post->expiration_date = '2021-12-24';
        $post->description = 'Nhàn lắm';
        $post->quantity = 6;
        $post->gender = 'Nam';
        $post->status = 1;
        $post->city_id = 4;
        $post->job_id = 2;
        $post->employer_id = 2;
        $post->save();

        $post = new Post();
        $post->code = 'SOS10';
        $post->title = 'Java';
        $post->salary = '3-5 triệu';
        $post->position = 'Nhân viên chính thức';
        $post->experience = '6 tháng';
        $post->expiration_date = '2021-12-30';
        $post->description = 'Vất lắm';
        $post->quantity = 3;
        $post->gender = 'Nữ';
        $post->status = 1;
        $post->city_id = 6;
        $post->job_id = 3;
        $post->employer_id = 1;
        $post->save();

    }
}
