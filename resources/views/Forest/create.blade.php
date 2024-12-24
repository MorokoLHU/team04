@extends('app')

@section('title', 'SDGS造林資料')

@section('Forest_content')

{!! Form::open(['url'=>'/forest/store'])!!}
@include('Forest.form',['submit_text'=>'新增林地資料'])


{!! Form::close() !!}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           


@endsection
