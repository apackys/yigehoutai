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
                    <li  ><a href="/admin/lesson" >课程列表</a>
                    </li>
                <li class="active"> <a href="/admin/lesson/{{$lesson->id}}/edit">编辑课程</a>
                    </li>     </ul>
                    <div class="panel-body">
                        <form method="POST" enctype="multipart/form-data" action="/admin/lesson/{{$lesson->id}}">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                        <div class="form-group">
                          <label for="">课程</label>
                          <input type="text" name="title" class="form-control" value="{{$lesson->title}}" >
                        </div>
                        <div class="form-group">
                            <label for="">介绍</label>
                            <input type="text" name="introduce" class="form-control" value="{{$lesson->introduce}}" >
                          </div>
                          <div class="form-group">
                            <label for="">预览图</label>
                            <a class='thumbnail'><img src='{{$lesson->preview}}' alt='我是图片12' /></a>
                            <input type="file" class="form-control-file" name="preview" value="{{$lesson->preview}}">
                          </div>
                         
                          <div class="form-group">
                              <label for="">推荐</label>
                              <label class="radio-inline">
                                <input type="radio" name="iscommend" value="1"  {{$lesson->iscommend==1?'checked':''}} > 是
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="iscommend"  value="0" {{$lesson->iscommend == 0 ?'checked':''}}> 否
                              </label>
                          </div>
                          <div class="form-group">
                            <label for="">热门</label>
                            <label class="radio-inline">
                              <input type="radio" name="ishot" value="1" {{$lesson->ishot == 1 ?'checked':''}}> 是
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="ishot"  value="0" {{$lesson->ishot == 0 ?'checked':''}}> 否
                            </label>
                         </div>
                         <div class="form-group">
                            <label for="">点击数</label>
                            <input type="text" name="click" class="form-control" value="{{$lesson->click}} " required>
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
                       
                          <button class="btn btn-primary">修改信息</button>
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
            el:"#app",
            data:{
                videos:JSON.parse('{!!$video!!}'),
            },
            methods:{
                add:function(){
                    this.videos.push({title:'',path:''})
                },
                del:function(k){
                    this.videos.splice(k,1);
                }
            }
           
        })
    }();
</script>

@endsection
