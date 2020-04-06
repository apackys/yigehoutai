<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use FormBuilder\components\Upload;

Route::get('/','Admin\EntryController@login');
Route::any('/test/{id}/{name}',function($id,$name){
    return "地址是/test/".$id.'/'.$name;
})->where(['id'=>'[0-9]+','name'=>'[a-z]+']);
Route::match(['get','post'],'/aaa',function(){
    return "地址是/aaa";
});

Route::get('/index','HomeController@Closure');
Route::prefix('/admin')->group(function(){
    Route::get('/home',function(){
        return "地址是：/admin/home";
    });
    Route::get('/user',function(){
        return "地址是：/admin/user?id=".$_GET['id'];
    });
    Route::get('/list',function(){
        phpinfo();
    });
    Route::get('/index','Admin\IndexController@index');
    Route::get('/add','HomeController@add')->name('add');
});
Route::get('/home/index','Home\IndexController@index');
//子域名设置
Route::domain('{account}.cmf.com')->group(function(){
    Route::get('user/{id}',function($account,$id){
        return $account.'<br/>'.$id;
    });
}); //http://www.cmf.com/user/1    www 1


//DB门面的增删改查
/* Route::prefix('/home')->group(function(){
    Route::get('add','HomeController@add');
    Route::get('delete','HomeController@delete');
    Route::get('update','HomeController@update');
    Route::get('select','HomeController@select');
});
 */
Route::group(['prefix'=>'/home'],function(){
    Route::get('add','HomeController@add');
    Route::get('delete','HomeController@delete');
    Route::get('update','HomeController@update');
    Route::get('select','HomeController@select');
    Route::get('test','HomeController@test');
    Route::get('test1','HomeController@test1');
    Route::get('test2','HomeController@test2');
    Route::get('test3','HomeController@test3');
    Route::post('test4','HomeController@test4')->name('test4');
    Route::any('test5','HomeController@test5')->name('test5');;
    Route::get('test6','HomeController@test6');
    Route::get('test7','HomeController@test7');
    Route::get('test8','HomeController@test8');
    Route::any('test9','HomeController@test9');
    Route::any('test10','HomeController@test10'); //文件上传
    Route::get('page','HomeController@page'); //分页
    Route::get('rajax','HomeController@rajax');//ajaxcd
    Route::get('sajax','HomeController@sajax');//ajax
    Route::get('tsession','HomeController@tsession');//session
    Route::get('tcache','HomeController@tcache'); //cache
    Route::get('jion','HomeController@jion'); //交叉查询
    Route::get('hasone','HomeController@hasone'); //1to1
    Route::get('hasmany','HomeController@hasmany'); //1tomany
    Route::get('belongsart','HomeController@belongsart'); //belongsToMany
    Route::get('belongskey','HomeController@belongskey'); //belongsToMany
    
});

Route::group(['prefix'=>'/admin','namespace'=>'Admin'],function(){
     Route::get('/login','EntryController@loginform'); //登录视图
     Route::post('/login','EntryController@login'); //登录方法
     Route::get('/index','EntryController@index'); //登录方法
     Route::get('/logout','EntryController@logout'); //退出登录
     Route::get('/changepassword','MyController@passwordform'); //修改密码视图
     Route::post('/changepassword','MyController@changepassword'); //修改密码
     Route::resource('tag','TagController'); //标签管理
     Route::resource('lesson','LessonController');   //课程管理
     Route::any('uploader','UploadController@uploader');
     Route::any('filelists','UploadController@fileLists');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
