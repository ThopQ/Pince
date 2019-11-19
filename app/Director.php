<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    //Fillable attributes stored in array
    protected $fillable = ['name'];

    public function movies()
    {
        return $this->hasMany('App\Movie');
    }
}
