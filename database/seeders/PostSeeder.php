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

        $post = new Post();
        $post->code = 'STK11';
        $post->title = 'Chuyên Viên IT Quản Trị Hệ Thống';
        $post->majors = 'Lập Trình Viên';
        $post->salary = '5-10 triệu';
        $post->position = 'Nhân viên';
        $post->experience = '2 năm';
        $post->expiration_date = '2022-1-11';
        $post->description = '- Quản lý hệ thống trang thiết bị CNTT, thực hiện bảo trì, sửa chữa thiết bị CNTT

- Lắp đặt, quản trị, giám sát hoạt động mạng LAN và Wan của BĐHN

- Tham gia triển khai, hướng dẫn, đào tạo người lao động vận hành các hệ thống phần mềm của Bưu điện VN';
        $post->quantity = 3;
        $post->gender = 'Nam';
        $post->status = 1;
        $post->city_id = 12;
        $post->job_type_id = 3;
        $post->employer_id = 3;
        $post->save();

        $post = new Post();
        $post->code = 'STK12';
        $post->title = 'Nhân Viên Video Editor';
        $post->majors = 'Lập Trình Viên';
        $post->salary = '5-7 triệu';
        $post->position = 'Nhân viên';
        $post->experience = '1 năm';
        $post->expiration_date = '2022-1-21';
        $post->description = '- Quay, dựng video, chụp ảnh, cắt ghép các clip để tạo thành 1 clip hoàn chỉnh.

- Xây dựng các clip quảng cáo, clip Viral, video giới thiệu sản phẩm, mô tả sản phẩm.

- Sáng tạo các nội dung video mới theo trend và định hướng của Công ty.

- Chỉnh sửa, tạo hiệu ứng để hoàn chỉnh các video, clip theo yêu cầu của Công ty.';
        $post->quantity = 2;
        $post->gender = 'Nam';
        $post->status = 1;
        $post->city_id = 22;
        $post->job_type_id = 4;
        $post->employer_id = 3;
        $post->save();


        $post = new Post();
        $post->code = 'STK13';
        $post->title = 'Nhân Viên SEO Website';
        $post->majors = 'Nhân Viên Kinh Doanh';
        $post->salary = '5-7 triệu';
        $post->position = 'Trưởng Nhóm';
        $post->experience = '1 năm';
        $post->expiration_date = '2022-1-15';
        $post->description = ' Xây dựng chiến lược & kế hoạch SEO tổng thể + chi tiết cho công ty;
 Lập kế hoạch phát triển từ khóa; Định hướng content chuẩn SEO;
 Phân tích đối thủ cạnh tranh, thị trường;
 Chủ động đề xuất, triển khai các công cụ và phương pháp Marketing online để đẩy mạnh kết quả SEO; ';
        $post->quantity = 2;
        $post->gender = 'Nam';
        $post->status = 1;
        $post->city_id = 25;
        $post->job_type_id = 2;
        $post->employer_id = 4;
        $post->save();


        $post = new Post();
        $post->code = 'STK14';
        $post->title = 'Nhân Viên Kỹ Thuật IT';
        $post->majors = 'Lập Trình Viên';
        $post->salary = '5-7 triệu';
        $post->position = 'Nhân viên';
        $post->experience = '6 tháng';
        $post->expiration_date = '2022-1-10';
        $post->description = ' - Hỗ trợ người dùng xử lý các sự cố máy tính

- Theo dõi và vận hành hệ thống mạng và máy chủ

- Quản trị các ứng dụng nội bộ của công

- Hỗ trợ Kinh Doanh lập các đề xuất kỹ thuật.

- Làm việc theo team, ứng viên được tuyển sẽ được phân công tùy kinh nghiệm và kỹ năng';
        $post->quantity = 3;
        $post->gender = 'Nam';
        $post->status = 1;
        $post->city_id = 1;
        $post->job_type_id = 1;
        $post->employer_id = 4;
        $post->save();


        $post = new Post();
        $post->code = 'STK15';
        $post->title = 'Nhân Viên Xưởng Vụ';
        $post->majors = 'Hành Chính Nhân Sự';
        $post->salary = '3-5 triệu';
        $post->position = 'Trưởng Phòng';
        $post->experience = '6 tháng';
        $post->expiration_date = '2022-1-20';
        $post->description = ' - Hỗ trợ công việc ở xưởng sản xuất

- Làm báo cáo, báo biểu tiến độ

- Trao đổi cụ thể khi phỏng vấn';
        $post->quantity = 1;
        $post->gender = 'Nam';
        $post->status = 1;
        $post->city_id = 17;
        $post->job_type_id = 3;
        $post->employer_id = 4;
        $post->save();


        $post = new Post();
        $post->code = 'STK16';
        $post->title = 'Tư Vấn Dịch Vụ Website';
        $post->majors = 'Tư Vấn Viên';
        $post->salary = '7-10 triệu';
        $post->position = 'Nhân viên';
        $post->experience = '6 tháng';
        $post->expiration_date = '2022-2-2';
        $post->description = ' + Hướng dẫn cho khách hàng đang sử dụng Thành Viên của trang ThuVienPhapLuat, cách thức sử dụng trang này. (Họ là các chuyên viên pháp lý, luật sư, viên chức, doanh nhân, quản lý phòng ban, kế toán ...);

+ Nếu khách hàng có nhu cầu sử dụng các Dịch Vụ trả phí thì bạn tư vấn để khách hàng sử dụng các dịch vụ đó;';
        $post->quantity = 2;
        $post->gender = 'Nữ';
        $post->status = 1;
        $post->city_id = 19;
        $post->job_type_id = 2;
        $post->employer_id = 5;
        $post->save();
    }
}
