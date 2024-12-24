@extends('app')

@section('forest_theme')

{!! Form::open(['url' => '/forest/store']) !!}
        @include('form',['submit_text'=>'新增林地資料'])
{!! Form::close() !!}
@endsection



