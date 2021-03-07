<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
  protected $table = "komentar";

  protected $fillable = ['isi', 'postingan_id'];

  public function komentator(){
      return $this->belongsTo('App\Postingan', 'postingan_id');
  }
}
