<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class forestareasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['farm_name' => '萬隆', 'plain_forest_area_hectares' => 240.84, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 3.46, 'total_area_hectares' => 244.3],
            ['farm_name' => '新赤', 'plain_forest_area_hectares' => 450.59, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 22.5, 'total_area_hectares' => 473.09],
            ['farm_name' => '林後', 'plain_forest_area_hectares' => 335.7, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 4.64, 'total_area_hectares' => 340.34],
            ['farm_name' => '四林', 'plain_forest_area_hectares' => 339.14, 'public_forest_area_hectares' => 10.2, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 8.5, 'total_area_hectares' => 347.64],
            ['farm_name' => '隘寮溪', 'plain_forest_area_hectares' => 91.74, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 0, 'total_area_hectares' => 91.74],
            ['farm_name' => '甘棠門', 'plain_forest_area_hectares' => 0, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 8.2, 'total_area_hectares' => 8.2],
            ['farm_name' => '六塊厝', 'plain_forest_area_hectares' => 14.72, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 9.21, 'total_area_hectares' => 23.93],
            ['farm_name' => '崇蘭', 'plain_forest_area_hectares' => 23.03, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 20.86, 'total_area_hectares' => 43.89],
            ['farm_name' => '海豐', 'plain_forest_area_hectares' => 21.03, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 18.22, 'total_area_hectares' => 39.25],
            ['farm_name' => '彭厝', 'plain_forest_area_hectares' => 0, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 16.11, 'total_area_hectares' => 16.11],
            ['farm_name' => '土庫', 'plain_forest_area_hectares' => 42.24, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 0.77, 'total_area_hectares' => 43.01],
            ['farm_name' => '屏農計', 'plain_forest_area_hectares' => 1559.03, 'public_forest_area_hectares' => 10.2, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 112.47, 'total_area_hectares' => 1671.5],
            ['farm_name' => '崁頂', 'plain_forest_area_hectares' => 16.68, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 6.56, 'total_area_hectares' => 23.24],
            ['farm_name' => '武邊', 'plain_forest_area_hectares' => 101.95, 'public_forest_area_hectares' => 1.27, 'self_funded_forest_area_hectares' => 0.05, 'eco_forest_park_area_hectares' => 6.04, 'total_area_hectares' => 109.31],
            ['farm_name' => '大餉營', 'plain_forest_area_hectares' => 548.99, 'public_forest_area_hectares' => 17.1, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 9.52, 'total_area_hectares' => 575.61],
            ['farm_name' => '昌隆', 'plain_forest_area_hectares' => 243.22, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 4.04, 'total_area_hectares' => 247.26],
            ['farm_name' => '太源', 'plain_forest_area_hectares' => 172.37, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 3.44, 'eco_forest_park_area_hectares' => 6.1, 'total_area_hectares' => 181.91],
            ['farm_name' => '建功', 'plain_forest_area_hectares' => 203.01, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 3.36, 'total_area_hectares' => 206.37],
            ['farm_name' => '南岸', 'plain_forest_area_hectares' => 319.92, 'public_forest_area_hectares' => 7.67, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 7.88, 'total_area_hectares' => 335.47],
            ['farm_name' => '興華', 'plain_forest_area_hectares' => 582.83, 'public_forest_area_hectares' => 8.54, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 7.8, 'total_area_hectares' => 599.17],
            ['farm_name' => '南農計', 'plain_forest_area_hectares' => 2188.97, 'public_forest_area_hectares' => 34.58, 'self_funded_forest_area_hectares' => 3.49, 'eco_forest_park_area_hectares' => 51.3, 'total_area_hectares' => 2278.34],
            ['farm_name' => '區處計', 'plain_forest_area_hectares' => 3748, 'public_forest_area_hectares' => 44.78, 'self_funded_forest_area_hectares' => 3.49, 'eco_forest_park_area_hectares' => 163.77, 'total_area_hectares' => 3949.84],
            ['farm_name' => '富源', 'plain_forest_area_hectares' => 0, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 0, 'total_area_hectares' => 542.72],
            ['farm_name' => '瑞源', 'plain_forest_area_hectares' => 0, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 6.81, 'total_area_hectares' => 427.9],
            ['farm_name' => '豐樂', 'plain_forest_area_hectares' => 0, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 0, 'total_area_hectares' => 17.13],
            ['farm_name' => '大農', 'plain_forest_area_hectares' => 0, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 0.67, 'total_area_hectares' => 544.62],
            ['farm_name' => '大富', 'plain_forest_area_hectares' => 0, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 17.1, 'total_area_hectares' => 481.03],
            ['farm_name' => '中原', 'plain_forest_area_hectares' => 0, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 0, 'total_area_hectares' => 695.22],
            ['farm_name' => '林田', 'plain_forest_area_hectares' => 0, 'public_forest_area_hectares' => 0, 'self_funded_forest_area_hectares' => 0, 'eco_forest_park_area_hectares' => 0, 'total_area_hectares' => 387.2],
        ];

        DB::table('forest_areas')->insert($data);
    }
}
