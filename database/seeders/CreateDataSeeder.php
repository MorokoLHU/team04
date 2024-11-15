<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firstNames = array('稻', '桐','谷','和','人', '翠', '鳥', '菜', '香', 
    '林', '草', '豐', '花', '玉', 
    '果', '田', '農', '瑞', '綠', 
    '星', '水', '晨', '春', '秋');
        $lastNames = array('田', '桐','谷','和','人', '鳴', '園', '畔', 
    '泉', '坪', '禾', '香', '米', 
    '園', '野', '莊', '穗', '地', 
    '田', '岸', '曦', '風', '實');  
        for ($i=0; $i<40; $i++)
        {
            $name = $firstNames[array_rand($firstNames)] . $lastNames[array_rand($lastNames)];
            
            $area_hectares1 = rand(1.22*100, 450.71*100)/100;
            $area_hectares2 = rand(1.22*100, 10.71*100)/100;
            $area_hectares3 = rand(1.2*100, 100.71*100)/100;
            $area_hectares4 = rand(1.2*100,20.71*100)/100;
            $total_area_hectares = $area_hectares1+ $area_hectares2+ $area_hectares3+ $area_hectares4;
            
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
           
            DB::table('forest_areas')->insert([
                'farm_name' => $name,
                'plain_forest_area_hectares' => $area_hectares1,
                'public_forest_area_hectares' => $area_hectares2,
                'self_funded_forest_area_hectares' => $area_hectares3,
                'eco_forest_park_area_hectares' =>  $area_hectares4,
                'total_area_hectares' => $total_area_hectares,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}