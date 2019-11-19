<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //Fillable attributes stored in array
    protected $fillable = ['name', 'description'];

    public function movies()
    {
        return $this->belongsToMany('App\Movie');
    }
}
