@extends('app')

@section('title', 'SDGS造林資料')

@section('Forest_content')

    <div class="" style="margin: 20px 0px 0 0;">

        <div class="forest-entry show">
            <table>

                <th>
                    <h2>{{ $forest->farm_name }} &nbsp;<sub>林地詳細資料</sub><h2>
                </th>
                <tr>
                    <th><strong>平原森林面積 (公頃)</strong></th>
                    <th>:&emsp;{{ $forest->plain_forest_area_hectares }}</th>
                    <th><sub> &emsp;hm²</sub></th>
                </tr>
                <tr>
                    <th><strong>公共森林面積 (公頃)</strong> </th>
                    <th>:&emsp;{{ $forest->public_forest_area_hectares }}</th>
                    <th><sub> &emsp;hm²</sub></th>
                </tr>
                <tr>
                    <th><strong>自籌資金森林面積 (公頃)</strong></th>
                    <th>:&emsp;{{ $forest->self_funded_forest_area_hectares }} </th>
                    <th><sub> &emsp;hm²</sub></th>
                </tr>
                <th><strong>生態森林公園面積 (公頃)</strong></th>
                <th>:&emsp;{{ $forest->eco_forest_park_area_hectares }}</th>
                <th><sub> &emsp;hm²</sub></th>
                </tr>
                <tr>
                    <th><strong>總面積 (公頃)</strong></th>
                    <th>:&emsp;{{ $forest->total_area_hectares }}</th>
                    <th><sub> &emsp;hm²</sub></th>
                </tr>
            </table>
            <div class="divider"></div>

        </div>

    </div>


@endsection
