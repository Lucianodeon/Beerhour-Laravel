<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postModelo extends Model
{
  public $table="posts";
  protected $guarded=[];
  public function user(){
    return $this->belongsTo(User::class,'id_user');
  }
  public function coment(){
    return $this->hasMany(comentariosModelo::class,'id_post');
  }
}
