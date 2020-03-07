<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

  protected $table = 'blogs';
  protected $fillable = [
      'titulo', 'contenido', 'user_id'
  ];

  public function user(){

    return $this->belongsTo('App\User','user_id');
  }

}
