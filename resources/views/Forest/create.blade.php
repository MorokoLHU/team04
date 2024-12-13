@extends('app')

@section('title', 'SDGS造林資料')

@section('Forest_content')

{!! Form::open(['url'=>'/forest/store'])!!}
<div class="form-group">
    {!! Form::label('farm_name', '預定擴建林地的農場名：') !!}
    {!! Form::text('farm_name', null, [
        'class' => 'form-control',
        'required' => 'required',        // 表示該欄位是必填的
        'pattern' => '^[\u4e00-\u9fa5a-zA-Z]+$', // 只允許中文和英文字符
        'title' => '只能輸入中文和英文字符',      // 提示訊息
    ]) !!}
</div>
<div class="form-group">
    {!! Form::label('plain_forest_area_hectares', '平地造林面積公頃：') !!}
    {!! Form::text('plain_forest_area_hectares', null, ['class' => 'form-control',
        'required' => 'required',        // 表示該欄位是必填的
        'type' => 'number','step' => 'any']) !!}
</div>
<div class="form-group">
    {!! Form::label('public_forest_area_hectares', '全民造林面積公頃：') !!}
    {!! Form::text('public_forest_area_hectares', null, ['class' => 'form-control',
    'required' => 'required',        // 表示該欄位是必填的
    'type' => 'number','step' => 'any']) !!}
</div>
<div class="form-group">
    {!! Form::label('self_funded_forest_area_hectares', '自費造林面積公頃：') !!}
    {!! Form::text('self_funded_forest_area_hectares', null, ['class' => 'form-control',
    'required' => 'required',        // 表示該欄位是必填的
    'type' => 'number','step' => 'any']) !!}
</div>
<div class="form-group">
    {!! Form::label('eco_forest_park_area_hectares', '環保林園大道面積公頃：') !!}
    {!! Form::text('eco_forest_park_area_hectares', null, ['class' => 'form-control',
    'required' => 'required',        // 表示該欄位是必填的
    'type' => 'number','step' => 'any']) !!}
</div>
<div class="form-group">
    {!! Form::label('total_area_hectares', '合計面積公頃：') !!}
    {!! Form::text('total_area_hectares', null, ['class' => 'form-control',
    'required' => 'required',        // 表示該欄位是必填的
    'type' => 'number','step' => 'any']) !!}
</div>
<div class="form-group">
    <br>
    {!! Form::submit('新增林地資料', ['class'=>'btn btn-primary form-control ']) !!}
</div>

{!! Form::close() !!}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           


@endsection
