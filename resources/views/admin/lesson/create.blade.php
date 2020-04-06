@extends('admin.layout.layout')
@section('body')

<link href="/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="/js/fileinput.min.js" type="text/javascript"></script>
<script src="/js/fileinput_locale_zh.js" type="text/javascript"></script>
<div class="page-body">
    <div class="row">
        <div class="col-xs-12">
            <div class="well with-header with-footer">
                <div class="header bg-themeprimary">
                    课程管理
                </div>
                <ul class="nav nav-tabs">
                    <li><a href="/admin/lesson" >课程列表</a>
                    </li>
                    <li class="active"> <a href="/admin/lesson/create">创建课程</a>
                    </li>    </ul>
                    <div class="panel-body"><form enctype="multipart/form-data" action="/admin/lesson"  method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label for="">课程</label>
                          <input type="text" name="title" class="form-control" placeholder="课程" required>
                        </div>
                        <div class="form-group">
                            <label for="">介绍</label>
                            <input type="text" name="introduce" class="form-control" placeholder="介绍" required>
                          </div>
                          <div class="form-group">
                            <label for="">预览图</label>
                            <input id="file-0" class="file" name="preview" type="file" multiple data-min-file-count="1">
                          </div>
                         
                          <div class="form-group">
                              <label for="">推荐</label>
                              <label class="radio-inline">
                                <input type="radio" name="iscommend" value="1" checked> 是
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="iscommend"  value="0"> 否
                              </label>
                          </div>
                          <div class="form-group">
                            <label for="">热门</label>
                            <label class="radio-inline">
                              <input type="radio" name="ishot" value="1" checked> 是
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="ishot"  value="0"> 否
                            </label>
                         </div>
                         <div class="form-group">
                            <label for="">点击数</label>
                            <input type="text" name="click" class="form-control" value="0" required>
                          </div>
                           <div class="panel panel-default" id="app">
                            <div class="panel-heading">
                               <h3 class="panel-title">视频管理</h3>
                            </div>
                            <div class="panel-body" v-for="(v,k) in videos">
                               <div class="form-group">
                                 <label for="">视频标题</label>
                                 <input type="text" name="" v-model="v.title" class="form-control" placeholder="视频标题" >
                               </div>
                               <div class="form-group">
                                <label for="">视频地址</label>
                                <input type="text" name="" v-model="v.path" class="form-control" placeholder="视频地址" >
                              </div>
                              <div>
                                <button class="btn btn-danger" @click.prevent="del(k)">删除视频</button>
                              </div>
                             </div>
                             <div class="panel-footer">
                                <button class="btn btn-primary" @click.prevent="add">添加视频</button>
                            </div>
                       
                            <textarea name="videos" hidden>@{{videos}}</textarea>
                           </div>
                       
                          <button class="btn btn-primary">保存信息</button>
                      </form>
                    </div>  
                  
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.bootcss.com/vue/2.6.11/vue.js"></script>
<script>
    !function(vue){
    new Vue({
                el:'#app',
                data:{
                    videos:[{title:'',path:''}],
                },
                methods:{
                    add:function(){
                        this.videos.push({title:'',path:''});
                    },
                    del:function(k){
                        this.videos.splice(k,1);
                    }
                    }    
         });
        }();

    $("#file-0").fileinput({
        'allowedFileExtensions' : ['jpg', 'png','gif'],
    });
   
   
</script>

@endsection
