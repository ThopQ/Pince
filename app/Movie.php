<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //Fillable attributes stored in array
    protected $fillable = ['name', 'description', 'year', 'fsk', 'director_id'];

    public function director()
    {
        return $this->belongsTo('App\Director');
    }

    public function actors()
    {
        return $this->belongsToMany('App\Actor');
    }

    public function genres()
    {
        return $this->belongsToMany('App\Genre');
    }
}
