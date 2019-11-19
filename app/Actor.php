<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    //Fillable attributes stored in array
    protected $fillable = ['name'];

    public function movies()
    {
        return $this->belongsToMany('App\Movie');
    }
}
