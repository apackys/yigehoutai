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
              <li  class="active"> <a href="/admin/tag/create">新增标签</a>
              </li>    </ul>
                <div class="panel-body">
                    <form action="/admin/tag"  method="post">
                        {{csrf_field()}}
                   <div class="form-group">
                     <label>标签</label>
                     <input type="text" name="name" class="form-control" >
                   </div>
                   <button type="submit" class="btn btn-primary" >添加</button>
                   </form>
                </div>  
                  
            </div>
        </div>
    </div>
</div>

@endsection
