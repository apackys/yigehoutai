<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $guarded = [];
    //与视频1对多关联
    public function videos(){
       return  $this -> hasMany('\App\Model\Video','lesson_id','id');
    }
}
