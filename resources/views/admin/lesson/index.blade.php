@extends('admin.layout.layout')
@section('body')
<div class="page-body">
    <div class="row">
        <div class="col-xs-12">
            <div class="well with-header with-footer">
                <div class="header bg-themeprimary">
                    课程管理
                </div>
                <ul class="nav nav-tabs">
                    <li  class="active"><a href="/admin/lesson" >课程列表</a>
                    </li>
                    <li > <a href="/admin/lesson/create">创建课程</a>
                    </li>     </ul>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width='120'>编号</th>
                                    <th>缩略图</th>
                                    <th>课程名称</th>
                                    <th>视频数量</th>
                                    <th>点击量</th>
                                    <th width='120'>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                              
    @foreach($data as $key=>$value)  <tr>
                                <td>{{$value['id']}}</td>
                                <td><img src="{{$value->preview}}" width="30"  height="30" /></td>
                                <td>{{$value->title}}</td>
                                <td>{{$value->videos()->count()}}</td>
                                <td>{{$value->click}}</td>
    <td><div class="btn-group btn-group-sm"><a href="/admin/lesson/{{$value->id}}/edit" class="btn btn-default" >编辑</a> <a  dataid="{{$value['id']}}"  class="btn btn-danger btn-xs adminDel">删除</a>
    
    </div></td>
                                </tr>
    @endforeach                          
                            </tbody>
                            <thead>
                                <tr>
                                    <td colspan="6" style="text-align: center;">{{$data->links()}}</th>
                                                
                                </tr>
                            </thead>
                        </table>
                    </div>  
                  
            </div>
        </div>
    </div>
</div>

<script>
;!function(){
        $('.adminDel').click(function(){
            var id =$(this).attr('dataid'); 
            layer.confirm('您确定要删除吗？',function(){
                $.ajax({
                url:'/admin/lesson/'+ id,
                method:'DELETE',
                success:function(response){
                    if(response.valid ==1 ){
                        layer.msg(response.message,{
                            icon:6,
                            time:'2000'
                        },function(){
                            location.href = '/admin/lesson';
                        })
                    }else{
                            layer.open({
                                title:'删除失败',
                                icon:5,
                                anim:6
                            })
                        }
                }
            });
            });
      
        });
    }();
</script>

@endsection
