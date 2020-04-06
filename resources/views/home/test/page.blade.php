@extends('home/test/base') 
@section('mainbody')
<div class="page-content">
    <!-- Page Breadcrumb -->
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li class="active">
                <i class="fa fa-home"></i>&nbsp;管理员管理
            </li>
            <li>管理员列表</li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->
    <!-- Page Body -->
    <div class="page-body">
        <a href="" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>&nbsp;管理员添加</a>
        <div class="row">
            <div class="col-xs-12">
                <div class="widget">
                    <div class="widget-header">
                     
                        <div class="widget-buttons" style="text-align: center;">
                            {{-- 可以使用 appends 方法，向分页链接中添加查询参数 --}}
                            {{$user->appends(['type' => 'users'])->links()}} 
                        </div>
                    </div>
                    <div class="widget-body">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>头像</th>
                                <th>账号</th>
                                <th>邮箱</th>
                                <th>年龄</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
@foreach($user as $vo)
                            <tr>
                                <td>{{$vo->id}}</td>
                                <td><img src="{{$vo->avatar}}" width="80" height="80"></td>
                                <td>{{$vo->name}}</td>
                                <td>{{$vo->email}}</td>
                                <td>{{$vo->age}}</td>
                                <td>正常</td>
                                <td>
@if(1)
                                    <a href="#" dataid="{{$vo->id}}" datastatus="{{$vo->status}}" class="btn btn-warning btn-xs adminDis">禁用</a>
@else
                                    <a href="#" dataid="{{$vo->id}}" datastatus="{{$vo->status}}" class="btn btn-success btn-xs adminDis">启动</a>
@endif
                                    <a href="" class="btn btn-azure btn-xs">编辑</a>
                                    <a href="#" dataid="" class="btn btn-danger btn-xs adminDel">删除</a>
                                </td>
                            </tr>
@endforeach
                            <tr>
                                <td  colspan="7" style="text-align: center;">
                                    {{ $user->appends(['type' => 'users'])->links() }}  </td>
                        </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Body -->
</div>
@endsection