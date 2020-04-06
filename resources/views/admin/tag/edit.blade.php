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
                    <li><a href="/admin/tag" >标签列表</a>
                    </li>
                    <li  class="active"> <a href="/admin/tag/{{$tag['id']}}/edit">修改标签</a>
                    </li>    </ul>
                    <div class="panel-body"><form method="POST" action="/admin/tag/{{$tag['id']}}">
                       {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="form-group">
                          <label for="">标签</label>
                        <input type="text" name="name" class="form-control" value="{{$tag['name']}}" >
                        </div>
                        <button  dataid="{{$tag['id']}}"  class="btn btn-primary  adminEdit">修改</button>
                   </form>
                    </div>  
                  
            </div>
        </div>
    </div>
</div>



@endsection
