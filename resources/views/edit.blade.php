@extends('app')

@section('forest_theme')

@include('message.list')

{!! Form::model($forest, ['method'=>'PATCH','action'=>['\App\Http\Controllers\ForestControlles@update',$forest->id]]) !!}
    @include('form',['submit_text'=>'修改林地資料'])
{!! Form::close() !!}
@endsection
