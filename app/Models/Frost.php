<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frost extends Model
{
    use HasFactory;

    protected $table="forest_areas";
    protected $fillable = [
        'farm_name',
        'plain_forest_area_hectares',
        'public_forest_area_hectares',
        'self_funded_forest_area_hectares',
        'eco_forest_park_area_hectares',
        'total_area_hectares'
    ];
}
