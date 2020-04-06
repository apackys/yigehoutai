<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    public function author(){
      return  $this->hasOne('App\Home\Author','id','author_id');
    }
    public function comment(){
        return $this->hasMany('App\Home\Comment','article_id','id');
    }
    public function key(){
      return $this->belongsToMany('App\Home\key','relation','article_id','key_id');
    }

    

}
