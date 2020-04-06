<?php

?>
<link rel="stylesheet" type="text/css" href="{{asset('css')}}/app.css">
@extends('home.test.base') 
{{-- extends 需要完整的路径 --}}
@section('mainbody')
  id &emsp;&emsp;name&emsp;&emsp;age&emsp;&emsp;email<br/>
@foreach($db as $key => $value)
{{$value->id}}&emsp;&emsp;{{$value->name}}&emsp;&emsp;{{$value->age}}&emsp;&emsp;{{$value->email}} <br/>
@endforeach
<hr>
今天是星期
@if($day == '1')
一
@elseif($day == '2')
二
@elseif($day == '3')
三
@elseif($day == '4')
四
@elseif($day == '5')
五
@elseif($day == '6')
六
@else
日
@endif

<br/>
<hr>
{{$day}}<br/>
{{date('w')}}<br/>
今天是星期{{$weekarray[date('w',time())]}}

@endsection


{{-- @include('home.test.base')  --}}