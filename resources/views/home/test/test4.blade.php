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
<form action="" method="post" enctype="multipart/form-data" >
    用户名：  <input name="name" type="text"  placeholder="用户名"  value="{{ old('name') }}"><br/>
    邮箱：  <input name="email" type="text"  placeholder="邮箱"  value="{{ old('email') }}"><br/>
    年龄：  <input name="age" type="number"  placeholder="年龄"  value="{{ old('age') }}"><br/>
    头像：  <input name="avatar" type="file"  value="{{ old('avatar') }}"><br/>
    验证码：  <input name="captcha" type="text" >
    {{-- Math.random生成0-1随机数 避免浏览器缓存，因为每次的URL都不一致，所以浏览器会从新发请求 --}}
    <img src="{{ captcha_src() }}" onclick="this.src='/captcha/default?'+Math.random()" title="点击图片重新获取验证码">
<br/>
          <input name="_token" type="hidden" value="{{csrf_token()}}"> 

    <input type="submit" value="提交">
</form>
@endsection