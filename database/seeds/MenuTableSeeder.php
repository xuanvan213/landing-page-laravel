<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert(
        [
            [
            'name'=>'Trang Chủ',
                'project_id'=>1,
            ],
            [
                'name'=>'Giới Thiệu',
                'project_id'=>1,
            ],
            [
                'name'=>'Thư Viện',
                'project_id'=>1,
            ],
            [
                'name'=>'Giá Bán',
                'project_id'=>1,
            ],
            [
                'name'=>'Liên Hệ',
                'project_id'=>1,
            ]]
    );
    }
}
