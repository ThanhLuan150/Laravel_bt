<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class database extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'name' => "Nhà Bà Nữ",
                'avatar' => "https://vcdn1-giaitri.vnecdn.net/2023/01/15/nha-ba-nu-3-5642-1673761150.jpg?w=0&h=0&q=100&dpr=2&fit=crop&s=1AXORhs6YMGmPusiVLNzwg",
                'premiere_date' => "2000-01-01",
                'country' => "Viet Nam",
                'description' => "emotion",
                'time_begin' => '2000-01-01 09:00:00',
            ],
            ,
                [
                    'name'=>"Nấc Thang lên thiên đường",
                    'avatar'=>"https://images2.thanhnien.vn/uploaded/tuyenth/2019_10_11/n2_RCAA.jpg?width=500",
                    'premiere_date'=>"2000-01-01",
                    'country'=>"Viet Nam",
                    'description'=>"emotion",
                ],
                [
                    'name'=>"Tây Du Ký",
                    'avatar'=>"https://media.songdep.com.vn/files/thunga/2021/07/01/6-su-that-it-biet-tronbg-phim-tay-du-ky-1986-161413.jpg",
                    'premiere_date'=>"2000-01-01",
                    'country'=>"Viet Nam",
                    'description'=>"emotion",
                ],
    
                [
                    'name'=>"Harry Porter",
                    'avatar'=>"https://media.songdep.com.vn/files/thunga/2021/07/01/6-su-that-it-biet-tronbg-phim-tay-du-ky-1986-161413.jpg",
                    'premiere_date'=>"2000-01-01",
                    'country'=>"Viet Nam",
                    'description'=>"emotion",
                ]
        ]);
        
    }
}
