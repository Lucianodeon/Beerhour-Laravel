<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFollow\Traits\CanBeLiked;

class postModelo extends Model
{
    use CanBeLiked;
  public $table="posts";
  protected $guarded=[];
  public function user(){
    return $this->belongsTo(User::class,'id_user');
  }
  public function coment(){
    return $this->hasMany(comentariosModelo::class,'id_post');
  }
}
