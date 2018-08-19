<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{


    protected $fillable = [
        'title','description','start_date','featured','slug','address'
    ];

    public function getFeaturedAttribute($featured)
    {
        return asset($featured);
    }


}
