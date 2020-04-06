@extends('admin.layout.layout')
@section('body')
<div class="page-body">
    <div class="row">
        <div class="col-xs-12">
            <div class="well with-header with-footer">
                <div class="header bg-themeprimary">
                    TAG管理
                </div>
                <ul class="nav nav-tabs">
                    <li  class="active"><a href="/admin/tag" >标签列表</a>
                    </li>
                    <li> <a href="/admin/tag/create">新增标签</a>
                    </li>    </ul>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width='120'>编号</th>
                                <th>标签</th>
                                <th width='120'>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                          
@foreach($tag as $key=>$value)  <tr>
                            <td>{{$value['id']}}</td>
                            <td>{{$value->name}}</td>
<td><div class="btn-group btn-group-sm"><a href="/admin/tag/{{$value->id}}/edit" class="btn btn-default" >编辑</a> <a  dataid="{{$value['id']}}"  class="btn btn-danger btn-xs adminDel">删除</a>

</div></td>
                            </tr>
@endforeach                          
                        </tbody>
                        <thead>
                            <tr>
                                <td colspan="3" style="text-align: center;">{{$tag->links()}}</th>
                                            
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
     //
    $('.adminDel').click(function(){
        var id = $(this).attr('dataid'); 
            layer.confirm('您确定要删除吗？', function(){
                $.ajax({
                    url:'/admin/tag/'+id,
                    method:'DELETE',
                    success:function(response){
                      if(response.valid==1){
                        layer.msg(response.message,{
                            icon:6,
                            time:'2000'
                        },function(){
                            location.href = '/admin/tag/';
                        })
                      }else{
                          layer.open({
                            title:'删除失败',
                            icon:5,
                            anim:6
                          })
                      }
                    }
                })
           
            });
    });


}();

</script>

@endsection
