<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
  protected $table = "postingan";

  protected $fillable = ['isi', 'gambar', 'user_id'];

  public function author(){
      return $this->belongsTo('App\User', 'user_id');
  }

  public function postingan(){
      return $this->hasOne('App\Komentar', 'postingan_id');
  }
}
