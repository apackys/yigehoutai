<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\AdminPostRequest;
use Auth;

class MyController extends CommonController
{
    public function passwordform(){
        return view('admin.my.password');
    }
    public function changepassword(AdminPostRequest $request){
       $model = Auth::guard('admin')->user();
       $model->password = bcrypt($request['password']);
       $model->save();
/*         https://packagist.org/packages/laracasts/flash. */
       flash('密码修改成功')->overlay();
       return redirect()->back();

    }
}
