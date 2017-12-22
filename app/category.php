<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['category'];

    public function books(){
        return $this->belongsToMany('App\book')->withTimestamps();
    }
}
