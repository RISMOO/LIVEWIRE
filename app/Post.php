<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model


{

    protected $fillable = ['title'];
    public function fields()


    {



        return $this->hasMany('App\Field');//un post a plusieurs chanps
    }
}
