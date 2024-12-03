@extends('app')

@section('title', 'SDGS造林資料')

@section('Forest_content')

    <div class="forest-grid">
        @foreach ($forests as $forest)
            <div class="forest-entry">
                <table>

                    <th>
                        <h2>{{ $forest->farm_name }}<h2>
                    </th>
                    <tr>
                        <th><strong>平原森林面積 (公頃):</strong></th>
                        <th> {{ $forest->plain_forest_area_hectares }}</th>
                    </tr>
                    <tr>
                        <th><strong>公共森林面積 (公頃):</strong> </th>
                        <th>{{ $forest->public_forest_area_hectares }}</th>
                    </tr>
                    <tr>
                        <th><strong>自籌資金森林面積 (公頃):</strong></th>
                        <th>{{ $forest->self_funded_forest_area_hectares }}</th>
                    </tr>
                    <th><strong>生態森林公園面積 (公頃):</strong></th>
                    <th>{{ $forest->eco_forest_park_area_hectares }}</th>
                    </tr>
                    <tr>
                        <th><strong>總面積 (公頃):</strong></th>
                        <th> {{ $forest->total_area_hectares }}</th>
                    </tr>
                    
                
                </table>
                <div class="divider"></div>
                <td><strong><a class="optionA button" href="{{ route('Forest.show', ['id'=>$forest->id]) }}">顯示</a></strong></td>
                <td><strong><a class="optionA button" href="{{ route('Forest.edit', ['id'=>$forest->id]) }}">修改</a></strong></td>
                <td>
                    <form class="formA" action="{{ url('/forest/delete', ['id'=>$forest->id])  }}" method = "post">
                        <input class="optionA button "  type="submit" value="刪除" >
                        @method('delete')
                        @csrf 
                    </form>
                </td>
            </div>
        @endforeach
    </div>
    <div class="pagination">
        <!-- 顯示分頁的上一頁、下一頁等控制按鈕 -->
        {{ $forests->links() }}
    </div>

@endsection
