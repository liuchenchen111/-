@extends('layouts.shop')

@section('title')
    商城列表
    @endsection
@section('content')
    <h1>开始主题</h1>
@foreach($data as $user)
   {{$user['u_name']}}<br>
   {{$user['salt']}}<br>
@endforeach
    <h1>结束主题</h1>
@endsection
