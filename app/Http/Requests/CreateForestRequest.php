<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateForestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'farm_name' => 'required|string|min:2',
            'plain_forest_area_hectares' => 'required|numeric|max:1000',
            'public_forest_area_hectares' => 'required|numeric|max:1000',
            'self_funded_forest_area_hectares' => 'required|numeric|max:1000',
            'eco_forest_park_area_hectares' => 'required|numeric|max:1000',
            'total_area_hectares' => 'required|numeric|max:10000'
            //
        ];
    }

    public function messages()
    {
        return
            [
                'farm_name.required' => '農場名稱 必填',
                'farm_name.min' => '農場名稱 至少需要2個字',
                'plain_forest_area_hectares.required' => '平地造林面積公頃 必填',
                'plain_forest_area_hectares.numeric' => '平地造林面積公頃 僅接受數字',
                'plain_forest_area_hectares.max' => '平地造林面積公頃 請小於1000公頃',
                'public_forest_area_hectares.required' => '全民造林面積公頃 必填',
                'public_forest_area_hectares.numeric' => '全民造林面積公頃 僅接受數字',

                'public_forest_area_hectares.max' => '全民造林面積公頃 請小於1000公頃',
                
                'self_funded_forest_area_hectares.required' => '自費造林面積公頃 必填',
                'self_funded_forest_area_hectares.numeric' => '自費造林面積公頃 僅接受數字',

                'self_funded_forest_area_hectares.max' => '自費造林面積公頃 請小於1000公頃',

                'eco_forest_park_area_hectares.required' => '環保林園大道面積公頃 必填',
                'eco_forest_park_area_hectares.numeric' => '環保林園大道面積公頃 僅接受數字',

                'eco_forest_park_area_hectares.max' => '環保林園大道面積公頃 請小於1000公頃',
                
                'total_area_hectares.required' => '合計面積公頃 必填',
                'total_area_hectares.numeric' => '合計面積公頃僅接受數字',

                'total_area_hectares.max' => '合計面積公頃 請小於10000公頃',
            ];

    }
}
