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
                <th><a href="/forest/create" class="button">創建(自訂表格) </a></th>
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
                <td><a href={{ route('show', ['id'=> $forest -> id]) }}>"顯示"</a></td>

                <td><a href="{{ route('edit',['id'=>$forest->id])}}">"修改"</a></td>
                <td>
                    <form action="{{ url('/forest/delete', ['id' => $forest->id]) }}" method="post">
                        <input class="bth bth-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form>
                </td>
                
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection