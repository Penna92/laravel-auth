<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    // creo funzione con lo stesso nome della tabella a cui mi collego minuscolo AL PLURALE (relazione 1 to many)
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
