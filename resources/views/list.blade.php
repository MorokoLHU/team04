@extends('app')

@section('forest_theme')


<div class="forest-table-container"> 
    <table>
        <thead>
            <tr>
                <th>森林名稱</th>
                <th>平原森林面積 (公頃)</th>
                <th>公共森林面積 (公頃)</th>
                <th>自籌資金森林面積 (公頃)</th>
                <th>生態森林公園面積 (公頃)</th>
                <th>總面積 (公頃)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($forests as $forest)
            <tr>
                <td>{{ $forest->farm_name }}</td>
                <td>{{ $forest->plain_forest_area_hectares }}</td>
                <td>{{ $forest->public_forest_area_hectares }}</td>
                <td>{{ $forest->self_funded_forest_area_hectares }}</td>
                <td>{{ $forest->eco_forest_park_area_hectares }}</td>
                <td>{{ $forest->total_area_hectares }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection