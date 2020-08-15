<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'name'=>'DỰ ÁN CĂN HỘ ST MORITZ PHẠM VĂN ĐỒNG THỦ ĐỨC',
            'introduce'=>'ST Moritz (Saint Moritz) là dự án căn hộ chung cư tại Mặt tiền đường Phạm Văn Đồng, Phường Hiệp Bình Chánh, Quận Thủ Đức, Tp.HCM. Căn hộ ST.Moritz do Tập đoàn Đất Xanh Group làm chủ đầu tư sau nhiều thành công với chuỗi dự án Opal như: Opal Riverside, Opal Garden, Opal Skyview, Opal City, Opal Boulevard. Dự án ST Moritz với quy mô  3326 m2 với 1 block căn hộ cao 21 tầng với căn hộ chung cư & Officetel. <br>  Dự án ST Moritz –  Biểu tượng thượng lưu trên đại lộ Phạm Văn Đồng
            ST Moritz – Dự án khu căn hộ và văn phòng hạng sang với pháp lý hoàn chỉnh
            Dự án văn phòng & căn hộ khách sạng 5 sao đầu tiên trên đại lộ Phạm Văn Đồng
            Dự án căn hộ & văn phòng hạng sang đầu tiên trên đại lộ Phạm Văn Đồng 
            Tên dự án: ST.Moritz
            Tên cũ: Opal SkyView
            Vị trí dự án: Mặt tiền Phạm Văn Đồng, P. Hiệp Bình Chánh, Q. Thủ Đức, Tp.HCM
            Chủ đầu tư: Đất Xanh Group
            Nhà thầu chính: Công Ty Cổ Phần Xây Dựng Phước Thành.
            Tư vấn giám sát: Công Ty TNHH DV DT Và XD Quốc Tế ICIC.
            Tư vấn thiết kế: Công ty Cổ phần Tư Vấn Xây Dựng Ánh Sáng Phương Nam.
            Tư vấn thẩm tra: Công Ty CP TV Thiết Kế Công Nghiệp Và Dân Dụng IDCO.
            Đơn vị thẩm định: Cục Quản Lý Hoạt Động Xây Dựng – Bộ Xây Dựng.
            Quy mô dự án: 2,400.6 m².
            Tổng Diện tích Sàn xây dựng: 22,328.37 m².
            Tổng chiều cao: 73,8m.
            Mật độ xây dựng: 43,7% (khối đế) và 42% (khối tháp).
            Sản phẩm: Căn hộ 2 phòng ngủ, căn hộ 3 phòng ngủ và Officetel & Shophouse.
            Số block: 1 block chung cư.
            Số tầng: 21 tầng nổi & 2 tầng hầm.
            Tổng số lượng căn hộ: 170 căn (4 căn Shophouse – 63 căn Officetel – 103 căn hộ).
            Tiện ích nội khu: Hồ bơi Skyview, Khu công viên nội khu, Phòng gym & Café sân vườn, Camera an ninh, Hệ thống thẻ từ căn hộ, Hệ thống Video Call,..',
            'address'=>'Phạm Văn Đồng, P. Hiệp Bình Chánh, Q. Thủ Đức, Tp.HCM',
            'status'=>3,
            'logo'=>'logo.jpg'
        ]);
    }
}
