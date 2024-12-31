@extends('app')

@section('title', '修改SDGS造林資料')

@section('Forest_content')

@include('message.list')

{!! Form::model($forest,['method'=>'PATCH', 'action'=>['\App\Http\Controllers\ForestController@update',$forest->id ]])!!}

@include('Forest.form',['submit_text'=>'修改林地資料'])


{!! Form::close() !!}
@endsection