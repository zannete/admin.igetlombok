<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
  public function author(){
    return $this->belongsTo("App\Admin");
  }

  public function category(){
    return $this->belongsTo("App\PostCategory");
  }
}
