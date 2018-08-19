<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
     /**
     * The database table used by the model
     * @var string
     */
   protected$table = 'galleries';
protected $fillable = ['name','cover_image','created_by'];

    public function images()
    {
        return $this->hasMany('App\Image');
    }

     public function getCover_ImageAttribute($cover_image)
    {
        return asset($cover_image);
    }

}
