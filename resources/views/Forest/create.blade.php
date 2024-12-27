@extends('app')


@section('title', '新增SDGS造林資料')

@section('Forest_content')


@include('message.list')



{!! Form::open(['url'=>'/forest/store'])!!}

@include('Forest.form',['submit_text'=>'新增林地資料'])


{!! Form::close() !!}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           


@endsection
