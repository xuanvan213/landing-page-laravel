<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert(
            [
                [
                    'title'=>'Cuộc sống hiện đại & an toàn',
                    'content'=>'căn hộ ST.Moritz được trang bị như một khu văn phòng chuyên nghiệp với lối vào riêng, sảnh lễ tân, hệ thống thang máy dành riêng cho khách văn phòng…Vấn đề an ninh an toàn cho cộng đồng dân cư sinh sống luôn được chủ đầu tư ST.Moritz Đất Xanh đề cao, khi trạng bị hệ thống kiểm soát an ninh 24/24 và các dịch vụ quản lý tòa nhà chuyên nghiệp…'
                ],
                [
                    'title'=>'Vị trí yên tĩnh',
                    'content'=>'Chung cư ST Moritztọa lạc tại khu dân cư hiện hữu, sầm uất, văn minh an toàn, tách biệt với những ồn ào bên ngoài, giúp cho gia đình bạn có được sự riêng tư, đồng thời cùng sở hữu những tiện ích tuyệt vời tại đây. Hứa hẹn sẽ là một môi trường đáng sống , đáng mơ ước cho gia đình bạn.'
                ],
                [
                    'title'=>'Giá khởi điểm tuyệt vời',
                    'content'=>'Giá bán: 54 Triệu VND/M2'
                ]
            ]);
    }
}
