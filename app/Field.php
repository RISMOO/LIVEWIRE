<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{

      protected $fillable =['content'];
    public function post()

    {
        return $this->belongsTo('App\Post');//un filed appartient a un post

    }


}
