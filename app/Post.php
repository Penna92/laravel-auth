<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    // creo funzione con lo stesso nome della tabella a cui mi collego minuscolo (relazione MANY TO 1)
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    //creo funzione con lo stesso nome della tabella a cui mi collego, stavolta al PLURALE perchè la relazione è MANY TO MANY
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
