<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use Validator;
use Hash;
class AdminPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::guard('admin')->check();
    }
    public function addValidator(){
        //该方法注册一个自定义验证规则
        Validator::extend('check_password', function($attribute, $value, $parameters, $validator) {
            return Hash::check($value,Auth::guard('admin')->user()->password) ;
            });
           
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->addValidator();
        return [
            //sometimes请求中包含对应字段的时候才会做验证
            'origin_password' =>'sometimes|required|check_password',
            'password' =>'sometimes|required|confirmed',
            'password_confirmation' =>'sometimes|required',
        ];
    }

    public function messages(){
        return [
        'origin_password.required'  => '原密码不能为空',
        'origin_password.check_password'  => '原密码输入错误',
        ];
    }
}
