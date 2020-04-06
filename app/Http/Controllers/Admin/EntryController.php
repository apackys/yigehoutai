<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request; 
use Auth;
class EntryController extends CommonController
{
 
    public function index(Request $request){
        $fullUrl = $request->fullUrl();
        $ip = $request->getClientIp();
        $port = $request->getPort();
        //dd(Auth::guard('admin')->user());
        return view('admin.entry.index',compact('fullUrl','ip','port'));
    }

   public function loginform(){
      return view('admin.entry.login');
   }
   public function login(Request $request){
       $status =Auth::guard('admin')->attempt([
           'username' =>$request->input('username'),
           'password' =>$request->input('password'),
       ]);       
       if($status){
           //登录成功
           return redirect('/admin/index');
       }else{
           return redirect('/admin/login')->with('error','用户名或密码错误');
       }
   }
   public function  logout(){
      Auth::guard('admin')->logout();
      return redirect('admin/login');
   
   }
}
