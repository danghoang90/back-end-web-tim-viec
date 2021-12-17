<?php

namespace Database\Seeders;

use App\Models\Employer;
use Illuminate\Database\Seeder;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employers = [
            [
                "email"=>"admin@gmail.com",
                "password"=>"$2y$10$7MXhmHxrR7k4ioOlIiJUI.Aux.mYyM4nZveg0P5r49v5IBw2YHnb6",
                "contact_person_name"=>"Jimhan",
                "phone_number"=>"0977460093",
                "name_employer"=>"Công ty Cổ phần Tập đoàn Hoa Sen",
                "address_employer"=>"183 Nguyễn Văn Trỗi, P.10, Quận Phú Nhuận, Tp.Hồ Chí Minh",
                "city"=>"km",
                "status"=>"2",
                "personnel_size"=>"50-100 người",
                "company_profile"=>'Công ty Cổ Phần Tập Đoàn Hoa Sen là một Doanh nghiệp chuyên sản xuất và kinh doanh Tôn – Thép – Ống Nhựa - Sản phẩm Thương mại với hơn 600 chi nhánh trải dài trên cả nước.

Quy mô: Từ 5.000-10.000 người.

Chúng tôi tự hào về một nền văn hóa Doanh nghiệp đặc biệt gắn liền với sự phát triển bản thân và chia sẻ lợi ích – gánh vác trách nhiệm xã hội trên nền tảng: “Trung thực – Cộng đồng – Phát triển"',
                "logo"=>"https://cdn.topcv.vn/140/company_logos/cong-ty-co-phan-tap-doan-hoa-sen-5abef8f2b83d1_rs.jpg",
                "website"=>"https://www.topcv.vn/"

            ],
            [
                "email"=>"tranhan@gmail.com",
                "password"=>"$2y$10$7MXhmHxrR7k4ioOlIiJUI.Aux.mYyM4nZveg0P5r49v5IBw2YHnb6",
                "contact_person_name"=>"Jimhan",
                "phone_number"=>"0977460093",
                "name_employer"=>"Công Ty Cổ Phần Lozi Việt Nam (Loship)",
                "address_employer"=>"183 Nguyễn Văn Trỗi, P.10, Quận Phú Nhuận, Tp.Hồ Chí Minh",
                "city"=>"HaNoi",
                "status"=>"2",
                "personnel_size"=>"50-100 người",
                "company_profile"=>'Công ty Cổ Phần Tập Đoàn Hoa Sen là một Doanh nghiệp chuyên sản xuất và kinh doanh Tôn – Thép – Ống Nhựa - Sản phẩm Thương mại với hơn 600 chi nhánh trải dài trên cả nước.

Quy mô: Từ 5.000-10.000 người.

Chúng tôi tự hào về một nền văn hóa Doanh nghiệp đặc biệt gắn liền với sự phát triển bản thân và chia sẻ lợi ích – gánh vác trách nhiệm xã hội trên nền tảng: “Trung thực – Cộng đồng – Phát triển"',
                "logo"=>"https://cdn.topcv.vn/140/company_logos/cong-ty-co-phan-tap-doan-hoa-sen-5abef8f2b83d1_rs.jpg",
                "website"=>"https://www.topcv.vn/"

            ]
        ];
        try {
            foreach ($employers as $employer) {
                Employer::create($employer);
            }
        } catch (\Throwable $th) {

        }
    }
}
