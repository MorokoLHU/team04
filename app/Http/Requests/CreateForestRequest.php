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
            'farm_name'=>'required|string|min:2',
            'plain_forest_area_hectares'=>'required|numeric|max:1000',
            'public_forest_area_hectares'=>'required|numeric|max:1000',
            'self_funded_forest_area_hectares'=>'required|numeric|max:1000',
            'eco_forest_park_area_hectares'=>'required|numeric|max:1000',
            'total_area_hectares'=>'required|numeric|max:1000',
        ];
    }
    public function messages()
    {
        return
        [
            'farm_name.required' => '農場名稱是必填項。',
            'farm_name.string' => '農場名稱必須是有效的字符串。',
            'farm_name.min' => '農場名稱必須至少 2 個字符。',
            'plain_forest_area_hectares.required' => '平原森林面積是必填項。',
            'plain_forest_area_hectares.numeric' => '平原森林面積必須是有效的數字。',
            'plain_forest_area_hectares.max' => '平原森林面積不能超過 1000 公頃。',
            'public_forest_area_hectares.required' => '公共森林面積是必填項。',
            'public_forest_area_hectares.numeric' => '公共森林面積必須是有效的數字。',
            'public_forest_area_hectares.max' => '公共森林面積不能超過 1000 公頃。',
            'self_funded_forest_area_hectares.required' => '自籌資金森林面積是必填項。',
            'self_funded_forest_area_hectares.numeric' => '自籌資金森林面積必須是有效的數字。',
            'self_funded_forest_area_hectares.max' => '自籌資金森林面積不能超過 1000 公頃。',
            'eco_forest_park_area_hectares.required' => '生態森林公園面積是必填項。',
            'eco_forest_park_area_hectares.numeric' => '生態森林公園面積必須是有效的數字。',
            'eco_forest_park_area_hectares.max' => '生態森林公園面積不能超過 1000 公頃。',
            'total_area_hectares.required' => '總面積是必填項。',
            'total_area_hectares.numeric' => '總面積必須是有效的數字。',
            'total_area_hectares.max' => '總面積不能超過 1000 公頃。',
        ];
    }
}
