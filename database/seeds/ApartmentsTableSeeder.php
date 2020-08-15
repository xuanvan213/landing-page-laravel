<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apartments')->insert([
            [
                'name'=>'Căn Hộ 2 Phòng Ngủ',
                'floors'=>10,
                'descriptions'=>'Các căn hộ ST.Moritz được thiết kế đảm bảo chức năng gồm:
                <br>
                Phòng khách <br>
                Phòng ngủ <br>
                Gian bếp <br>
                Phòng ăn <br>
                Khu vực sân phơi và lô gia <br>
                Một số căn hộ được thiết kế góc học tập hoặc phòng đọc sách đảm bảo không gian riêng biệt.',
                'project_id'=>1,
                'rooms'=>2,
                'status'=>3,
                'index'=>1,
                'type'=>1,
            ],
            [
                'name'=>'Căn Hộ 3 Phòng Ngủ',
                'floors'=>19,
                'descriptions'=>'Các căn hộ ST.Moritz được thiết kế đảm bảo chức năng gồm:
                <br>
                Phòng khách <br>
                Phòng ngủ <br>
                Gian bếp <br>
                Phòng ăn <br>
                Khu vực sân phơi và lô gia <br>
                Một số căn hộ được thiết kế góc học tập hoặc phòng đọc sách đảm bảo không gian riêng biệt.',
                'project_id'=>1,
                'rooms'=>3,
                'status'=>3,
                'index'=>1,
                'type'=>1,
            ],
            [
                'name'=>'Văn Phòng',
                'floors'=>3,
                'descriptions'=>'Đặc biệt, mỗi căn hộ đều được trang bị hệ thống khóa từ thông minh, hệ thống liên lạc nội bộ – intercom giúp đảm bảo an ninh tuyệt đối, giúp cư dân an tâm sinh sống và làm việc tại đây.
                Đối với căn hộ officetel ST.Moritz có diện tích nhỏ trung bình từ 43 – 56 m2 nhằm tối ưu hóa công năng và diện tích sử dụng. Sự đa năng của mô hình căn hộ văn phòng đảm bảo mang lại lợi ích kinh tế cho chủ nhân sở hữu, đồng thời tạo điều kiện để người làm việc phát huy tối đa năng suất và gia tăng thời gian làm việc.',
                'project_id'=>1,
                'rooms'=>0,
                'status'=>3,
                'index'=>1,
                'type'=>2,
            ],
        ]);
    }
}
