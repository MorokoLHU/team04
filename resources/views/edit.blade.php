@extends('app')

@section('forest_theme')

{!! Form::model($forest, ['method'=>'PATCH','action'=>['\App\Http\Controllers\ForestControlles@update',$forest->id]]) !!}
    @include('form',['submit_text'=>'修改林地資料'])
{!! Form::close() !!}
@endsection
