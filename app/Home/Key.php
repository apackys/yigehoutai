<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    protected $table = 'key';
    public $timestamps = false;
    public function article(){
        return $this->belongsToMany('App\Home\Article','relation','key_id','article_id');
    }
}
