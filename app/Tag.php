<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    //creo funzione con lo stesso nome della tabella a cui mi collego, stavolta al PLURALE perchè la relazione è MANY TO MANY
    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
}
