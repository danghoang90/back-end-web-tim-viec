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
        $post->title = 'Nhân Viên Tư Vấn Du Học';
        $post->majors = 'Tư Vấn Viên';
        $post->salary = '3-5 triệu';
        $post->position = 'Trưởng Phòng';
        $post->experience = '6 tháng';
        $post->expiration_date = '2021-12-24';
        $post->description = '- Tư vấn cho phụ huynh, học sinh thông tin du học tại các nước Nhật Bản, Hàn Quốc, Trung Quốc.
- Chốt hợp đồng với khách hàng.
- Hỗ trợ luyện phỏng vấn cho học sinh để lấy Visa.';
        $post->quantity = 6;
        $post->gender = 'Nam';
        $post->status = 1;
        $post->city_id = 4;
        $post->job_type_id = 2;
        $post->employer_id = 2;
        $post->save();

        $post = new Post();
        $post->code = 'SOS10';
        $post->title = 'Trưởng Nhóm IT';
        $post->majors = 'Lập Trình Viên';
        $post->salary = '5-10 triệu';
        $post->position = 'Trưởng Nhóm';
        $post->experience = '1 năm';
        $post->expiration_date = '2021-12-30';
        $post->description = '- Thực hiện công tác quản trị hệ thống phần cứng như: Hệ thống mạng, máy tính, điện thoại,..tại công ty

- Các công việc lưu trữ hệ thống thông tin, tài sản liên quan

- Hỗ trợ các công việc hành chính văn phòng khác theo sự phân công của TP.HCNS';
        $post->quantity = 3;
        $post->gender = 'Nữ';
        $post->status = 1;
        $post->city_id = 6;
        $post->job_type_id = 3;
        $post->employer_id = 1;
        $post->save();
        $post = new Post();
        $post->code = 'STT10';
        $post->title = 'Nhân Viên Văn Phòng';
        $post->majors = 'Hành Chính Nhân Sự';
        $post->salary = '5-10 triệu';
        $post->position = 'Nhân viên';
        $post->experience = '1 năm';
        $post->expiration_date = '2021-12-30';
        $post->description = '- Theo dõi, xây dựng và thường xuyên đôn thúc nhắc nhở bộ phận kinh doanh thực hiện đúng với kế hoạch, chiến lược đã được phê duyệt.

- Tiếp nhận và nhập liệu thông tin data khách hàng để cung cấp cho kinh doanh

- Quản lý hồ sơ khách hàng';
        $post->quantity = 2;
        $post->gender = 'Nam';
        $post->status = 2;
        $post->city_id = 23;
        $post->job_type_id = 2;
        $post->employer_id = 2;
        $post->save();

        $post = new Post();
        $post->code = 'STK10';
        $post->title = 'Giám Đốc Kinh Doanh Dự Án';
        $post->majors = 'Nhân Viên Kinh Doanh';
        $post->salary = '5-10 triệu';
        $post->position = 'Giám đốc';
        $post->experience = '1 năm';
        $post->expiration_date = '2021-12-30';
        $post->description = '- Trưởng phòng Kinh doanh là người chịu trách nhiệm điều phối đội ngũ kinh doanh

- Phân tích hành vi người tiêu dùng, thị trường, dựa trên những số liệu này để xây dựng các kế hoạch kinh doanh và điều chỉnh các kế hoạch đó phù hợp với chỉ định của các cấp trên nhằm đạt mục tiêu doanh số..';
        $post->quantity = 1;
        $post->gender = 'Nữ';
        $post->status = 1;
        $post->city_id = 16;
        $post->job_type_id = 3;
        $post->employer_id = 1;
        $post->save();

    }
}
