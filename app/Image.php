<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['gallery_id', 'file_name', 'file_size', 'file_mime','file_path', 'created_by'];
    
    public function galleries()
    {
        return $this->belongsToMany('App\Gallery');
    }
}
