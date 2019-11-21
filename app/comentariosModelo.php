<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentariosModelo extends Model
{
  public $table="comentarios";
  protected $guarded=[];
  public function user(){
    return $this->belongsTo(User::class,'id_user');
  }
  public function post(){
    return $this->belongsTo(postModelo::class,'id_post');
  }
}
