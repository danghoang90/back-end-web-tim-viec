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
                "email" => "admin@gmail.com",
                "password" => "$2y$10$7MXhmHxrR7k4ioOlIiJUI.Aux.mYyM4nZveg0P5r49v5IBw2YHnb6",
                "contact_person_name" => "Hoa Sen",
                "phone_number" => "0977460093",
                "name_employer" => "Công ty Cổ phần Tập đoàn Hoa Sen",
                "address_employer" => "183 Nguyễn Văn Trỗi, P.10, Quận Phú Nhuận, Tp.Hồ Chí Minh",
                "city" => "km",
                "status" => "2",
                "personnel_size" => "50-100 người",
                "company_profile" => 'Công ty Cổ Phần Tập Đoàn Hoa Sen là một Doanh nghiệp chuyên sản xuất và kinh doanh Tôn – Thép – Ống Nhựa - Sản phẩm Thương mại với hơn 600 chi nhánh trải dài trên cả nước.

Quy mô: Từ 5.000-10.000 người.

Chúng tôi tự hào về một nền văn hóa Doanh nghiệp đặc biệt gắn liền với sự phát triển bản thân và chia sẻ lợi ích – gánh vác trách nhiệm xã hội trên nền tảng: “Trung thực – Cộng đồng – Phát triển"',
                "logo" => "https://cdn.topcv.vn/140/company_logos/cong-ty-co-phan-tap-doan-hoa-sen-5abef8f2b83d1_rs.jpg",
                "website" => "https://www.hoasen.vn/"

            ],
            [
                "email" => "loship@gmail.com",
                "password" => "$2y$10$7MXhmHxrR7k4ioOlIiJUI.Aux.mYyM4nZveg0P5r49v5IBw2YHnb6",
                "contact_person_name" => "Lozi",
                "phone_number" => "0977460093",
                "name_employer" => "Công Ty Cổ Phần Lozi Việt Nam (Loship)",
                "address_employer" => "183 Nguyễn Văn Trỗi, P.10, Quận Phú Nhuận, Tp.Hồ Chí Minh",
                "city" => "HaNoi",
                "status" => "2",
                "personnel_size" => "50-100 người",
                "company_profile" => '
                LOZI được đánh giá là một trong 5 Start Up Việt Nam đáng chú ý trong năm 2016. Bên cạnh đó LOZI còn được nhắc đến tại chương trình Cafe sáng, Thời sự, Nhịp sống và công nghệ, Cafe khởi nghiệp và chương trình Chuyến xe khởi nghiệp của đài VTV.

Hiểu về Loship:

Loship là một trong những dịch vụ vận chuyển đồ ăn lớn nhất Việt Nam, chúng tôi được tạo ra bởi người Việt Nam với sứ mệnh cải thiện các bữa ăn của người dùng Việt Nam được tốt hơn. Hiện tại, chúng tôi đang hoạt động trong 6 lĩnh vực: Giao đồ ăn; Giao rau, củ quả tươi; Giặt là; Giao thuốc; Giao bưu phẩm siêu tốc và giao thương mại điện tử một giờ. Chúng tôi sử dụng dữ liệu và công nghệ để cải thiện toàn bộ hoạt động thương mại đến vận chuyển trên cả Việt Nam. Làm việc với chính phủ, tài xế, và cộng đồng khách hàng, chúng tôi mong muốn giải quyết những vấn đề lớn của Việt Nam trong thương mại và lĩnh vực vận chuyển.

',
                "logo" => "https://cdn.topcv.vn/135/company_logos/cong-ty-co-phan-lozi-viet-nam-loship-6099feb5e279f.jpg",
                "website" => "https://www.loship.vn/"

            ],
            [
                "email" => "cmc@gmail.com",
                "password" => "$2y$10$7MXhmHxrR7k4ioOlIiJUI.Aux.mYyM4nZveg0P5r49v5IBw2YHnb6",
                "contact_person_name" => "CMC GLOBAL",
                "phone_number" => "0977460093",
                "name_employer" => "Công ty TNHH CMC GLOBAL",
                "address_employer" => "Tầng 8-9, Tòa CMC, Duy Tân, Cầu Giấy, Hà Nội",
                "city" => "Hà Nội",
                "status" => "2",
                "personnel_size" => "50-100 người",
                "company_profile" => '
                CMC Global ra đời từ kinh nghiệm 25 năm trong lĩnh vực ICT và hơn 10 năm kinh nghiệm trong lĩnh vực Outsourcing của Tập đoàn công nghệ CMC, với sứ mệnh trở thành đơn vị cung cấp nhân lực kỹ sư phần mềm chất lượng cao, cung cấp các giải pháp, dịch vụ CNTT cho thị trường quốc tế. Hiện CMC Global đang sở hữu đến 700++ nhân viên, cùng một công ty thành viên tại Nhật Bản.

Tập đoàn công nghệ CMC cùng CMC Global tự hào là một trong những doanh nghiệp hàng đầu Việt Nam trong lĩnh vực phát triển, cung cấp các giải pháp và dịch vụ phần mềm. Chia sẻ chung những tiêu chí tiên quyết cho sự phát triển của Tập đoàn CMC: Sáng tạo, Chuyên nghiệp, Đồng đội, CMC Global luôn nỗ lực không ngừng để xây dựng một tập thể vững mạnh, tiên phong trong nền công nghệ Việt Nam và ngày một vươn xa ra thế giới.

Với mục tiêu đưa các sản phẩm và dịch vụ công nghệ cao của CMC ra thế giới, CMC Global đang xây dựng những nền móng đầu tiên với tham vọng: có ít nhất 2.000 người làm việc ở nước ngoài vào năm 2022; doanh thu phần mềm và dịch vụ từ thị trường xuất khẩu lớn hơn thị trường trong nước; có nhiều sản phẩm và dịch vụ đạt tiêu chuẩn hàng đầu thế giới. Trong tương lai, ngoài công ty thành viên CMC Japan tại Nhật Bản, CMC Global sẽ mở thêm các chi nhánh tại các nước châu Á như Singapore, Malaysia,….

Chiến lược đầu tư của CMC Global được định vị có phần khác biệt so với các công ty outsourcing cũng ngành ở thị trường Việt Nam. CMC Global sẽ chú trọng vào việc phát triển nguồn lực, chuẩn hóa qui trình cung cấp dịch vụ và phát triển phần mềm, đào tạo nhân sự chất lượng cao, cùng lúc thu hút số lượng lớn các nhân tài trong lĩnh vực công nghệ thông tin. Đồng thời, CMC Global cũng sẽ là đại diện, cầu nối cho các công ty thành viên của CMC trong việc cung cấp các giải pháp và dịch vụ tích hợp trọn gói ra thế giới.
',
                "logo" => "https://static.topcv.vn/company_logos/cong-ty-tnhh-cmc-global-1d94bf2be044cc832cd72d2f4f8fad66-5e72d0edadcfb.jpg",
                "website" => "http://cmcglobal.com.vn/"

            ],
            [
                "email" => "ipos@gmail.com",
                "password" => "$2y$10$7MXhmHxrR7k4ioOlIiJUI.Aux.mYyM4nZveg0P5r49v5IBw2YHnb6",
                "contact_person_name" => "iPOS.vn",
                "phone_number" => "0977460093",
                "name_employer" => "Công ty Công nghệ hàng đầu Việt Nam",
                "address_employer" => "Tầng 8-9, Tòa CMC, Duy Tân, Cầu Giấy, Hà Nội",
                "city" => "Hà Nội",
                "status" => "2",
                "personnel_size" => "50-100 người",
                "company_profile" => '
                iPOS.vn là công ty chuyên sản xuất, kinh doanh các giải pháp phần mềm và phần cứng chuyên nghiệp, hiện đại trong lĩnh vực quản lý nhà hàng/café, phù hợp với nhiều mô hình dịch vụ khác nhau. Liên tục cập nhật công nghệ mới để tạo ra các sản phẩm và dịch vụ tốt nhất, góp phần cùng các thương hiệu nâng tầm ẩm thực Việt là kim chỉ nam hoạt động của iPOS.vn.

Được thành lập năm 2010 bởi những con người có trên 10 năm kinh nghiệm trong lĩnh vực kinh doanh nhà hàng và gần 15 năm hoạt động trong ngành công nghệ thông tin, iPOS.vn hiện đang sở hữu 12 chi nhánh trên khắp 3 miền Việt Nam và là đối tác của hơn 30.000 thương hiệu trong nước và quốc tế. Kỳ tích này có được là nhờ đội ngũ lãnh đạo có tầm nhìn chiến lược, đội ngũ nhân viên mẫn cán nhiệt huyết và trên hết là những sản phẩm thông minh chiếm được niềm tin của khách hàng.

Những cá nhân trong iPOS.vn chính là cốt lõi tạo nên những giá trị cho doanh nghiệp và xã hội. Mỗi nhân viên đều có cơ hội cống hiến, đưa tiếng nói riêng hướng đến mục đích chung tạo ra một môi trường công bằng, thân thiện và thử thách.
',
                "logo" => "https://www.topcv.vn/brand/ipos",
                "website" => "http://iPOS.vn/"

            ],
            [
                "email" => "danhkhoi@gmail.com",
                "password" => "$2y$10$7MXhmHxrR7k4ioOlIiJUI.Aux.mYyM4nZveg0P5r49v5IBw2YHnb6",
                "contact_person_name" => "DANH KHÔI",
                "phone_number" => "0977460093",
                "name_employer" => "TẬP ĐOÀN DANH KHÔI",
                "address_employer" => "Tầng 8-9, Tòa CMC, Duy Tân, Cầu Giấy, Hà Nội",
                "city" => "Hà Nội",
                "status" => "2",
                "personnel_size" => "50-100 người",
                "company_profile" => '
                Thành lập từ năm 2006, với bề dày hoạt động và tích luỹ kinh nghiệm, Tập đoàn Danh Khôi đã mang đến cho khách hàng hàng chục ngàn sản phẩm bất động sản thông qua các dự án dân dụng và nghỉ dưỡng cùng những dịch vụ chuẩn mực. Với tiềm lực tài chính vững mạnh, đội ngũ nhân sự nhiệt huyết và giàu kinh nghiệm, Tập đoàn mở rộng quy mô hoạt động với nền tảng vững chắc ở nhiều công đoạn trong chuỗi giá trị bất động sản và không ngừng nỗ lực gặt hái nhiều thành tựu, trở thành một trong những nhà phát triển bất động sản uy tín hàng đầu khu vực.

               ',
                "logo" => "https://cdn.topcv.vn/140/company_logos/tap-doan-danh-khoi-6178aa457d4b9.jpg",
                "website" => " http://careers.danhkhoi.com.vn/"

            ],
            [
                "email" => "danhkhoi@gmail.com",
                "password" => "$2y$10$7MXhmHxrR7k4ioOlIiJUI.Aux.mYyM4nZveg0P5r49v5IBw2YHnb6",
                "contact_person_name" => "DANH KHÔI",
                "phone_number" => "0977460093",
                "name_employer" => "TẬP ĐOÀN DANH KHÔI",
                "address_employer" => "Tầng 8-9, Tòa CMC, Duy Tân, Cầu Giấy, Hà Nội",
                "city" => "Hà Nội",
                "status" => "2",
                "personnel_size" => "50-100 người",
                "company_profile" => '
                Thành lập từ năm 2006, với bề dày hoạt động và tích luỹ kinh nghiệm, Tập đoàn Danh Khôi đã mang đến cho khách hàng hàng chục ngàn sản phẩm bất động sản thông qua các dự án dân dụng và nghỉ dưỡng cùng những dịch vụ chuẩn mực. Với tiềm lực tài chính vững mạnh, đội ngũ nhân sự nhiệt huyết và giàu kinh nghiệm, Tập đoàn mở rộng quy mô hoạt động với nền tảng vững chắc ở nhiều công đoạn trong chuỗi giá trị bất động sản và không ngừng nỗ lực gặt hái nhiều thành tựu, trở thành một trong những nhà phát triển bất động sản uy tín hàng đầu khu vực.

               ',
                "logo" => "https://cdn.topcv.vn/140/company_logos/tap-doan-danh-khoi-6178aa457d4b9.jpg",
                "website" => " http://careers.danhkhoi.com.vn/"

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
