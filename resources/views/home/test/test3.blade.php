@extends('home/test/base')
@section('mainbody')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action=""  method="post">
    用户名：  <input name="name" type="text"  placeholder="用户名"><br/>
    邮箱：  <input name="email" type="text"  placeholder="邮箱"><br/>
    年龄：  <input name="age" type="number"  placeholder="年龄"><br/>
{{-- <input name="_token" type="hidden" value="{{csrf_token()}}"> --}}
{{csrf_field()}}
    <input type='submit' value="提交">

</form>
@endsection