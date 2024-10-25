<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createforestareas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forest_areas', function (Blueprint $table) {
                $table->id(); // 唯一識別碼
                $table->string('farm_name')->comment('農場別'); // 農場別
                $table->double('plain_forest_area_hectares')->comment('平地造林面積公頃'); // 平地造林面積公頃
                $table->double('public_forest_area_hectares')->comment('全民造林面積公頃'); // 全民造林面積公頃
                $table->double('self_funded_forest_area_hectares')->comment('自費造林面積公頃'); // 自費造林面積公頃
                $table->double('eco_forest_park_area_hectares')->comment('環保林園大道面積公頃'); // 環保林園大道面積公頃
                $table->double('total_area_hectares')->comment('合計面積公頃'); // 合計面積公頃
                $table->timestamps(); // 自動生成 created_at 和 updated_at 欄位    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forest_areas');
    }
}
