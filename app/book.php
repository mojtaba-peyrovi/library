<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class book extends Model
{
    protected $guarded = [];

    public function categories(){

        return $this->belongsToMany('App\category')->withTimestamps();
    }

    public function user(){

        return $this->belongsTo('App\user');
    }

    public function scopeFilter($query, $filters){
        $books = Book::latest();

            if ($month = isset($filters['month'])) {
                    $query->whereMonth('created_at',Carbon::parse($month)->month);
            }

            if ($year = isset($filters['year'])) {
                    $query->whereYear('created_at', $year);
            }

            //$query = $query->get();

    }
}
