<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Member extends Model
{
    use SoftDeletes;
    protected $dates = ['delete_at'];
    protected $table='menber';
    protected $primarykey='id';
    protected $fillable=['id','name','age','email','avatar'];
    public $timestamps = true;
}
