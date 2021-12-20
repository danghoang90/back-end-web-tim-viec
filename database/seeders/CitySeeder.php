<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;
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
        $city = new City();
        $city->name = 'Toàn Quốc';
        $city->id = '1';
        $city->save();
        $cities = [
                        ["name" =>"Hồ Chí Minh"],
                        ["name" =>"Hà Nội"],
                        ["name" =>"An Giang"],
                        ["name" =>"Bạc Liêu"],
                        ["name" =>"Bà Rịa-Vũng Tàu"],
                        ["name" =>"Bắc Cạn"],
                        ["name" =>"Bắc Giang"],
                        ["name" =>"Bắc Ninh"],
                        ["name" =>"Bến Tre"],
                        ["name" =>"Bình Dương"],
                        ["name" =>"Bình Định"],
                        ["name" =>"Bình Phước"],
                        ["name" =>"Bình Thuận"],
                        ["name" =>"Cao Bằng"],
                        ["name" =>"Cà Mau"],
                        ["name" =>"Cần Thơ"],
                        ["name" =>"Đà Nẵng"],
                        ["name" =>"Đắk Lắk"],
                        ["name" =>"Đắk Nông"],
                        ["name" =>"Điện Biên"],
                        ["name" =>"Đồng Nai"],
                        ["name" =>"Đồng Tháp"],
                        ["name" =>"Gia Lai"],
                        ["name" =>"Hà Giang"],
                        ["name" =>"Hà Nam"],
                        ["name" =>"Hà Tĩnh"],
                        ["name" =>"Hải Dương"],
                        ["name" =>"Hải Phòng"],
                        ["name" =>"Hậu Giang"],
                        ["name" =>"Hòa Bình"],
                        ["name" =>"Hưng Yên"],
                        ["name" =>"Khánh Hòa"],
                        ["name" =>"Kiên Giang"],
                        ["name" =>"Kon Tum"],
                        ["name" =>"Lai Châu"],
                        ["name" =>"Lạng Sơn"],
                        ["name" =>"Lào Cai"],
                        ["name" =>"Lâm Đồng"],
                        ["name" =>"Long An"],
                        ["name" =>"Nam Định"],
                        ["name" =>"Nghệ An"],
                        ["name" =>"Ninh Bình"],
                        ["name" =>"Ninh Thuận"],
                        ["name" =>"Phú Thọ"],
                        ["name" =>"Phú Yên"],
                        ["name" =>"Quảng Bình"],
                        ["name" =>"Quảng Nam"],
                        ["name" =>"Quảng Ngãi"],
                        ["name" =>"Quảng Ninh"],
                        ["name" =>"Quảng Trị"],
                        ["name" =>"Sóc Trăng"],
                        ["name" =>"Sơn La"],
                        ["name" =>"Tây Ninh"],
                        ["name" =>"Thái Bình"],
                        ["name" =>"Thái Nguyên"],
                        ["name" =>"Thanh Hóa"],
                        ["name" =>"Thừa Thiên-Huế"],
                        ["name" =>"Tiền Giang"],
                        ["name" =>"Trà Vinh"],
                        ["name" =>"Tuyên Quang"],
                        ["name" =>"Vĩnh Long"],
                        ["name" =>"Vĩnh Phúc"],
                        ["name" =>"Yên Bái"],

                        ["name" =>"Nước ngoài"]
        ];

        try {
            foreach ($cities as $city) {
                City::create($city);
            }
        } catch (\Throwable $th) {

        }

    }
}
