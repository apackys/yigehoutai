<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function uploader(Request $request){
        if ($request->hasFile('preview') && $request->file('preview')->isValid()){
            $upload = $request->file('preview');
            $path = $upload->store(date(Ymd),'attachment');
            return ['valid'=>1,'message'=>asset('attachment'.$path)];
           }else{
            return ['valid'=>0,'message'=>'上传失败文件大小不能超过2M'];
           }
    }
    public function fileLists(){
        return ['data'=>[],'page'=>''];
    }
}
